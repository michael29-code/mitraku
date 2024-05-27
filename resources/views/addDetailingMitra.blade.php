@extends('layouts.layout')

@section('content')
    <div class="container my-5 full-height m-auto d-flex w-100 justify-content-center align-items-center flex-column">
        <div class="row">
            <div class="col text-center">
                <h2>Detail Mitra</h2>
            </div>
        </div>
        <div class="row my-3 w-50">
            <div class="col">
                <div class="row my-2 mx-5">
                    <div class="col">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            style="width: 100%; height: 0.8rem" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 100%; height: 0.8rem"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            style="width: 100%; height: 0.8rem" aria-valuemin="0" aria-valuemax="0">
                            <div class="progress-bar" style="width: 100%; height: 0.8rem"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            style="width: 100%; height: 0.8rem" aria-valuemin="0" aria-valuemax="0">
                            <div class="progress-bar" style="width: 100%; height: 0.8rem"></div>
                        </div>
                        </di </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h3>Lates Ratings & Ceritficate</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Pastikan informasi mitra anda valid </p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Mitra Details</b></p>
                        <div class="row">
                            <div class="col">
                                <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h3>Locations</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Pastikan informasi mitra anda valid </p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Nama</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Point Maps</b></p>
                        <div class="row">
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h3>Award</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row my-2">
                            <div class="col">
                                <p><b>Mitra Details</b></p>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="row my-2">
                    <div class="col"></div>
                    <div class="col">
                        <button type="button" class="btn btn-primary w-100">Save</button>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
