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
                    <div class="col w-100">
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
                            <div class="progress-bar" style=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h3>Mitra</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Pastikan informasi mitra anda valid </p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Deskripsi Singkat Mitra</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Email MItra</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Tahun Berdiri</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="date" class="form-control">
                            </div>
                        </div>
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
                        <h3>Contacts Mitra</h3>
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
                        <p><b>No Telepon</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Profile</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h3>Images</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row my-2">
                            <div class="col">
                                <p><b>Image</b></p>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-end">
                <button type="button" class="btn btn-primary w-50">Save</button>
            </div>
        </div>
    </div>
@endsection
