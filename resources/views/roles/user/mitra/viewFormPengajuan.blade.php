@extends('layouts.layout')

@section('content')
    <div class="container my-5 full-height m-auto d-flex w-100 justify-content-center align-items-center flex-column">
        <div class="row my-5">
            <div class="col text-center">
                <h2>Form Pengajuan Penawaran</h2>
            </div>
        </div>

        <div class="row w-100 my-5">
            <div class="col">
                <div class="row my-2">
                    <div class="col">
                        <p><b>Name</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
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
        <div class="row w-100">
            <div class="col">
                <div class="row my-2">
                    <div class="col">
                        <p><b>Category(Penawaran/Perjanjian)</b></p>
                        <div class="row mb-3">
                            <div class="col">
                                <select class="form-select" aria-label="Default select example" name="kategori">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Teknologi 1</option>
                                    <option value="2">Teknologi 2</option>
                                    <option value="3">Teknologi 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row my-2">
                    <div class="col">
                        <p><b>Contact Number</b></p>
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
        <div class="row w-100">
            <div class="col">
                <div class="row my-2">
                    <div class="col">
                        <p><b>Start Time</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row my-2">
                    <div class="col">
                        <p><b>Duration</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="time" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100">
            <div class="col">
                <div class="row my-2">
                    <div class="col">
                        <p><b>Payment Amount</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="time" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-end">
                <button type="button" class="btn btn-primary w-25">Submit</button>
            </div>
        </div>
    </div>
@endsection
