<?php

use App\Models\ListTiket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\PesertaVoting;
use App\Models\Tiket;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ROUTE IT FEST
Route::get('/', function () {
    return redirect('/itfest');
});

Route::get('/itfest/tentang', function () {
    return view('tentang'); // file view tentang.blade.php  (uus)
});

Route::get('/itfest/roadmap', function () {
    return view('roadmap'); // file view roadmap.blade.php (uus)
});

Route::get('/itfest', function () {
    return view('itfest');
});


// ROUTE IT MATSURI
Route::get('/itmatsuri', function () {
    return view('itmatsuri');
});

// route untuk TIKET
Route::get('/itmatsuri/tiket', function () {
    return view('tiket', [
        'data' => ListTiket::all()
    ]);
});




Route::get('/itmatsuri/tiket/{id}', function ($id) {

    return view('detail', [
        'data' => DB::table('list_tiket')->where('id', $id)->get()->first()
    ]);
});

Route::post('/checkout', function (Request $request) {

    // validation for request
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email:dns',
    ]);
    // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = "Mid-server-XaMZsO83BLDuyq2VgiIYudWM";
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = true;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;

    $params = array(
        'transaction_details' => array(
            'order_id' => 'HMTI-FT-ULM-' . rand(),
            'gross_amount' => DB::table('list_tiket')->where('id', $request->id)->get('harga_tiket')->first()->harga_tiket,
        ),
        'customer_details' => array(
            'first_name' => $request->name,
            'last_name' => '',
            'email' => $request->email,
        ),
        // key callback digunakan untuk membuat fungsi callback custom yang nantinya akan ditangkap di view pembayarayn berhasil
        "callbacks" => array(
            "finish" => "status-pembayaran?name=" . $request->nama . "&email=" . $request->email . "&total=" . DB::table('list_tiket')->where('id', $request->id)->get('harga_tiket')->first()->harga_tiket . "&item=" . DB::table('list_tiket')->where('id', $request->id)->get('nama_tiket')->first()->nama_tiket
        )
    );
    $snapToken = \Midtrans\Snap::getSnapToken($params);
    return view('checkout', [
        'nama' => $request->nama,
        'email' => $request->email,
        'snap_token' => $snapToken,
        'harga' => DB::table('list_tiket')->where('id', $request->id)->get('harga_tiket')->first()->harga_tiket,
    ]);
});


Route::get('/status-pembayaran', function (Request $request) {
    return view('statusbayar', ['data' => $request->all()]);
});


// route untuk vote

Route::get('/itmatsuri/vote', function () {
    return view(
        'vote',
        [
            'data' => PesertaVoting::all()
        ]
    );
});


Route::post('/submitdatavote', function (Request $request) {
    $hasil = DB::select('select * from tiket where kode_tiket = :kode_tiket', ['kode_tiket' => $_POST['kode_tiket']]);
    // $hasil = DB::select('select * from peserta_voting where id = ?', [$_POST['vote']]);
    // return response()->json(['hasil' => $hasil]);
    if ($hasil) {
        if ($hasil[0]->status == 1) {
            return response()->json(['status' => false, 'message' => 'Kode Telah digunakan'], 200);
        } else {
            // update DB tiket and peserta_voting
            DB::update('update peserta_voting set jumlah_vote = jumlah_vote + 1 where id = ?', [$_POST['vote']]);
            DB::update('update tiket set status = 1 where kode_tiket = ?', [$_POST['kode_tiket']]);
            return response()->json(['status' => true, 'message' => 'Vote telah direkam'], 200);
        }
    }
    return response()->json(['message' => 'gagal', 'kode_tiket' => $_POST['kode_tiket'], 'hasil' => $hasil], 404);

})->name('submitvote');

Route::get('/itmatsuri/hasilvote', function () {
    return view('hasilvote', ['data' => PesertaVoting::all()]);
});





Route::post('/uppeserta', function (Request $request) {
    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'nama' => 'required|string',
        'desc' => 'required|string',
        'nama_gambar' => 'required|string'
    ]);

    $imageName = 'lomba_gambar' . time() . '.' . $request->gambar->extension();

    $request->gambar->move(public_path('images'), $imageName);

    /* Store to  DATABASE from HERE */
    PesertaVoting::create([
        'nama' => $request->nama,
        'gambar' => $imageName,
        'desc' => $request->desc,
        'nama_gambar' => $request->nama_gambar
    ]);
    return back()
        ->with('berhasil', $request->nama . ' telah ditambahkan');
})->name('upadmin');



// Route admin
Route::get('/admin', function () {
    return view('admin.admin');
})->middleware('auth')->name('halamanAdmin');
Route::get('/admintiket', function () {

    return view('admin.tiket', ['data' => ListTiket::all()]);
})->middleware('auth')->name('admintiket');

Route::get('/admintambahtiket', function () {
    return view('admin.tambahtiket');
})->middleware('auth')->name('admintambahtiket');
Route::post('/admintambahtiket', function () {
    return view('admin.tambahtiket');
})->middleware('auth')->name('uptiket');
Route::post('/adminubahstatus', function () {
    DB::update('update list_tiket set status_tiket = ? where id = ?', [$_POST['status'], $_POST['id']]);
    return response()->json(['status' => 'berhasil']);
})->middleware('auth')->name('adminubahstatus');



Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('admin');
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('adminlogout');