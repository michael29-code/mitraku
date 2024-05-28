@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5 p-5 h-100">
        <div class="row">
            <h1 class="h2 mb-4">Manage Category</h1>

            <div class="row shadow bg-body-tertiary rounded">
                <div class="col">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                <a href="{{ route('view_category') }}">View Category</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                <a href="{{ route('add_category') }}">Add Category</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                <a href="{{ route('delete_category') }}">Delete Category</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-5 my-2 py-2 ">
                                <a href="{{ route('update_category') }}">Update Category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
