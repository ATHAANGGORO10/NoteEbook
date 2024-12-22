@extends('app.root')

@section('content')
    @if (session('alert'))
        <aside class="alertSection animate__animated animate__fadeInDown" id="alert">
            <div class="columsAlertSection">
                <main class="rowsAlertSection">
                    <i class="bi-bell-fill iconsAlertSection"></i>
                </main>
                <span class="alertLabelSection">{{ session('alert') }}</span>
            </div>
        </aside>
    @endif
    <aside class="screenLoadSection" id="screenLoading">
        <span class="iconsLoadSection"></span>
    </aside>
    <nav class="navSection">
        <main class="searchFormInputSection">
            <form class="formSearchInputSection" action="" method="GET">
                <i class="bi-search iconsSearchInputSection"></i>
                <input class="searchInputSection" placeholder="Telusuri note book anda...." type="search" name="search">
            </form>
            <button class="buttonListMenuSection" id="btnMenuSection">
                <i class="bi-list iconsListMenuSection" id="iconsMenuSection"></i>
            </button>
        </main>
        <div class="layerBackgroundMenuSection -translate-x-full" id="backgroundMenuSection"></div>
        <menu class="listMenuSection" id="listMenuSection">
            <a class="bioUserSection" href="#">
                <img class="photoBioUserSection" src="{{ asset('asset/asset-photo-default/asset-1.webp') }}" alt=""
                    srcset="">
                <main class="infoBioUserSection">
                    <span class="usernameBioUserSection">{{ $user->username }}</span></span>
                    <article class="emailBioUserSection">{{ $user->email }}</article>
                </main>
            </a>
            <ul class="columsListMenuSection">
                <li class="itemListMenuSection">
                    <i class="bi-grid"></i>
                    <a href="{{ route('dashboard') }}">Beranda</a>
                </li>
                <li class="itemListMenuSection">
                    <i class="bi-bookmarks"></i>
                    <a href="#">Catatan</a>
                </li>
                <li class="itemListMenuSection">
                    <i class="bi-star"></i>
                    <a href="{{ route('favorite') }}">Favorite</a>
                </li>
                <li class="itemListMenuSection">
                    <i class="bi-question-circle"></i>
                    <a href="{{ url('https://github.com/ATHAANGGORO10/NoteEbook') }}">Bantuan</a>
                </li>
                <li class="itemListMenuSection">
                    <i class="bi-people"></i>
                    <a href="https://tr.ee/DY0iFSRrcp/">Komunitas</a>
                </li>
                <li class="itemListMenuSection">
                    <i class="bi-gear"></i>
                    <a href="/settings">Pengaturan</a>
                </li>
            </ul>
        </menu>
    </nav>
    <a class="tooltipCreate" href="{{ route('create') }}">
        <aside class="columsTooltipCreate">
            <i class="bi-plus-lg"></i>
        </aside>
    </a>
    @if ($data->isEmpty())
        <section class="textInfoSection">
            <div class="textColumsSection">
                <header class="headerInfoSection">
                    <img src="{{ asset('asset/asset-dashboard/asset-1.svg') }}" alt="asset/icons">
                </header>
                <aside class="labelInfoColums">
                    Anda belum menambahkan ebooks
                </aside>
                <a class="textInfoIndex" href="{{ route('create') }}">buat cerita ebooks anda</a>
            </div>
        </section>
    @else
        @foreach ($data as $item)
                <menu class="dataCardUser {{ !$loop->last ? '' : 'pb-5' }}" data-aos="zoom-in" data-aos-offset="50">@csrf
                    <a class="dataColumsCardUser" href="{{ route('views', $item->id) }}">
                        <aside class="dataContentCardUser">
                            @if ($item->banner)
                                <img class="dataBannerCardUser" src="{{ asset('banner/' . $item->banner) }}"
                                    alt="asset/banner">
                            @else
                                <img class="dataBannerCardUser" src="{{ asset('asset/asset-photo-default/asset-1.webp') }}"
                                    alt="asset/banner">
                            @endif
                            <main class="dataArticelCardUser">
                                <div class="dataLabelCardUser">{{ $item->title }}</div>
                                @if (!empty($item->description))
                                    <p class="dataDescriptionCardUser">{{ $item->description }}</p>
                                @else
                                    <p class="dataDescriptionCardUser">Tidak ada description</p>
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
