<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    @stack('meta')
</head>

<body>
    <div class="font-Poppins bg-darkblue selection:text-secondary selection:bg-darkblue min-h-screen h-screen">
        <nav class="flex justify-between flex-row px-12 h-16 items-center bg-secondary">
            <div class="logo ">
                <a href="/">
                    <img src="{{ asset('/assets/LogoWhite.png') }} " alt="Logo ITFEST 2022" />
                </a>
            </div>
            <div class="flex flex-row">
                <a href="/admin" class="text-darkblue mx-2 px-2 border-x-2">Main</a>
                <a href="{{ route('admintiket') }}" class="text-darkblue mx-2 ">tiket</a>
                <form action="{{ route('adminlogout') }}" method="post">
                    @csrf
                    <button type="submit" class="text-darkblue mx-2 px-2 border-x-2">Logout</button>
                </form>
            </div>
        </nav>
        <div class="p-5">
            @yield('container')

        </div>
    </div>
</body>
@stack('scripts')

</html>
