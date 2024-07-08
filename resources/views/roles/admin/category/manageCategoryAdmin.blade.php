@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5 p-5 h-100">
        <div class="row">
            <h1 class="h2 mb-4">Manage Category</h1>

            <div class="row shadow bg-body-tertiary rounded">
                <div class="col">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mx-3 my-2 p-2 border-bottom align-middle">
                                <a href="{{ route('view-category') }}" class="text-decoration-none black h4">
                                    <div class="d-flex">
                                        <i class="bi bi-eye-fill"></i>
                                        <div class="mx-2"></div>
                                        View Category
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-3 my-2 p-2 align-middle">
                                <a href="{{ route('add-category') }}" class="text-decoration-none black h4">
                                    <div class="d-flex">
                                        <i class="bi bi-plus-square-fill"></i>
                                        <div class="mx-2"></div>
                                        Add Category
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
