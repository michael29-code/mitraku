@extends('layouts.layoutAdmin')

@section('isViewBlogActive', 'active')

@section('content')
    <div class="container w-100 h-100">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body py-5">
                        <div class="row my-3">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-1 text-end">
                                        <a href="/manage-blog"><i class="fa-solid fa-arrow-left"
                                                style="font-size: 2rem"></i></a>
                                    </div>
                                    <div class="col">
                                        <h4>Edit Blog</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <form action="/update-blog/{{ $blog->slug }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="row my-3 mx-5">
                                        <div class="col">
                                            <h6><b>Title</b></h6>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        name="title" value="{{ old('title', $blog->title) }}">
                                                    <input type="text" class="form-control d-none" disabled
                                                        name="slug"value="{{ old('slug', $blog->slug) }}">
                                                    @error('title')
                                                        <div class="invalid-feedback m-1">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control d-none" name="writerId"
                                        value="{{ Auth::check() ? Auth::id() : Auth::loginUsingId(1) }}">
                                    <div class="row my-3 mx-5">
                                        <div class="col">
                                            <h6><b>Category</b></h6>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <select class="form-select @error('kategoriId') is-invalid @enderror"
                                                        aria-label="Default select example" name="kategoriId">
                                                        <option selected>Open this select menu</option>
                                                        @foreach ($categories as $categori)
                                                            @if (old('kategoriId', $blog->kategoriId) == $categori->id)
                                                                <option value="{{ $categori->id }}" selected>
                                                                    {{ $categori->jenisKategori }}</option>
                                                            @else
                                                                <option value="{{ $categori->id }}">
                                                                    {{ $categori->jenisKategori }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    @error('kategoriId')
                                                        <div class="invalid-feedback m-1">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3 mx-5">
                                        <div class="col">
                                            <h6><b>Header Image</b></h6>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">

                                                        @if ($blog->image)
                                                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block"
                                                                src="{{ asset('storage/' . $blog->image) }}">
                                                        @else
                                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                                        @endif
                                                        <input class="form-control @error('image') is-invalid @enderror "
                                                            type="file" id="image" name="image"
                                                            onchange="previewImage()"
                                                            value="{{ old('image'), $blog->image }}">
                                                        <input type="hidden" name="oldImage" value="{{ $blog->image }}">
                                                        @error('image')
                                                            <div class="invalid-feedback m-1">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3 mx-5">
                                        <div class="col">
                                            <h6><b>Body</b></h6>
                                            <div class="row">
                                                <div class="col">
                                                    {{-- <form>
                                                        <input id="x" type="hidden" name="content">
                                                        <trix-editor input="x"></trix-editor>
                                                    </form> --}}
                                                    <textarea id="body" name="body" style="height: 100px" class="@error('body') is-invalid @enderror">{{ old('body', $blog->body) }}</textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#body'))
                                                            .catch(error => {
                                                                console.error(error);
                                                            });
                                                    </script>
                                                    @error('body')
                                                        <div class="invalid-feedback m-1">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3 mx-5">
                                        <div class="col">
                                            <button class="btn btn-primary" type="submit">save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
