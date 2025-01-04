@extends('app.root')

@section('title', $data->title)

@section('content')
    @if ($data->banner)
        <img class="w-full max-h-72 object-cover" src="{{ asset('banner/' . $data->banner) }}" alt="banner">
    @else
        <img class="w-full max-h-72 object-cover" src="{{ asset('asset/asset-dashboard/asset-1.svg') }}" alt="banner">
    @endif

    @if ($data->favorite == 0)
        <form action="{{ route('pin', $data->id) }}" method="POST">
            @csrf
            <button class="rounded-full max-w-20 max-h-20 text-black bg-blue-600 shadow-md" type="submit">
                <i class="bi-bookmark"></i> Pin
            </button>
        </form>
    @else
        <form action="{{ route('unpin', $data->id) }}" method="POST">
            @csrf
            <button class="rounded-full max-w-20 max-h-20 text-black bg-red-600 shadow-md" type="submit">
                <i class="bi-bookmark-fill"></i> Unpin
            </button>
        </form>
    @endif
    <p class="text-xl font-sans">{{ $data->id }}</p>
    <p class="text-xl font-sans">{{ $data->title }}</p>
    <p class="text-xl font-sans">{{ $data->author }}</p>
    <p class="text-xl font-sans">{{ $data->label }}</p>
    <p class="text-xl font-sans">{{ $data->category }}</p>
    <p class="text-xl font-sans">{{ $data->code }}</p>
    <p class="text-xl font-sans">{{ $data->shinopsis }}</p>
    <p class="text-xl font-sans">{{ $data->description }}</p>
    <p class="text-xl font-sans">{{ $data->updated_at }}</p>
    <p class="text-xl font-sans">{{ $data->created_at }}</p>
    <p class="text-xl font-sans">{{ $data->icons }}</p>
    <p class="text-xl font-sans">{{ $data->cover }}</p>
    <a href="{{ url($data->url) }}" target="_blank" rel="noopener noreferrer">Baca</a>
    <a href="{{ route('edited', $data->id) }}">Edited</a>
    <form action="{{ route('delete', $data->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('dashboard') }}">Beranda</a>
@endsection
