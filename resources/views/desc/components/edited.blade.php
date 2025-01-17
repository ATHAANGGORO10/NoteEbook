@extends('app.root')

@section('title', 'Perbarui Data Ebook')

@section('content')
    <form action="{{ route('save', $data->id) }}" method="POST" id="formSection" enctype="multipart/form-data">@csrf
        <section class="formEdited">
            <main class="columsFormEdited">
                <aside class="inputFormEdited">
                    <i class="bi-bookmark-plus iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Title ebook*" name="title" type="text"
                        value="{{ $data->title }}" required>@csrf
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-person-check iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Nama Author*" name="author" type="text"
                        value="{{ $data->author }}" required>@csrf
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-tags iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Label ebook*" name="label" type="text"
                        value="{{ $data->label }}" required>@csrf
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-archive iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Categori ebook*" name="category" type="text"
                        value="{{ $data->category }}" required>@csrf
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-qr-code-scan iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="Code ebook" name="code" value="{{ $data->code }}"
                        type="text">@csrf
                </aside>
                <aside class="inputFileFormEdited">
                    <label class="inputLabelFormEdited" for="banner">
                        <i class="bi-images logoInputFileImage"></i>
                        Tambahkan banner ebook
                        <i class="bi-arrow-right iconsInputFileArrow"></i>
                    </label>
                    <input class="inputFIleEdited" type="file" name="banner" id="banner" accept="image/*">@csrf
                    <aside class="alertFileEdited active" id="coverAlert"></aside>
                </aside>
                <aside class="inputFileFormEdited">
                    <label class="inputLabelFormEdited" for="cover" <i class="bi-images logoInputFileImage"></i>
                        Tambahkan cover ebook
                        <i class="bi-arrow-right iconsInputFileArrow"></i>
                    </label>
                    <input class="inputFIleEdited" type="file" name="cover" id="cover" accept="image/*">@csrf
                    <aside class="alertFileEdited active" id="coverAlert"></aside>
                </aside>
                <aside class="inputFileFormEdited">
                    <label class="inputLabelFormEdited" for="icons">
                        <i class="bi-images logoInputFileImage"></i>
                        Tambahkan icons ebook
                        <i class="bi-arrow-right iconsInputFileArrow"></i>
                    </label>
                    <input class="inputFIleEdited" type="file" name="icons" id="icons" accept="image/*">@csrf
                    <aside class="alertFileEdited active" id="coverAlert"></aside>
                </aside>
                <aside class="inputFormEdited">
                    <i class="bi-link-45deg iconsInputEdited"></i>
                    <input class="inputEdited" placeholder="https://url.ebook-anda*" name="url" type="url"
                        value="{{ $data->url }}" required>@csrf
                </aside>
                <aside class="textareaFormEdited">
                    <i class="bi-chat-right-text iconsTextareaFormEdited"></i>
                    <textarea class="textareaFormInputEdited" placeholder="Shinopsis ebook" name="shinopsis" type="text">{{ $data->shinopsis }}</textarea>@csrf
                </aside>
                <aside class="textareaFormEdited">
                    <i class="bi-chat-right-text iconsTextareaFormEdited"></i>
                    <textarea class="textareaFormInputEdited" placeholder="Description ebook" name="description" type="text">{{ $data->description }}</textarea>@csrf
                </aside>
                <button type="submit" class="buttonFormEdited" id="btnForm">
                    <div class="columsButtonFormEdited">
                        <span class="textButtonFormEdited" id="textForm">Tambahkan</span>
                        <span class="iconsButtonFormEdited hidden" id="iconsForm"></span>
                    </div>
                </button>
            </main>
        </section>
    </form>
@endsection
