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
            <div class="row">
                <div class="col-md-5">
                    <h4>Mitra Information</h4>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="mitraName" class="form-label"><b>Mitra Name</b></label>
                            <input type="text" name="mitraName" id="mitraName"
                                class="form-control @error('mitraName') is-invalid @enderror" required
                                value="{{ old('mitraName', session()->has('step1Data') ? session('step1Data')['mitraName'] : '') }}">
                            @error('mitraName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>                                       
                    <div class="form-group">
                        <label for="mitraOverview" class="form-label"><b>Mitra Overview</b></label>
                        <textarea name="mitraOverview" id="mitraOverview" class="form-control @error('mitraOverview') is-invalid @enderror" style="height: 100px" required>{{ old('mitraOverview', session()->has('step1Data') ? session('step1Data')['mitraOverview'] : '') }}</textarea>
                        @error('mitraOverview')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>                    
                    <div class="mb-3">
                        <label for="mitraYear" class="form-label"><b>Establishment Year</b></label>
                        <input type="number" name="mitraYear" id="mitraYear" class="form-control @error('mitraYear') is-invalid @enderror" required value="{{ old('mitraYear', session()->has('step1Data') ? session('step1Data')['mitraYear'] : '') }}">
                        @error('mitraYear')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>                    
                </div>

                <div class="col-md-1 d-flex justify-content-center align-items-center">
                    <div class="vr" style="height: 100%;"></div>
                </div>

                <div class="col-md-5 my-5">
                    <div class="mb-3">
                        <label for="mitraWebsite" class="form-label"><b>Website</b></label>
                        <input type="text" name="mitraWebsite" id="mitraWebsite" class="form-control @error('mitraWebsite') is-invalid @enderror" required value="{{ old('mitraWebsite', session()->has('step1Data') ? session('step1Data')['mitraWebsite'] : '') }}">
                        @error('mitraWebsite')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>                    
                    <div class="mb-3">
                        <label for="mitraCategory" class="form-label"><b>Category</b></label>
                        <select class="form-select @error('mitraCategory') is-invalid @enderror" id="mitraCategory"
                            name="mitraCategory" required>
                            <option value="">Open this select menu</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->jenisKategori }}"
                                    {{ session()->has('step1Data') && session('step1Data')['mitraCategory'] == $category->jenisKategori ? 'selected' : (old('mitraCategory') == $category->jenisKategori ? 'selected' : '') }}>
                                    {{ $category->jenisKategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('mitraCategory')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image_cover"><b>Image Cover</b></label>
                        <input type="file" class="form-control @error('image_cover') is-invalid @enderror"
                            id="image_cover" name="image_cover">
                        @if (session()->has('step1Data.image_cover'))
                            <div>
                                <img src="{{ asset('storage/mitra-images/' . session('step1Data.image_cover')) }}" src="{{ $mitra->getImageMitra() }}"
                                alt="image_cover" style="max-width: 200px; margin-top: 10px;">
                            </div>
                        @endif
                        @error('image_cover')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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
