@extends('layouts.layoutAdmin')

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
                                                    <input type="text" class="form-control" name="title">
                                                    <input type="text" class="form-control d-none" disabled
                                                        name="slug">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control d-none" name="writer" value="1">
                                    <div class="row my-3 mx-5">
                                        <div class="col">
                                            <h6><b>Category</b></h6>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="kategori">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">Teknologi 1</option>
                                                        <option value="2">Teknologi 2</option>
                                                        <option value="3">Teknologi 3</option>
                                                    </select>
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
                                                        <input class="form-control form-control-sm" id="formFileSm"
                                                            type="file" name="image">
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
                                                    <textarea id="body" name="body" style="height: 100px"></textarea>
                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#body'))
                                                            .catch(error => {
                                                                console.error(error);
                                                            });
                                                    </script>
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
@endsection
