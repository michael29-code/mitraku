@extends('layouts.layout')

@section('content')
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2>Create Mitra - Step 1</h2>
        </div>
        <form id="step1Form" action="{{ route('store-mitra-1') }}" method="POST" enctype="multipart/form-data">
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

            {{-- @if (session()->has('step1Data'))
                {{ dd(session('step1Data')['mitraName']) }}
            @else
                {{ dd('gak ada data ') }}
            @endif --}}
            <div class="row">
                <div class="col-md-5">
                    <h4>Mitra Information</h4>
                    <div class="mb-3">
                        <label for="mitraName" class="form-label"><b>Mitra Name</b></label>
                        <input type="text" name="mitraName" id="mitraName" class="form-control" required value="{{ session()->has('step1Data') ?  session('step1Data')['mitraName'] : ''}}">
                    </div>                    
                    <div class="mb-3">
                        <label for="mitraOverview" class="form-label"><b>Mitra Overview</b></label>
                        <textarea name="mitraOverview" id="mitraOverview" class="form-control" style="height: 100px" required value="{{ session()->has('step1Data') ?  session('step1Data')['mitraOverview'] : ''}}"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="mitraYear" class="form-label"><b>Establishment Year</b></label>
                        <input type="number" name="mitraYear" id="mitraYear" class="form-control" required value="{{ session()->has('step1Data') ?  session('step1Data')['mitraYear'] : ''}}">
                    </div>
                </div>

                <div class="col-md-1 d-flex justify-content-center align-items-center">
                    <div class="vr" style="height: 100%;"></div>
                </div>

                <div class="col-md-5 my-5">
                    <div class="mb-3">
                        <label for="mitraWebsite" class="form-label"><b>Website</b></label>
                        <input type="text" name="mitraWebsite" id="mitraWebsite" class="form-control" required value="{{ session()->has('step1Data') ?  session('step1Data')['mitraWebsite'] : ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="mitraCategory" class="form-label"><b>Category</b></label>
                        <select class="form-select @error('mitraCategory') is-invalid @enderror" id="mitraCategory" name="mitraCategory">
                            <option value="">Open this select menu</option>
                            <option value="Teknologi" {{ old('mitraCategory') == 'Teknologi' ? 'selected' : '' }}>Teknologi</option>
                            <option value="Restoran" {{ old('mitraCategory') == 'Restoran' ? 'selected' : '' }}>Restoran</option>
                            <option value="Bangunan" {{ old('mitraCategory') == 'Bangunan' ? 'selected' : '' }}>Bangunan</option>
                        </select>
                        @error('mitraCategory')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image_cover" class="form-label"><b>Image Cover</b></label>
                        <input type="file" name="image_cover" id="image_cover" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col text-end">
                    <button type="submit" form="step1Form" class="btn btn-primary">Next</button>
                </div>
            </div>
        </form>
    </div>
@endsection
