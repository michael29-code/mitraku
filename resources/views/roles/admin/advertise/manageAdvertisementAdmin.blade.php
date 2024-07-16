@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5 p-5 h-100">
        <div class="row my-3">
            <div class="col">
                <h2>Manage Advertisement</h2>
            </div>
        </div>
        <div class="row shadow bg-body-tertiary rounded ">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mx-2 my-2 py-2 border-bottom d-flex align-items-center">
                                <i class="bi bi-eye-fill fs-4 me-3"></i>
                                <a href="{{ route('view-advertisement-admin') }}" class="text-decoration-none text-black" style="font-size: 15px;">View Advertisement</a>
                            </div>
                        </div>                        x 
                        <div class="row">
                            <div class="col mx-2 my-2 py-2 border-bottom d-flex align-items-center">
                                <i class="fa-solid fa-pen-to-square fs-4 me-3"></i>
                                <a href="{{ route('add-advertisement-admin') }}" class="text-decoration-none text-black" style="font-size: 15px;">Write Advertisement</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
