@extends('layouts.layout')
@section('title', "Edit Profile Mitra")

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center position-relative">
            <a href="{{ route('profile-mitra') }}" class="text-dark position-absolute start-0">
                <i class="fa-solid fa-arrow-left mx-3 fa-2x"></i>
            </a>
            <h3 class="text-center p-3 m-0">Edit Profile Mitra</h3>
        </div>
        <form action="{{ route('update-profile-mitra', $mitra->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="mitraName" class="form-label"><b>Mitra Name</b></label>
                    <div class="card no-outline-card">
                        <div id="mitraName" class="form-control-plaintext ms-2">{{ $mitra->mitraName }}</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="mitraWebsite" class="form-label"><b>Mitra Website</b></label>
                    <input type="text" id="mitraWebsite" name="mitraWebsite" class="form-control"
                        value="{{ $mitra->mitraWebsite }}">
                    @error('mitraWebsite')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="establishmentYear" class="form-label"><b>Establishment Year</b></label>
                    <div class="card no-outline-card">
                        <div id="establishmentYear" class="form-control-plaintext ms-2">{{ $mitra->mitraYear }}</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="mitraCategory" class="form-label"><b>Mitra Category</b></label>
                    <select id="mitraCategory" name="mitraCategory" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $mitra->category->id == $category->id ? 'selected' : '' }} class="form-select">
                                {{ $category->jenisKategori }}
                            </option>
                        @endforeach
                    </select>
                    @error('mitraCategory')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraOverview" class="form-label"><b>Mitra Overview (15-25 words)</b></label>
                    <textarea id="mitraOverview" name="mitraOverview" class="form-control" rows="3">{{ $mitra->mitraOverview }}</textarea>
                    @error('mitraOverview')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="contactName" class="form-label"><b>Contact Name</b></label>
                    <input type="text" id="contactName" name="contactName" class="form-control"
                        value="{{ $mitra->contactName }}">
                    @error('contactName')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-5">
                    <label for="contactPhoneNumber" class="form-label"><b>Contact Phone Number</b></label>
                    <input type="text" id="contactPhoneNumber" name="contactPhoneNumber" class="form-control"
                        value="{{ $mitra->contactPhoneNumber }}">
                    @error('contactPhoneNumber')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="contactEmail" class="form-label"><b>Contact Email</b></label>
                    <input type="email" id="contactEmail" name="contactEmail" class="form-control"
                        value="{{ $mitra->contactEmail }}">
                    @error('contactEmail')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraDetails" class="form-label"><b>Mitra Details (20-40 words)</b></label>
                    <textarea id="mitraDetails" name="mitraDetails" class="form-control" rows="3">{{ $mitra->mitra_details }}</textarea>
                    @error('mitraDetails')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="address" class="form-label"><b>Mitra Address</b></label>
                    <textarea id="address" name="address" class="form-control" rows="2">{{ $mitra->address }}</textarea>
                    @error('address')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraLocation" class="form-label"><b>Mitra Image</b></label>
                    @if ($mitra->image_cover)
                        <img class="img-preview2 img-fluid mb-3 col-sm-5 d-block"
                            src="{{ asset('storage/' . $mitra->image_cover) }}">
                    @else
                        <img class="img-preview2 img-fluid mb-3 col-sm-5">
                    @endif
                    <input class="form-control @error('image_cover') is-invalid @enderror " type="file"
                        id="image_cover" name="image_cover" onchange="previewImage2()"
                        value="{{ old('image_cover', $mitra->image_cover) }}">
                    <input type="hidden" name="oldImageMitra" value="{{ $mitra->image_cover }}">
                    @error('image_cover')
                        <div class="invalid-feedback m-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <div>
                        <label for="mitraLocation" class="form-label"><b>Mitra Location</b></label>
                        @if ($mitra->image_map)
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block"
                                src="{{ asset('storage/' . $mitra->image_map) }}">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input class="form-control @error('image_map') is-invalid @enderror " type="file"
                            id="image_map" name="image_map" onchange="previewImage()"
                            value="{{ old('image_map', $mitra->image_map) }}">
                        <input type="hidden" name="oldImageLocation" value="{{ $mitra->image_map }}">
                        @error('image_map')
                            <div class="invalid-feedback m-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10 d-flex justify-content-between">
                    <div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url('/profile-mitra') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image_map');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewImage2() {
            const image = document.querySelector('#image_cover');
            const imgPreview = document.querySelector('.img-preview2');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
