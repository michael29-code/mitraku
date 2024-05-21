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
                                View Blog
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mx-5 my-2 py-2">
                                Write Blog
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
