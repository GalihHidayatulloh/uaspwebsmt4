@extends('Layouts.app')

@section('body')
<div id="alert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"> Data telah berhasil diperbarui.</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-green-500" role="button" ></svg>
    </span>
</div>


<h1 class="text-7xl font-bold text-center w-full">
   EDIT DATA
</h1>
<hr />

<form action="{{ route('disdukcapil.update', $disdukcapil->id) }}" method="POST">
@csrf
@method('PUT')
    <div class="mb-5">
        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">NIK</label>
        <input type="text" id="nik" name="nik" class="block w-full p-2 border border-gray-300 rounded-lg" value="{{ $disdukcapil->nik }}">
    </div>
    <div class="mb-5">
        <label for="namalengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blacke">Nama Lengkap</label>
        <input type="text" id="namalengkap" name="namalengkap" class="block w-full p-2 border border-gray-300 rounded-lg" value="{{ $disdukcapil->namalengkap }}">
    </div>
    <div class="mb-5">
        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="block w-full p-2 border border-gray-300 rounded-lg" value="{{ $disdukcapil->alamat }}">
    </div>
    <div class="mb-5">
        <label for="nomorhp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nomor HP</label>
        <input type="text" id="nomorhp" name="nomorhp" class="block w-full p-2 border border-gray-300 rounded-lg" value="{{ $disdukcapil->nomorhp }}">
    </div>
    <div class="mt-4">
        <button type="submit" class="px-4 py-2 bg-yellow-500 text-black rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600">Update</button>
    </div>
</form>

<script>
    // Menampilkan alert setelah berhasil mengedit pasien
    window.addEventListener('DOMContentLoaded', function() {
        // Cek apakah ada pesan sukses dari session
        var successMessage = '{{ session('success') }}';
        if (successMessage) {
            // Tampilkan alert
            var alertDiv = document.getElementById('alert');
            alertDiv.classList.remove('hidden');
            document.getElementById('alertMessage').innerText = successMessage;
            
            // Sembunyikan alert setelah 5 detik
            setTimeout(function(){
                alertDiv.classList.add('hidden');
            }, 5000);
        }
    });
</script>

@endsection
