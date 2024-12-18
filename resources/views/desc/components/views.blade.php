@extends('app.root')

@section('content')
    <section>
        @if ($data->banner)
            <img class="max-w-full max-h-56" src="{{ asset('banner/' . $data->banner) }}">
        @else
            <img class="max-w-full max-h-56" src="{{ asset('asset/asset-dashboard/asset-2.svg') }}">
        @endif
          <aside class="">
            <a href="{{ url($data->url) }}" target="_blank" rel="noopener noreferrer" type="button">Baca</a>
        </aside>
    </section>
@endsection