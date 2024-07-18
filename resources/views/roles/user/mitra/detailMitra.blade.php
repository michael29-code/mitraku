@extends('layouts.layout')

@section('isMitraActive', 'active')

@section('content')
<div class="container my-5 mx-auto">
    <div class="row align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a href="{{ route('view-mitra') }}" class="text-decoration-none d-flex align-items-center">
                        <i class="fa-solid fa-arrow-left" style="font-size: 2rem;"></i>
                        <span class="ms-4" style="font-size: 1.5rem;">Back</span>   
                    </a>
                </div>
                <div class="col text-center">
                    <h2 class="mb-0">{{ $mitra->mitraName }}</h2>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row my-5">
                <div class="col text-center">
                    <p style="font-size: 1.3rem; margin-bottom: 0;">{{ $mitra->mitraOverview }}</p>
                    <h6 style="margin-bottom: 2rem;">Since {{ $mitra->mitraYear }} | {{ $mitra->mitraWebsite }}</h6>
                    <span class="badge text-bg-primary rounded-pill" style="font-size: 1rem; padding: 0.5em 1em;">{{ $mitra->mitraCategory }}</span>
                </div>
            </div>
        </div>
        
        <div class="container my-5 m-auto d-flex w-100 justify-content-center align-items-center flex-column">
            <div class="row w-100">
                <div class="col">
                    <img src="{{ asset('images/' . $mitra->image_cover) }}" class="img-fluid rounded" alt="Image Cover">
                </div>
                <div class="col p-5">
                    <div class="row">
                        <div class="col">
                            <h5>Contacts</h5>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-2">
                            <img src="{{ asset('images/profile_user.jpg') }}"
                                class="rounded-circle img-fluid" alt="Avatar" />
                        </div>
                        <div class="col-5">
                            <p style="font-size: 1.5rem; margin-bottom: 0;">{{ $mitra->contactName }}</p>
                            <span>Email: {{ $mitra->contactEmail }}</span>
                            <span>Phone no: {{ $mitra->contactPhoneNumber }}</span>
                        </div>
                    </div>
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-1" role="group" aria-label="First button">
                            <a href="https://api.whatsapp.com/send?phone={{ $mitra->contactPhoneNumber }}" target="_blank" class="btn btn-primary">Contact</a>
                        </div>
                        <div class="btn-group me-2" role="group" aria-label="Second button">
                            <a href="/form-pengajuan/{{ $mitra->id }}" class="btn btn-outline-primary">Send Form</a>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col">
                            <p style="font-size: 1.3rem; margin-bottom: 0;"><b>Mitra Details</b></p>
                            <p style="font-size: 1.2rem; margin-bottom: 0;">{{ $mitra->mitraOverview }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h4 class="mb-4">Gallery</h4>
        <div class="row">
            @if(!empty($mitra->galeri))
                @foreach(json_decode($mitra->galeri) as $galleryImage)
                    <div class="col-md-3 mb-4">
                        <div class="card rounded-5" style="height: 200px;">
                            <img src="{{ asset('images/' . $galleryImage) }}" class="img-fluid rounded" alt="Gallery Image">
                        </div>
                    </div>
                @endforeach
            @else
                <p>No images in the gallery.</p>
            @endif
        </div>
    </div>
    <div class="container my-5 m-auto d-flex w-100 justify-content-center align-items-center flex-column">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="rating">
                    <h4 class="txt-no-underline">Latest Ratings & Certificates</h4>
                    <p>{{ $mitra->latest_rating_and_certificate }}</p>
                </div>
                <div class="col my-5">
                    <h4>Award</h4>
                    <h6>{{ $mitra->awards }}</h6>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="col">
                    <h4>Location</h4>
                    <div class="card rounded-5 w-50">
                        <div class="col">
                            <img src="{{ asset('images/' . $mitra->image_map) }}" class="img-fluid rounded" alt="Image Cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection
