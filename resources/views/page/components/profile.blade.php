@extends('app.root')

@section('title', 'Profile')

@section('content')
    <nav class="navSectionProfile">
        <a href="{{ route('dashboard') }}" class="iconsBackDashboard">
            <i class="bi-chevron-left"></i>
            <span>Kembali</span>
        </a>
        <a href="{{ url('/settings') }}" class="iconsHelpCenter">
            <i class="bi-gear"></i>
        </a>
    </nav>
    <p class="pt-[5.5rem]">{{ auth()->user()->username }}</p>
    <p>{{ auth()->user()->email }}</p>
    <p>{{ auth()->user()->created_at }}</p>
    <p>{{ auth()->user()->updated_at }}</p>
    <form action="{{ route('signOut') }}" method="POST">
        @csrf
        <button type="submit">SingOut</button>
    </form>
@endsection
