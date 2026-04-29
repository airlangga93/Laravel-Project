@extends('layouts.app')

@section('title', 'Profil')

@section('content')

<div class="flex items-center justify-center flex-grow">

    <div class="bg-white p-6 rounded-lg shadow w-full max-w-md text-center">

        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            Profil
        </h2>

        <div class="space-y-2 text-gray-700">
            <p><strong>Nama:</strong> Dimaz Airlangga Dwiyansyah</p>
            <p><strong>Jurusan:</strong> Sistem Informasi</p>
            <p><strong>Status:</strong> Mahasiswa</p>
        </div>

        <p class="text-gray-500 mt-4 text-sm">
            Sedang belajar pengembangan web menggunakan Laravel dan Tailwind CSS.
        </p>

        <div class="mt-6">
            <a href="/contact" 
               class="text-green-600 hover:underline">
                Hubungi Saya
            </a>
        </div>

    </div>

</div>

@endsection