@extends('layouts.layoutAdmin')

@section('isViewBlogActive', 'active')

@section('content')
    <div class="container w-100 h-100">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body">
                        <div class="row my-3">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-1 d-flex justify-content-center align-items-center">
                                        <a href="/manage-blog"><i class="fa-solid fa-arrow-left"
                                                style="font-size: 2rem"></i></a>
                                    </div>
                                    <div class="col">
                                        <h4>Write Blog</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <form action="/store-blog" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row my-3 mx-5">
                                        <div class="col">
                                            <h6><b>Title</b></h6>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        name="title" value="{{ old('title') }}">
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
                                                        <option value="0">Open this select menu</option>
                                                        @foreach ($categories as $categori)
                                                            @if (old('kategoriId') == $categori->id)
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
                                                    <div class="mb-1">
                                                        <input class="form-control @error('image') is-invalid @enderror"
                                                            id="image" type="file" name="image"
                                                            aria-label="file example" onchange="previewImage()">
                                                        @error('image')
                                                            <div class="invalid-feedback m-1">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                        <div class="col">
                                                            <img class="img-preview img-fluid col-sm-3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mx-5">
                                        <div class="col">
                                            <h6><b>Body</b></h6>
                                            <div class="row">
                                                <div class="col">
                                                    {{-- <form>
                                                        <input id="x" type="hidden" name="content">
                                                        <trix-editor input="x"></trix-editor>
                                                    </form> --}}
                                                    <textarea id="body" name="body" style="height: 100px" class="@error('body') is-invalid @enderror">{{ old('body') }}</textarea>
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
                                            <button class="btn btn-primary" type="submit">submit</button>
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
