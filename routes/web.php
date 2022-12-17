<?php

use App\Models\ListTiket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\PesertaVoteSing;
use App\Models\PesertaVoteDraw;
use App\Models\PesertaVoteCosplay;


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
    return view('vote.index');
});

// ROUTE VOTE SING
Route::get('/itmatsuri/vote/sing', function(){
    return view('vote.singer', [
        'data' => PesertaVoteSing::all()
    ]);
});

Route::get('/itmatsuri/vote/sing/hasil', function(){
    return view('vote.hasil-singer', [
        'data' => PesertaVoteSing::all()->sortByDesc('jumlah_vote')
    ]);
});

Route::post('/submitvotesing', function (Request $request) {
    $hasil = DB::select('select * from tiket where kode_tiket = :kode_tiket', ['kode_tiket' => $_POST['kode_tiket']]);
    if ($hasil) {
        if ($hasil[0]->status_sing == 1) {
            return response()->json(['status' => false, 'message' => 'Kode Telah digunakan'], 200);
        } else {
            // update DB tiket and peserta_voting
            DB::update('update peserta_vote_sings set jumlah_vote = jumlah_vote + 1 where id = ?', [$_POST['vote']]);
            DB::update('update tiket set status_sing = 1 where kode_tiket = ?', [$_POST['kode_tiket']]);
            return response()->json(['status' => true, 'message' => 'Vote telah direkam'], 200);
        }
    }
    return response()->json(['message' => 'Kode tiket tidak ditemukan', 'kode_tiket' => $_POST['kode_tiket']], 404);

})->name('submitvotesing');

// END ROUTE VOTE SING

// ROUTE VOTE DRAW
Route::get('/itmatsuri/vote/draw', function(){
    return view('vote.drawing', [
        'data' => PesertaVoteDraw::all()
    ]);
});

Route::get('/itmatsuri/vote/draw/hasil', function(){
    return view('vote.hasil-draw', [
        'data' => PesertaVoteDraw::all()->sortByDesc('jumlah_vote')
    ]);
});

Route::post('/submitvotedraw', function (Request $request) {
    $hasil = DB::select('select * from tiket where kode_tiket = :kode_tiket', ['kode_tiket' => $_POST['kode_tiket']]);
    if ($hasil) {
        if ($hasil[0]->status_draw == 1) {
            return response()->json(['status' => false, 'message' => 'Kode Telah digunakan'], 200);
        } else {
            // update DB tiket and peserta_voting
            DB::update('update peserta_vote_draws set jumlah_vote = jumlah_vote + 1 where id = ?', [$_POST['vote']]);
            DB::update('update tiket set status_draw = 1 where kode_tiket = ?', [$_POST['kode_tiket']]);
            return response()->json(['status' => true, 'message' => 'Vote telah direkam'], 200);
        }
    }
    return response()->json(['message' => 'Kode tiket tidak ditemukan', 'kode_tiket' => $_POST['kode_tiket']], 404);

})->name('submitvotedraw');

// END ROUTE VOTE DRAW

// ROUTE VOTE COSPLAY
Route::get('/itmatsuri/vote/cosplay', function(){
    return view('vote.cosplay', [
        'data' => PesertaVoteCosplay::all()
    ]);
});

Route::get('/itmatsuri/vote/cosplay/hasil', function(){
    return view('vote.hasil-cosplay', [
        'data' => PesertaVoteCosplay::all()->sortByDesc('jumlah_vote')
    ]);
});

Route::post('/submitvotecosplay', function (Request $request) {
    $hasil = DB::select('select * from tiket where kode_tiket = :kode_tiket', ['kode_tiket' => $_POST['kode_tiket']]);
    if ($hasil) {
        if ($hasil[0]->status_cosplay == 1) {
            return response()->json(['status' => false, 'message' => 'Kode Telah digunakan'], 200);
        } else {
            // update DB tiket and peserta_voting
            DB::update('update peserta_vote_cosplays set jumlah_vote = jumlah_vote + 1 where id = ?', [$_POST['vote']]);
            DB::update('update tiket set status_cosplay = 1 where kode_tiket = ?', [$_POST['kode_tiket']]);
            return response()->json(['status' => true, 'message' => 'Vote telah direkam'], 200);
        }
    }
    return response()->json(['message' => 'Kode tiket tidak ditemukan', 'kode_tiket' => $_POST['kode_tiket']], 404);

})->name('submitvotecosplay');

// END ROUTE VOTE COSPLAY





// ADMIN PESERTA SING

Route::post('/uppesertasing', function (Request $request) {
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'nama' => 'required|string',
        "nomor" => "required|numeric|min:1|unique:peserta_vote_sings"
    ]);

    $imageName = 'lomba_sing' . time() . '.' . $request->foto->extension();

    $request->foto->move(public_path('images-sing'), $imageName);

    PesertaVoteSing::create([
        'nama' => $request->nama,
        'foto' => $imageName,
        'nomor' => $request->nomor
    ]);
    return back()
        ->with('berhasil', $request->nama . ' telah ditambahkan');
})->name('tambahpesertasing');

Route::get('/admin/pesertasing', function () {
    return view('admin.pesertasing');
})->middleware('auth')->name('pesertasing');


// ADMIN PESERTA COSPLAY

Route::post('/uppesertacosplay', function (Request $request) {
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'nama' => 'required|string',
        "nomor" => "required|numeric|min:1|unique:peserta_vote_cosplays"
    ]);

    $imageName = 'lomba_cosplay' . time() . '.' . $request->foto->extension();

    $request->foto->move(public_path('images-cosplay'), $imageName);

    PesertaVoteCosplay::create([
        'nama' => $request->nama,
        'gambar' => $imageName,
        'nomor' => $request->nomor
    ]);
    return back()
        ->with('berhasil', $request->nama . ' telah ditambahkan');
})->name('tambahpesertacosplay');

Route::get('/admin/pesertacosplay', function () {
    return view('admin.pesertacosplay');
})->middleware('auth')->name('pesertacosplay');

// ADMIN PESERTA DRAWING

Route::post('/uppesertadraw', function (Request $request) {
    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'nama' => 'required|string',
        'desc' => 'required|string',
        'nomor' => 'required|numeric|min:1|unique:peserta_vote_draws',
        'nama_gambar' => 'required|string'
    ]);

    $imageName = 'lomba_gambar' . time() . '.' . $request->gambar->extension();

    $request->gambar->move(public_path('images'), $imageName);

    /* Store to  DATABASE from HERE */
    PesertaVoteDraw::create([
        'nama' => $request->nama,
        'gambar' => $imageName,
        'desc' => $request->desc,
        'nomor' => $request->nomor,
        'nama_gambar' => $request->nama_gambar
    ]);
    return back()
        ->with('berhasil', $request->nama . ' telah ditambahkan');
})->name('tambahpesertadraw');

Route::get('/admin/pesertadraw', function () {
    return view('admin.pesertadraw');
})->middleware('auth')->name('pesertadraw');


// Route admin
Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth')->name('halamanAdmin');


Route::get('/admintiket', function () {
    return view('admin.tiket', ['data' => ListTiket::all()]);
})->middleware('auth')->name('admintiket');

Route::get('/admintambahtiket', function () {
    return view('admin.tambahtiket');
})->middleware('auth')->name('admintambahtiket');

Route::post('/admintambahtiket', function (Request $request) {
    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'nama_tiket' => 'required|string',
        'harga_tiket' => 'required|integer',
        'desc' => 'required|string',
    ], [
            'gambar.required' => 'Gambar harus diisi',
            'gambar.image' => 'Gambar harus berupa gambar',
            'gambar.mimes' => 'Gambar harus berupa jpeg,png,jpg',
            'gambar.max' => 'Gambar maksimal 10MB',
            'nama_tiket.required' => 'Nama tiket harus diisi',
            'nama_tiket.string' => 'Nama tiket harus berupa string',
            'harga_tiket.required' => 'Harga tiket harus diisi',
            'harga_tiket.integer' => 'Harga tiket harus berupa angka',
            'desc.required' => 'Deskripsi tiket harus diisi',
            'desc.string' => 'Deskripsi tiket harus berupa string',
        ]);

    $imageName = 'tiket_' . time() . '.' . $request->gambar->extension();

    $request->gambar->move(public_path('images'), $imageName);
    ListTiket::create([
        'nama_tiket' => $request->nama_tiket,
        'harga_tiket' => $request->harga_tiket,
        'desc_tiket' => $request->desc,
        'gambar_tiket' => $imageName
    ]);
    return back()->with('berhasil', $request->nama_tiket . ' telah ditambahkan');
})->middleware('auth')->name('uptiket');

Route::post('/adminubahstatus', function () {
    DB::update('update list_tiket set status_tiket = ? where id = ?', [$_POST['status'], $_POST['id']]);
    return response()->json(['status' => 'berhasil']);
})->middleware('auth')->name('adminubahstatus');



Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('admin');
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('adminlogout');