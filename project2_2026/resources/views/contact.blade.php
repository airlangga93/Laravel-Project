@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<div class="flex items-center justify-center flex-grow">

    <div class="bg-white p-6 rounded-lg shadow w-full max-w-md text-center">

        <h2 class="text-2xl font-bold mb-6">Kontak</h2>

        <div class="space-y-3 text-gray-700">
            <p>📧 E-mail: support@donasiku.com</p>
            <p>📱 Telepon: 0812-xxxx-xxxx</p>
            <p>📸 Instagram: @donasiku</p>
            <p>🎵 Tiktok: @donasiku</p>
        </div>

        <!-- Link kembali -->
        <div class="mt-6">
            <a href="/" 
               class="text-green-600 hover:underline">
                ← Kembali ke Home
            </a>
        </div>

    </div>

</div>

@endsection