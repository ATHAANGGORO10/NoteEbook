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
                <img class="photoBioUserSection" src="{{ asset('asset/asset-photo-default/asset-1.webp') }}"
                    alt="" srcset="">
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
                    <a href="#">Favorite</a>
                </li>
                <li class="itemListMenuSection">
                    <i class="bi-question-circle"></i>
                    <a href="{{ url('https://github.com/ATHAANGGORO10/NoteEbook') }}">Bantuan</a>
                </li>
                <li class="itemListMenuSection">
                    <i class="bi-download"></i>
                    <a href="#">Download</a>
                </li>
                <li class="itemListMenuSection">
                    <i class="bi-people"></i>
                    <a href="{{ url('https://github.com/ATHAANGGORO10/NoteEbook') }}">Komunitas</a>
                </li>
                <li class="itemListMenuSection">
                    <i class="bi-gear"></i>
                    <a href="#">Pengaturan</a>
                </li>
            </ul>
        </menu>
    </nav>
    <aside class="tooltipCreate">
        <a class="columsTooltipCreate" href="{{ route('create') }}">
            <i class="bi-plus-lg"></i>
        </a>
    </aside>
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
            <menu class="dataCardUser {{ !$loop->last ? (!$loop->first ? 'space-y-5' : '') : 'pb-5' }}" data-aos="zoom-in"
                data-aos-offset="80">
                <a class="dataColumsCardUser" href="{{ route('views', $item->id) }}">@csrf
                    <aside class="dataContentCardUser">
                        @if ($item->banner)
                            <span
                                class="dataDateCardUser">{{ $item->updated_at != $item->created_at ? $item->updated_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                            @if ($item->icons)
                                <div class="dataIconsCardUser">
                                    <img class="dataAssetCardUser" src="{{ asset('icons/' . $item->icons) }}">
                                </div>
                            @else
                                <div class="dataIconsCardUser">
                                    <img class="dataAssetCardUser"
                                        src="{{ asset('asset/asset-photo-default/asset-1.webp') }}">
                                </div>
                            @endif
                            <img class="dataBannerCardUsere" src="{{ asset('banner/' . $item->banner) }}">
                        @else
                            <span
                                class="dataDateCardUser">{{ $item->updated_at != $item->created_at ? $item->updated_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                            <div class="dataIconsCardUser">
                                <img class="dataAssetCardUser"
                                    src="{{ asset('asset/asset-photo-default/asset-1.webp') }}">
                            </div>
                            <img class="dataBannerCardUsere"
                                src="{{ asset('asset/asset-dashboard/asset-2.svg') }}">
                        @endif
                        <main class="dataArticelCardUser">
                            <div class="dataLabelCardUser">{{ $item->title }}</div>
                            <article class="dataDescriptionCardUser">{{ $item->description }}</article>
                        </main>
                    </aside>
                </a>
            </menu>
        @endforeach
    @endif
@endsection