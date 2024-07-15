@extends('layouts.layout')

@section('content')
    <div class="container my-5 m-auto d-flex w-100 justify-content-center align-items-center flex-column">
        <form id="step1Form" action="{{ route('store-mitra-1') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col text-center">
                    <h2>Create Mitra - Step 1</h2>
                </div>
            </div>
            <div class="row my-3 w-60 mx-auto">
                <div class="col">
                    <div class="row my-2 mx-5">
                        <div class="col">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row w-100">
                <div class="col-6">
                    <div class="row">
                        <div class="col">
                            <h3>Mitra Information</h3>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Mitra Name</b></p>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="mitraName" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Mitra Overview</b></p>
                            <div class="row">
                                <div class="col">
                                    <textarea name="mitraOverview" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Establishment Year</b></p>
                            <div class="row">
                                <div class="col">
                                    <input type="number" name="mitraYear" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Website</b></p>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="mitraWebsite" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Category</b></p>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="mitraCategory" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Image Cover</b></p>
                            <div class="row">
                                <div class="col">
                                    <input type="file" name="image_cover" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-end align-items-end">
                    <div class="col d-flex justify-content-end">
                        <button type="submit" form="step1Form" class="btn btn-primary w-20">Next</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
