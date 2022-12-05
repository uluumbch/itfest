@extends('admin.template')
@section('container')
<form action="{{route('uptiket')}}" class="grid justify-center" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nama_tiket" class="text-slate-100">Nama Tiket</label>
    @error('nama_tiket')
    <p class="text-red-500">{{ $message }}</p>
    @enderror
    <input
        type="text"
        class="form-input rounded mb-2 max-w-sm"
        name="nama_tiket"
    />
    <label for="desc" class="text-slate-100">Deskripsi</label>
    @error('desc')
    <p class="text-red-500">{{ $message }}</p>
    @enderror
    <textarea class="form-input rounded mb-2 max-w-sm" name="desc"></textarea>

    <label for="harga_tiket" class="text-slate-100">Harga Tiket</label>
    @error('harga_tiket')
    <p class="text-red-500">{{ $message }}</p>
    @enderror
    <input
        type="number"
        class="form-input rounded mb-2 max-w-sm"
        name="harga_tiket"
    />

    <label class="text-slate-100" for="gambar">Gambar</label>
    @error('gambar')
    <p class="text-red-500">{{ $message }}</p>
    @enderror
    <input
        class="block w-full text-lg text-gray-500 bg-gray-300 rounded cursor-pointer focus:outline-none"
        aria-describedby="file_input_help"
        name="gambar"
        accept="image/*"
        type="file"
    />
    <p
        class="mt-1 text-sm text-gray-500 dark:text-gray-300"
        id="file_input_help"
    >
        PNG atau JPG.
    </p>

    <button
        type="submit"
        class="text-slate-50 bg-accent rounded max-w-sm p-1 mt-4"
    >
        Tambah
    </button>
</form>
@endsection