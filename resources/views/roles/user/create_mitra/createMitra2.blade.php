@extends('layouts.layout')

@section('content')
    <div class="container my-5 m-auto d-flex w-100 justify-content-center align-items-center flex-column">
        <form id="step2Form" action="{{ route('store-mitra-2') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col text-center">
                    <h2>Create Mitra - Step 2</h2>
                </div>
            </div>
            <div class="row my-3 w-60 mx-auto">
                <div class="col">
                    <div class="row my-2 mx-10">
                        <div class="col">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
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
                    </div>
                </div>
            </div>
            <div class="row w-100">
                <div class="col-6">
                    <div class="row">
                        <div class="col">
                            <h3>Mitra Details</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Ensure your mitra information is valid.</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Mitra Details</b></p>
                            <div class="row">
                                <div class="col">
                                    <textarea name="mitra_details" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Gallery</b></p>
                            <div class="row">
                                <div class="col">
                                    <input type="file" name="galeri[]" class="form-control" multiple required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mx-0">
                    <div class="row">
                        <div class="col">
                            <h3>Mitra Contact</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Ensure your contact information is valid.</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Contact Name</b></p>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="contactName" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Contact Email</b></p>
                            <div class="row">
                                <div class="col">
                                    <input type="email" name="contactEmail" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <p><b>Contact Phone Number</b></p>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="contactPhoneNumber" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 d-flex justify-content-end align-items-end">
                        <div class="col d-flex justify-content-end">
                            <button type="submit" form="step2Form" class="btn btn-primary w-20">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
