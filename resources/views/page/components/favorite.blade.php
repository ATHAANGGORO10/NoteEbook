@extends('app.root')

@section('title', 'Favorite')

@section('content')
    <nav class="navSectionFavorite">
        <a href="{{ route('dashboard') }}" class="iconsBackDashboard">
            <i class="bi-chevron-left"></i>
            <span>Kembali</span>
        </a>
        <a href="{{ url('/help') }}" class="iconsHelpCenter">
            <i class="bi-question-circle"></i>
        </a>
    </nav>
    @if ($data->isEmpty())
        <section class="textInfoSection">
            <div class="textColumsSection">
                <header class="headerInfoSection">
                    <img src="{{ asset('asset/asset-dashboard/asset-1.svg') }}" alt="asset/icons">
                </header>
                <aside class="labelInfoColums">
                    Anda belum menambahkan favorite
                </aside>
                <a class="textInfoIndex" href="{{ route('create') }}">buat cerita ebook anda</a>
            </div>
        </section>
    @else
        @foreach ($data as $item)
            <menu class="dataCardUserFavorite {{ $loop->last ? 'pb-2.5' : '' }}" data-aos="zoom-in" data-aos-offset="50">@csrf
                <a class="dataColumsCardUserFavorite" href="{{ route('views', $item->id) }}">
                    <aside class="dataContentCardUserFavorite">
                        @if ($item->banner)
                            <i class="bi-star-fill dataCardFavorite"></i>
                            <img class="dataBannerCardUser" src="{{ asset('banner/' . $item->banner) }}" alt="asset/banner">
                        @else
                            <i class="bi-star-fill dataCardFavorite"></i>
                            <img class="dataBannerCardUser" src="{{ asset('asset/asset-photo-default/asset-1.png') }}"
                                alt="asset/banner">
                        @endif
                        <main class="dataArticelCardUserFavorite">
                            <div class="dataLabelCardUserFavorite">{{ $item->title }}</div>
                            <p class="dataDescriptionCardUserFavorite">{{ $item->description ?: 'Tidak ada description' }}</p>
                            <article class="dataAuthorCardUserFavorite">
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
