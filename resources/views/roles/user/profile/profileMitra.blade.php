@extends('layouts.layout')
@section('title', "Profile Mitra")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <h2 class="text-center p-3">Profile Mitra</h2>
        <div class="row d-flex justify-content-center">
            <label class="text-center" for="Mitra Profile Picture">
                <b class="h6">Mitra Profile Picture</b>
            </label>
            <img src="{{ $mitra->getImageCover() }}" class="img-fluid rounded" alt="image_cover" style="width: 300px; height: 300px; object-fit: cover;">
        </div>

        <form>
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="mitraName" class="form-label"><b>Mitra Name</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraName" class="form-control-plaintext">{{ $mitra->mitraName }}</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="mitraWebsite" class="form-label"><b>Mitra Website</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraWebsite" class="form-control-plaintext">{{ $mitra->mitraWebsite }}</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="establishmentYear" class="form-label"><b>Establishment Year</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="establishmentYear" class="form-control-plaintext">{{ $mitra->mitraYear }}</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="mitraCategory" class="form-label"><b>Mitra Category</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraCategory" class="form-control-plaintext">{{ $mitra->mitraCategory }}</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraOverview" class="form-label"><b>Mitra Overview (15-25 words)</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraOverview" class="form-control-plaintext">{{ $mitra->mitraOverview }}</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="contactName" class="form-label"><b>Contact Name</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="contactName" class="form-control-plaintext">{{ $mitra->contactName }}</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="contactPhoneNumber" class="form-label"><b>Contact Phone Number</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="contactPhoneNumber" class="form-control-plaintext">{{ $mitra->contactPhoneNumber }}</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="contactEmail" class="form-label"><b>Contact Email</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="contactEmail" class="form-control-plaintext">{{ $mitra->contactEmail }}</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraDetails" class="form-label"><b>Mitra Details (20-40 words)</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraDetails" class="form-control-plaintext">{{ $mitra->mitra_details }}</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraAddress" class="form-label"><b>Mitra Address</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraAddress" class="form-control-plaintext">{{ $mitra->address }}</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <div class="row">
                        <label for="mitraLocation" class="form-label"><b>Mitra Location</b></label>
                        <img src="{{ $mitra->getImageMap() }}" class="img-fluid w-50 rounded" alt="Mitra Location">
                    </div>
                </div>
            </div>
            {{-- button --}}
            <div class="d-flex justify-content-center">
                <div class="col-10">
                    <a href="{{ route('edit-profile-mitra', $mitra->id) }}" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </form>
    </div>
@endsection
