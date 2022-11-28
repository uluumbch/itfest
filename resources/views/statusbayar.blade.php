<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Tiket | IT MATSURI 2022</title>
    @vite('resources/css/app.css')
</head>

<body>
<div class="font-Poppins bg-[#050634f2] selection:text-secondary selection:bg-darkblue min-h-screen">
    <nav class="flex justify-between flex-row px-12 h-16 items-center bg-secondary">
        <div class="logo mx-auto">
            <a href="/">
                <img src="{{asset('/assets/LogoWhite.png')}}" alt="Logo ITFEST 2022" />
            </a>
        </div>
    </nav>
    <div class="p-5 max-w-xl mx-auto ">
        <div class="w-40 mx-auto">
    <img src="{{asset('/assets/IO-jempol.png')}}" >
        </div>
        <div class="text-slate-100 text-center">
            <span class="text-2xl mx-auto">
            TERIMAKASIH
            </span>
            <br>
            Pembayaran kamu berhasil dikonfirmasi.
            <div class="rounded-2xl bg-secondary  text-slate-800">
                <span class="text-2xl">Detail Pesanan</span>
                <br>
{{--                @dd($data)--}}
                {{$data['order_id']}}
                <br>
                {{$data['name']}}
                <br>

                {{$data['email']}}
                <br>
                {{$data['item']}}
                <br>
                Rp{{number_format($data['total'], thousands_separator: '.')}}
            </div>
            Bukti pembayaran akan dikirim via email dan digunakan untuk reedem tiket. Jika setelah 1x24 jam tidak ada email, silakan hubungi admin lewat WA di bawah.
        </div>
    </div>
    @include('partials.footer')
</div>

</body>

</html>

