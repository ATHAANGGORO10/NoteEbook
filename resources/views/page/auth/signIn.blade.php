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
    <form action="{{ route('signIn') }}" method="POST" id="formSection" enctype="multipart/form-user">@csrf
        <header class="formHeaderSection">
            <img src="{{ asset('asset/asset-signIn-signUp/asset-2.svg') }}" alt="Logo/Cover">
        </header>
        <section class="formSection">
            <main class="columsFormSection">
                <span class="formLabelSection">Masukan akun anda . . .</span>
                <aside class="columsInputSection {{ $errors->has('email') ? ' border-red-600' : '' }}">
                    <i class="bi-person-fill-add iconsInputSection"></i>
                    <input class="inputSection" placeholder="Email Anda" name="email" type="email" autocomplete="email"
                        required>
                </aside>
                <aside class="columsInputSection">
                    <i class="bi-person-fill-lock iconsInputSection"></i>
                    <input class="inputSection" placeholder="Password Anda" name="password" type="password"
                        autocomplete="current-password" id="passwordInput" required>
                    <i class="bi-eye-slash-fill iconsShowInputSection" id="showPassword"></i>
                </aside>
                <button type="submit" class="buttonFormSection" id="btnForm">
                    <div class="columsButtonFormSection">
                        <span class="textButtonFormSection" id="textForm">Masuk</span>
                        <span class="iconsButtonFormSection hidden" id="iconsForm"></span>
                    </div>
                </button>
                <p class="paragaftFormIndex">
                    Belum punya akun?
                    <a href="{{ route('signUp') }}" class="formIndexSection">Daftar di sini</a>
                </p>
            </main>
        </section>
    </form>
@endsection