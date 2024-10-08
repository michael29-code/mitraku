@extends('layouts.layout')
@section('title', "Create Mitra")

@section('content')
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2>Create Mitra - Step 2</h2>
        </div>

        <form id="step2Form" action="{{ route('store-mitra-2') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row my-3 w-60 mb-5">
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

            <div class="row mb-5">
                <div class="col-md-5">
                    <h4>Mitra Details</h4>
                    <p>Ensure your mitra information is valid.</p>
                    <div class="form-group">
                        <label for="mitra_details" class="form-label"><b>Mitra Details</b></label>
                        <textarea name="mitra_details" id="mitra_details" class="form-control @error('mitra_details') is-invalid @enderror" style="height: 100px" required>{{ session()->has('step2Data') ? session('step2Data')['mitra_details'] : old('mitra_details') }}</textarea>
                        @error('mitra_details')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>                    
                </div>
                <div class="col-md-1 d-flex justify-content-center align-items-center">
                    <div class="vr" style="height: 100%;"></div>
                </div>

                <div class="col-md-5">
                    <h4>Mitra Contact</h4>
                    <p>Ensure your contact information is valid.</p>
                    <div class="col">
                        <label for="contactName" class="form-label"><b>Contact Name</b></label>
                        <input type="text" name="contactName" id="contactName" class="form-control @error('contactName') is-invalid @enderror"
                               required value="{{ old('contactName', session()->has('step2Data') ? session('step2Data')['contactName'] : '') }}">
                        @error('contactName')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>                                    
                    <div class="col">
                        <label for="contactEmail" class="form-label"><b>Contact Email</b></label>
                        <input type="text" name="contactEmail" id="contactEmail" class="form-control @error('contactEmail') is-invalid @enderror"
                               required value="{{ old('contactEmail', session()->has('step2Data') ? session('step2Data')['contactEmail'] : '') }}">
                        @error('contactEmail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>         
                    <div class="col">
                        <label for="contactPhoneNumber" class="form-label"><b>Contact Phone Number</b></label>
                        <input type="text" name="contactPhoneNumber" id="contactPhoneNumber" class="form-control @error('contactPhoneNumber') is-invalid @enderror"
                               required value="{{ old('contactPhoneNumber', session()->has('step2Data') ? session('step2Data')['contactPhoneNumber'] : '') }}">
                        @error('contactPhoneNumber')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>       
                </div>
            </div>

            <div class="row mt-4">
                <div class="col text-end">
                    <button type="submit" form="step2Form" class="btn btn-primary">Next</button>
                </div>
            </div>
        </form>
    </div>
@endsection
