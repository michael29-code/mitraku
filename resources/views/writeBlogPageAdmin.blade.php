@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5 p-5 h-100">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body py-5">
                        <div class="row my-3">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-1 text-end">
                                    </div>
                                    <div class="col">
                                        <h4>Write Blog</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col"> </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <div class="row my-3 mx-5">
                                    <div class="col">
                                        <h6><b>Title</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3 mx-5">
                                    <div class="col">
                                        <h6><b>Writer</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3 mx-5">
                                    <div class="col">
                                        <h6><b>Category</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Teknologi
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        bangunan
                                                    </label>
                                                </div>
                                                <p>max 2 category</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3 mx-5">
                                    <div class="col">
                                        <h6><b>Header Image</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <button class="btn btn-outline-danger">Upload Image</button>
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
                                                <div id="editor"></div>
                                                <script>
                                                    ClassicEditor
                                                        .create(document.querySelector('#editor'))
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
                                        <button class="btn btn-primary">submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
