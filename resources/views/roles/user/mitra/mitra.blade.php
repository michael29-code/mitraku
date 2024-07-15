@extends('layouts.layout')

@section('isMitraActive', 'active')

@section('content')
    <div class="p-4">
        <h1 class="h2">Mitra Page</h1>
        <p>Check out live properties on the market currently for sale</p>
        <div class="d-flex flex-row mb-3">
            <input class="form-control me-4 rounded-pill" type="text" placeholder="3146 W 88th Stret, Cleveland OH 44102">
            <button class="btn btn-primary" type='button'>Search</button>
        </div>
        <p class="mb-0">103 Results for Search</p>
    </div>
    <div class="container p-5 h-100" style="margin-top: 0;"> 
        <div class="row shadow bg-body-tertiary rounded gx-4 gy-4">
            @foreach ($mitras->chunk(2) as $chunk)
                <div class="col-6 mb-4"> 
                    @foreach ($chunk as $mitra)
                        <a href="{{ route('detail-mitra', $mitra->id) }}">
                            <div class="card mx-2 mb-4">
                                <div class="card-img-top position-relative" style="height: 50%;">
                                    <img src="https://www.hargatiket.net/wp-content/uploads/2018/07/Harga-Tiket-Citra-Raya-Water-World.jpg"
                                        class="img-fluid w-100 h-100" alt="Avatar" style="object-fit:                                                                                                           ;">
                                    <span class="badge text-bg-primary rounded-pill position-absolute top-0 end-0 m-2"
                                        style="font-size: 1.25rem; padding: 0.5em 1em;">EKSKLUSIF</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title my-1" style="font-size: 1.5rem; text-decoration: none;">{{ $mitra->mitraName }}</h5>
                                        <span class="badge text-bg-primary rounded-pill"
                                              style="font-size: 1.25rem; padding: 0.5em 1em;">{{ $mitra->mitraCategory }}</span>
                                    </div>
                                    <div class="col" style="text-decoration: none">
                                        {{ $mitra->address }}
                                    </div>
                                    <div class="row my-3">
                                        <div class="col" style="text-decoration: none">
                                            <p>{{ $mitra->mitraOverview }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="{{ route('detail-mitra', $mitra->id) }}" class="btn btn-outline-primary w-100" style="text-decoration: none;">Chat dan Lakukan Kerja Sama</a>
                                </div>                                
                            </div>
                        </a>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
