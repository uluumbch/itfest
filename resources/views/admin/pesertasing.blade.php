@extends('admin.template')
@section('container')
    @if ($message = Session::get('berhasil'))
        <div class="bg-teal-100 w-1/3 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mx-auto"
            role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg></div>
                <div>
                    <p class="font-bold">Data berhasil ditambahkan</p>
                    <p class="text-sm">{{ $message }}</p>
                </div>
            </div>
        </div>
    @endif
    <form action="{{ route('tambahpesertasing') }}" class="grid justify-center" method="POST"
        enctype="multipart/form-data">
        @csrf
        <label for="nama" class="text-slate-100">Nama Peserta</label>
        @error('nama')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <input type="text" class="form-input rounded mb-2 max-w-sm" name="nama" />

        <label for="nomor" class="text-slate-100">nomor Peserta</label>
        @error('nomor')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <input type="number" class="form-input rounded mb-2 max-w-sm" name="nomor" />
        <label class="text-slate-100" for="foto">Foto</label>
        @error('foto')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <input class="block w-full text-lg text-gray-500 bg-gray-300 rounded cursor-pointer focus:outline-none"
            aria-describedby="file_input_help" name="foto" accept="image/*" type="file" />
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
            PNG atau JPG.
        </p>

        <button type="submit" class="text-slate-50 bg-accent rounded max-w-sm p-1 mt-4">
            Upload
        </button>
    </form>
@endsection
