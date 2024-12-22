@extends('app.root')

@section('content')
    @if ($data->isEmpty())
        <section class="textInfoSection">
            <div class="textColumsSection">
                <header class="headerInfoSection">
                    <img src="{{ asset('asset/asset-dashboard/asset-1.svg') }}" alt="asset/icons">
                </header>
                <aside class="labelInfoColums">
                    Anda belum menambahkan ebook favorit.
                </aside>
                <a class="textInfoIndex" href="{{ route('create') }}">Buat cerita ebook anda</a>
            </div>
        </section>
    @else
        @foreach ($data as $item)
            <menu class="dataCardUser {{ !$loop->last ? '' : 'pb-5' }}" data-aos="zoom-in" data-aos-offset="50">
                <a class="dataColumsCardUser" href="{{ route('views', $item->id) }}">
                    <aside class="dataContentCardUser">
                        @if ($item->banner)
                            <img class="dataBannerCardUser" src="{{ asset('banner/' . $item->banner) }}" alt="asset/banner">
                        @else
                            <img class="dataBannerCardUser" src="{{ asset('asset/asset-photo-default/asset-1.webp') }}"
                                alt="asset/banner">
                        @endif
                        <main class="dataArticelCardUser">
                            <div class="dataLabelCardUser">{{ $item->title }}</div>
                            @if (!empty($item->description))
                                <p class="dataDescriptionCardUser">{{ $item->description }}</p>
                            @else
                                <p class="dataDescriptionCardUser">Tidak ada deskripsi</p>
                            @endif
                            <article class="dataAuthorCardUser">
                                <i class="bi-person"></i>
                                {{ $item->author }}
                            </article>
                        </main>
                    </aside>
                </a>
            </menu>
        @endforeach
    @endif
@endsection
