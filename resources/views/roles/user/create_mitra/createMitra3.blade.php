@extends('layouts.layout')
@section('title', "Create Mitra")

@section('content')
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2>Create Mitra - Step 3</h2>
        </div>

        <form id="step3Form" action="{{ route('store-mitra-3') }}" method="POST" enctype="multipart/form-data">
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
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5 justify-content-center">
                <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
                    <h4 class="text-center">Location Information</h4>
            
                    <div class="mb-3 w-100">
                        <div class="col">
                            <label for="address" class="form-label"><b>Location</b></label>
                            <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror"
                            required value="{{ old('address', session()->has('step3Data') ? session('step3Data')['address'] : '') }}">
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>                           
                    </div>
                    <div class="mb-3 w-100">
                        <label for="image_map"><b>Image Map</b></label>
                        <input type="file" class="form-control @error('image_map') is-invalid @enderror"
                            id="image_map" name="image_map">
                        @if (session()->has('step3Data.image_map'))
                            <div>
                                <img src="{{ asset('storage/mitra-images/' . session('step3Data.image_map')) }}" alt="image_map" style="max-width: 200px; margin-top: 10px;">
                            </div>
                        @endif
                        @error('image_map')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>                  
            <div class="row mt-4">
                <div class="col text-end">
                    <button type="submit" form="step3Form" class="btn btn-primary">Finish</button>
                </div>
            </div>
        </form>
    </div>
@endsection
