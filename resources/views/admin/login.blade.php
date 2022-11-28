<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
<div
    class="font-Poppins bg-darkblue selection:text-secondary selection:bg-darkblue min-h-screen h-screen"
>
    <div class="p-5">
        
        <form action="{{route('admin')}}" class="grid justify-center" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="username" class="text-slate-100">username</label>
            @error('username')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input
                type="text"
                class="form-input rounded mb-2 max-w-sm"
                name="username"
            />
            <label for="password" class="text-slate-100">password</label>
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input
                type="password"
                class="form-input rounded mb-2 max-w-sm"
                name="password"
            />
            @if (session('error'))
            <p class="text-red-500">{{ session('error') }}</p>        
            @endif

            <button
                type="submit"
                class="text-slate-50 bg-accent rounded max-w-sm p-1 mt-4"
            >
                login
            </button>
        </form>
    </div>
</div>
</body>
</html>
