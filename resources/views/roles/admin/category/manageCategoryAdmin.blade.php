@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5 p-5 h-100">
        <div class="row">
            <h1 class="h2 mb-4">Manage Category</h1>

            <div class="row shadow bg-body-tertiary rounded">
                <div class="col">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mx-2 my-2 py-2 border-bottom d-flex align-items-center">
                                <i class="bi bi-eye-fill fs-4 me-3"></i>
                                <a href="{{ route('view-category-admin') }}" class="text-decoration-none text-black" style="font-size: 20px;">
                                    View Category
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-2 my-2 py-2 border-bottom d-flex align-items-center">
                                <i class="bi bi-plus-square-fill"></i>
                                <a href="{{ route('add-category-admin') }}" class="text-decoration-none text-black mx-4" style="font-size: 20px;" >Add Category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
