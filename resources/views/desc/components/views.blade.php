@extends('app.root')

@section('content')
    <section>
          <aside class="">
            <a href="{{ url($data->url) }}" target="_blank" rel="noopener noreferrer" type="button">Baca</a>
            <a href="{{ route('edited', $data->id) }}">edited</a>
        </aside>
    </section>
@endsection