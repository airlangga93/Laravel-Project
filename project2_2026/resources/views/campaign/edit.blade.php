@extends('app')

@section('content')

<h1 class="text-2xl font-bold mb-4">
    Edit Campaign
</h1>

<form action="/campaign/{{ $campaign->id }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-4">

        <label class="block">
            Judul Campaign
        </label>

        <input type="text"
               name="title"
               value="{{ $campaign->title }}"
               class="border rounded w-full p-2">

    </div>

    <div class="mb-4">

        <label class="block">
            Deskripsi
        </label>

        <textarea name="description"
                  class="border rounded w-full p-2">{{ $campaign->description }}</textarea>

    </div>

    <div class="mb-4">

        <label class="block">
            Target Donasi
        </label>

        <input type="number"
               name="target_donation"
               value="{{ $campaign->target_donation }}"
               class="border rounded w-full p-2">

    </div>

    <div class="mb-4">

        <label class="block">
            Dana Terkumpul
        </label>

        <input type="number"
               name="collected_donation"
               value="{{ $campaign->collected_donation }}"
               class="border rounded w-full p-2">

    </div>

    <div class="mb-4">

        <label class="block">
            Deadline
        </label>

        <input type="date"
               name="deadline"
               value="{{ $campaign->deadline }}"
               class="border rounded w-full p-2">

    </div>

    <button class="bg-green-500 text-white px-4 py-2 rounded">
        Update
    </button>

</form>

@endsection