@extends('Layouts.app')

@section('body')

<h1 class="text-7xl font-bold text-center w-full">
    TAMBAH DATA
</h1>
<hr />

<form action="{{ route('disdukcapil.store') }}" method="POST">
    @csrf
    <div class="mb-5">
        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">NIK</label>
        <input type="text" id="nik" name="nik" class="block w-full p-2 border border-gray-300 rounded-lg">
    </div>
    <div class="mb-5">
        <label for="namalengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blacke">Nama Lengkap</label>
        <input type="text" id="namalengkap" name="namalengkap" class="block w-full p-2 border border-gray-300 rounded-lg">
    </div>
    <div class="mb-5">
        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="block w-full p-2 border border-gray-300 rounded-lg">
    </div>
    <div class="mb-5">
        <label for="nomorhp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nomor HP</label>
        <input type="text" id="nomorhp" name="nomorhp" class="block w-full p-2 border border-gray-300 rounded-lg">
    </div>
    <div class="mt-4">
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
    </div>
</form>

@endsection
