@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5 p-5 h-100">
        <div class="row my-3">
            <div class="col">
                <h2>Manage Blog</h2>
            </div>
        </div>
        <div class="row shadow bg-body-tertiary rounded ">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                <i class="bi bi-eye-fill"></i>
                                <a href="/view-blog" class="text-decoration-none text-black">View Blog</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-5 my-2 py-2">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <a href="/write-blog" class="text-decoration-none text-black">Write Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
