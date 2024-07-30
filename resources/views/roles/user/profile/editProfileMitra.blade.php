@extends('layouts.layout')

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
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraOverview" class="form-label"><b>Mitra Overview (15-25 words)</b></label>
                    <textarea id="mitraOverview" name="mitraOverview" class="form-control" rows="3">{{ $mitra->mitraOverview }}</textarea>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="contactName" class="form-label"><b>Contact Name</b></label>
                    <input type="text" id="contactName" name="contactName" class="form-control"
                        value="{{ $mitra->contactName }}">
                </div>
                <div class="col-5">
                    <label for="contactPhoneNumber" class="form-label"><b>Contact Phone Number</b></label>
                    <input type="text" id="contactPhoneNumber" name="contactPhoneNumber" class="form-control"
                        value="{{ $mitra->contactPhoneNumber }}">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="contactEmail" class="form-label"><b>Contact Email</b></label>
                    <input type="email" id="contactEmail" name="contactEmail" class="form-control"
                        value="{{ $mitra->contactEmail }}">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraDetails" class="form-label"><b>Mitra Details (20-40 words)</b></label>
                    <textarea id="mitraDetails" name="mitraDetails" class="form-control" rows="3">{{ $mitra->mitra_details }}</textarea>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraAddress" class="form-label"><b>Mitra Address</b></label>
                    <textarea id="mitraAddress" name="mitraAddress" class="form-control" rows="2">{{ $mitra->address }}</textarea>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraLocation" class="form-label"><b>Mitra Location</b></label>
                    <input type="file" id="mitraImage" name="mitraImage" class="form-control">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraImage" class="form-label"><b>Mitra Image</b> | <small>{{ $mitra->image_cover }} </small></label>
                    <input type="file" id="mitraImage" name="mitraImage" class="form-control">
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
@endsection
