@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center my-5">
        <div class="row align-items-center">
            <div class="col-2">
                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                    class="rounded-circle img-fluid w-100" alt="Avatar" />
            </div>
            <br>
            <div class="col-auto">
                <h5>Michael Smith</h5>
                <h6>michaelsmith123@gmail.com</h6>
            </div>
            <div class="row-auto">
                <br>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Date of Birth</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Email</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Password</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Mitra Name</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Address</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection