@extends('app.root')

@section('content')
    <form action="{{ route('save', $data->id) }}" method="POST" id="formSection" enctype="multipart/form-data">@csrf
        <section class="formEdited">
            <main class="columsFormEdited">
                <aside class="inputFormEdited">
                    <i class="bi-bookmark-plus iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Title ebook*" name="title" type="text"
                        value="{{ $data->title }}" required>
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-person-check iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Nama Author*" name="author" type="text"
                        value="{{ $data->author }}" required>
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-tags iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Label ebook*" name="label" type="text"
                        value="{{ $data->label }}" required>
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-archive iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Categori ebook*" name="category" type="text"
                        value="{{ $data->category }}" required>
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-qr-code-scan iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Code ebook" name="code" value="{{ $data->code }}"
                        type="text">
                </aside>
                <aside class="inputFileFormEdited">
                    <label class="inputLabelFormEdited" for="banner">
                        <i class="bi-images text-xl logoInputFileImage"></i>
                        Tambahkan banner ebook
                        <i class="bi-arrow-right iconsInputFileArrow"></i>
                    </label>
                    <input class="inputFIleEdited" type="file" name="banner" id="banner" accept="image/*">
                    <aside class="alertFileEdited active" id="coverAlert"></aside>
                </aside>
                <aside class="inputFileFormEdited">
                    <label class="inputLabelFormEdited" for="cover">
                        <i class="bi-images text-xl logoInputFileImage"></i>
                        Tambahkan cover ebook
                        <i class="bi-arrow-right iconsInputFileArrow"></i>
                    </label>
                    <input class="inputFIleEdited" type="file" name="cover" id="cover" accept="image/*">
                    <aside class="alertFileEdited active" id="coverAlert"></aside>
                </aside>
                <aside class="inputFileFormEdited">
                    <label class="inputLabelFormEdited" for="icons">
                        <i class="bi-images text-xl logoInputFileImage"></i>
                        Tambahkan icons ebook
                        <i class="bi-arrow-right iconsInputFileArrow"></i>
                    </label>
                    <input class="inputFIleEdited" type="file" name="icons" id="icons" accept="image/*">
                    <aside class="alertFileEdited active" id="coverAlert"></aside>
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-link-45deg iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="https://url.ebook-anda*" name="url" type="url"
                        value="{{ $data->url }}" required>
                </aside>
                <aside class="textareaFormEdited">
                    <i class="bi-chat-right-text iconsTextareaFormEdited"></i>
                    <textarea class="textareaFormInputEdited" placeholder="Shinopsis ebook" name="shinopsis" type="text">{{ $data->shinopsis }}</textarea>
                </aside>
                <aside class="textareaFormEdited">
                    <i class="bi-chat-right-text iconsTextareaFormEdited"></i>
                    <textarea class="textareaFormInputEdited" placeholder="Description ebook*" name="description" type="text">{{ $data->description }}</textarea>
                </aside>
                <button type="submit" class="buttonFormEdited" id="btnForm">
                    <div class="columsButtonFormEdited">
                        <span class="textButtonFormEdited" id="textForm">Perbarui</span>
                        <span class="iconsButtonFormEdited hidden" id="iconsForm"></span>
                    </div>
                </button>
            </main>
        </section>
    </form>
@endsection
