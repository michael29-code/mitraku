@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5 p-5 h-100">
        <div class="row my-3">
            <div class="col">
                <h2>Manage Category</h2>
                <button>

                    <i class="fas fa-heart"></i> Like

                </button>
            </div>
        </div>
        <div class="row shadow bg-body-tertiary rounded ">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                View Category
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-5 my-2 py-2">
                                Add Category
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                Delete Category
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                Update Category
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
