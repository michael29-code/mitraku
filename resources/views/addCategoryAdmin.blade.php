@extends('layouts.layoutAdmin')

@section('content')
    <form enctype="multipart/form-data" method="post" action="{{ route('store_category') }}">
        @csrf
        <div class="container my-5">
            <div class="row shadow bg-body-tertiary rounded">
                <div class="col">
                    <div class="card border border-0">
                        <div class="card-body py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h4><a href="{{ route('manage-category') }}"><i class="fa-solid fa-arrow-left"></i></a>Add Category</h4>
                                        <br>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <input class="form-control me-4 rounded-pill" type="text" placeholder="Category's Name" name="jenisKategori" id="jenisKategori" value="{{ Session::get('jenisKategori') }}">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
