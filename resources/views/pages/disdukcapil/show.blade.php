@extends('Layouts.app')

@section('body')

<h1 class="text-7xl font-bold text-center w-full">
    DATA DUKCAPIL
</h1>
<hr />

<div>
    <div class="mb-1">
        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">NIK</label>
        <input type="text" id="nik" name="nik" class="block w-full p-2 border border-gray-300 rounded-lg" value="{{ $disdukcapil->nik }}" readonly>
    </div>
    <div class="mb-1">
        <label for="namalengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Lengkap</label>
        <input type="text" id="namalengkap" name="namalengkap" class="block w-full p-2 border border-gray-300 rounded-lg" value="{{ $disdukcapil->namalengkap }}" readonly>
    </div>
    <div class="mb-1">
        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="block w-full p-2 border border-gray-300 rounded-lg" value="{{ $disdukcapil->alamat }}" readonly>
    </div>
    <div class="mb-1">
        <label for="nomorhp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nomor HP</label>
        <input type="text" id="nomorhp" name="nomorhp" class="block w-full p-2 border border-gray-300 rounded-lg" value="{{ $disdukcapil->nomorhp }}" readonly>
    </div>
</div>

@endsection
