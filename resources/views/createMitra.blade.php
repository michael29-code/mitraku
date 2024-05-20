@extends('layouts.layout')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col bg-secondary">
                {{-- <img src="..." class="img-fluid" alt="..."> --}}

            </div>
            <div class="col p-5">
                <div class="row">
                    <div class="col">
                        <h3>Daftar Mitra</h3>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="0">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="0">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>pastikan informasi anda valid</p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Nama Mitra</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Alamat Mitra</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row my-2">
                            <div class="col">
                                <button type="button" class="btn btn-primary w-100">Save</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
