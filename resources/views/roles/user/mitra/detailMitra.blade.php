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
                    <img src="{{ $mitra->image_cover ? asset('storage/mitra-images/' . $mitra->image_cover) : asset('/images/default_mitra_image.jpg') }}" class="img-fluid w-100;img-fluid rounded"  alt="image_cover" style="object-fit: cover;">
                </div>
                <div class="col p-5">
                    <div class="row">
                        <div class="col">
                            <h5>Contacts</h5>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-2">
                            @if (Auth::user()->image == 'default')
                                <img src="/images/default_user_profile.jpg" class="rounded-circle user-profpic" id="profileImage"
                                 style="width: 5.5rem; height: 5.5rem;"> 
                            @else
                                <img src="{{ Auth::user()->getImageURL() }}" class="rounded-circle user-profpic" id="profileImage"
                                    style="width: 5.5rem; height: 5.5rem;"> 
                            @endif
                        </div>                        
                        <div class="col-5">
                            <p style="font-size: 1.5rem; margin-bottom: 0;">{{ $mitra->contactName }}</p>
                            <span>Email: {{ $mitra->contactEmail }}</span>
                            <span><p>Phone no: {{ $mitra->contactPhoneNumber }}</p></span>
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
    
    <div class="container my-5 m-auto d-flex w-100 justify-content-center align-items-center flex-column">
        <div class="row">
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
</div>    
@endsection
