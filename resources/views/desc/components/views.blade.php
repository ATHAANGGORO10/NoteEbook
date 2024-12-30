@extends('app.root')

@section('content')
    {{-- <section>
        <aside>
            @if ($data->banner)
                <img class="w-full max-h-72 object-cover" src="{{ asset('banner/' . $data->banner) }}" alt="banner">
            @else
                <img class="w-full max-h-72 object-cover" src="{{ asset('asset/asset-dashboard/asset-1.svg') }}"
                    alt="banner">
            @endif
        </aside>
    </section> --}}
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
@endsection
