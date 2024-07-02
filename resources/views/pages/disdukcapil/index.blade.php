@extends('Layouts.app')

@section('body')
<div id="alert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"> Perintah berhasil dijalankan.</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-green-500" role="button"></svg>
    </span>
</div>

<div class="flex items-center justify-between">
    <h1 class="text-7xl font-bold ">
        DATA DUKCAPIL
    </h1>
    <a href="{{ route('disdukcapil.store') }}" class="ml-4">
        <button class="bg-green-500 hover:bg-green-700 text-white-500 font-bold py-2 px-4 rounded">
            <span class="text-green-950">Tambahkan Data</span>
        </button>
    </a>
</div>

<hr class="my-4">

<form action="{{ route('disdukcapil.index') }}" method="GET" class="mb-4">
    <div class="flex items-center space-x-4">
        <input type="text" name="search" id="search" placeholder="Cari berdasarkan NIK" class="block w-64 p-2 border border-gray-300 rounded-lg">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white-500 font-bold py-2 px-4 rounded">
            <span class="text-blue-950">Search</span>
        </button>
    </div>
</form>

<table class="table-auto w-full">
    <thead>
        <tr>
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">NIK</th>
            <th class="px-4 py-2">NAMA LENGKAP</th>
            <th class="px-4 py-2">ALAMAT</th>
            <th class="px-4 py-2">NOMOR HP</th>
            <th class="px-4 py-2">ACTION</th>
        </tr>
    </thead>
    <tbody>
        @if($disdukcapil->count() > 0)
        @foreach($disdukcapil as $disdukcapil)
        <tr>
            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
            <td class="border px-4 py-2">{{ $disdukcapil->nik}}</td>
            <td class="border px-4 py-2">{{ $disdukcapil->namalengkap }}</td>
            <td class="border px-4 py-2">{{ $disdukcapil->alamat }}</td>
            <td class="border px-4 py-2">{{ $disdukcapil->nomorhp }}</td>
            <td>
                <div class="flex">
                    <a href="{{ route('disdukcapil.show', $disdukcapil->id) }}" class="ml-4">
                        <button class="bg-cyan-500 hover:bg-cyan-700 text-white-500 font-bold py-2 px-4 rounded">
                            <span class="text-cyan-950">Detail</span>
                        </button>
                    </a>
                    <a href="{{ route('disdukcapil.edit', $disdukcapil->id) }}" class="ml-4">
                        <button class="bg-yellow-500 hover:bg-yellow-700 text-white-500 font-bold py-2 px-4 rounded">
                            <span class="text-yellow-950">Edit</span>
                        </button>
                    </a>
                    <form action="{{ route('disdukcapil.destroy', $disdukcapil->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            <span class="text-red-950">Delete</span>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="6">DATA TIDAK DITEMUKAN</td>
        </tr>
        @endif
    </tbody>
</table>

<script>
    // Menampilkan alert setelah berhasil menambahkan pasien
    window.addEventListener('DOMContentLoaded', function() {
        // Cek apakah ada pesan sukses dari session
        var successMessage = '{{ session('success') }}';
        if (successMessage) {
            // Tampilkan alert
            var alertDiv = document.getElementById('alert');
            alertDiv.classList.remove('hidden');

            // Sembunyikan alert setelah 5 detik
            setTimeout(function() {
                alertDiv.classList.add('hidden');
            }, 5000);
        }
    });

</script>
@endsection
