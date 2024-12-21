@extends('app.root')

@section('content')
    <form action="{{ route('store') }}" method="POST" id="formSection" enctype="multipart/form-data">@csrf
        <section class="formCreate">
            <main class="columsFormCreate">
                <aside class="inputFormCreate">
                    <i class="bi-bookmark-plus iconsInputCreate"></i>
                    <input class="inputCreate" placeholder="Title ebook*" name="title" type="text" required>
                </aside>
                <aside class="inputFormCreate">
                    <i class="bi-person-check iconsInputCreate"></i>
                    <input class="inputCreate" placeholder="Nama Author*" name="author" type="text" required>
                </aside>
                <aside class="inputFormCreate">
                    <i class="bi-tags iconsInputCreate"></i>
                    <input class="inputCreate" placeholder="Label ebook*" name="label" type="text" required>
                </aside>
                <aside class="inputFormCreate">
                    <i class="bi-archive iconsInputCreate"></i>
                    <input class="inputCreate" placeholder="Categori ebook*" name="category" type="text" required>
                </aside>
                <aside class="inputFormCreate">
                    <i class="bi-qr-code-scan iconsInputCreate"></i>
                    <input class="inputCreate" placeholder="Code ebook" name="code" type="text">
                </aside>
                <aside class="inputFileFormCreate">
                    <label class="inputLabelFormCreate" for="banner">
                        <i class="bi-images logoInputFileImage"></i>
                        Tambahkan banner ebook
                        <i class="bi-arrow-right iconsInputFileArrow"></i>
                    </label>
                    <input class="inputFIleCreate" type="file" name="banner" accept="image/*">
                    <aside class="alertFileCreate active" id="coverAlert"></aside>
                </aside>
                <aside class="inputFileFormCreate">
                    <label class="inputLabelFormCreate" for="cover">
                        <i class="bi-images logoInputFileImage"></i>
                        Tambahkan cover ebook
                        <i class="bi-arrow-right iconsInputFileArrow"></i>
                    </label>
                    <input class="inputFIleCreate" type="file" name="cover" accept="image/*">
                    <aside class="alertFileCreate active" id="coverAlert"></aside>
                </aside>
                <aside class="inputFileFormCreate">
                    <label class="inputLabelFormCreate" for="icons">
                        <i class="bi-images logoInputFileImage"></i>
                        Tambahkan icons ebook
                        <i class="bi-arrow-right iconsInputFileArrow"></i>
                    </label>
                    <input class="inputFIleCreate" type="file" name="icons" accept="image/*">
                    <aside class="alertFileCreate active" id="coverAlert"></aside>
                </aside>
                <aside class="inputFormCreate">
                    <i class="bi-link-45deg iconsInputCreate"></i>
                    <input class="inputCreate" placeholder="https://url.ebook-anda*" name="url" type="url" required>
                </aside>
                <aside class="textareaFormCreate">
                    <i class="bi-chat-right-text iconsTextareaFormCreate"></i>
                    <textarea class="textareaFormInputCreate" placeholder="Shinopsis ebook" name="shinopsis" type="text"></textarea>
                </aside>
                <aside class="textareaFormCreate">
                    <i class="bi-chat-right-text iconsTextareaFormCreate"></i>
                    <textarea class="textareaFormInputCreate" placeholder="Description ebook" name="description" type="text"></textarea>
                </aside>
                <button type="submit" class="buttonFormCreate" id="btnForm">
                    <div class="columsButtonFormCreate">
                        <span class="textButtonFormCreate" id="textForm">Tambahkan</span>
                        <span class="iconsButtonFormCreate hidden" id="iconsForm"></span>
                    </div>
                </button>
            </main>
        </section>
    </form>
@endsection
