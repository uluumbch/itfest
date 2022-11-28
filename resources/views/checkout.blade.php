<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout Tiket IT MATSURI</title>

    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.midtrans.com/snap/snap.js"
      data-client-key="Mid-client-UcjKyMKYISnA7HEX"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

</head>

<body>
    <div class="font-Poppins bg-accent selection:text-secondary selection:bg-darkblue h-screen">
        <div class="p-5">
            <div class="text-center text-2xl">
                Checkout
            </div>
            <div class="rounded max-w-md mx-auto">
                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                    <p class="font-bold">Perhatian</p>
                    <p>Ini adalah halaman terakhir, pastikan data telah benar sebelum klik bayar.</p>
                </div>
                <div class="my-2 bg-darkblue text-slate-100 rounded-md">
                    <div class="p-5">
                        <div class="flex justify-between">
                            <span class="text-lg">Nama : </span>
                            <span class="text-lg">{{$nama}}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-lg">Email : </span>
                            <span class="text-lg">{{$email}}</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-lg">Total Harga : </span>
                            <span class="text-lg">{{$harga}}</span>
                        </div>
                        <button class="mt-8 rounded py-2 w-full bg-secondary text-darkblue" id="pay-button">Pilih Metode Pembayaran</button>

                        <script type="text/javascript">
                        // For example trigger on button clicked, or any time you need
                        let payButton = document.getElementById('pay-button');
                        payButton.addEventListener('click', function () {
                            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                            window.snap.pay('{{$snap_token}}', {
                               uiMode: 'qr',
                            });
                            // customer will be redirected after completing payment pop-up
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


