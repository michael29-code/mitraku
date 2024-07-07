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
        <p class="mb-0">103 Results for Search</p> <!-- Remove bottom margin -->
    </div>
    <div class="container p-5 h-100" style="margin-top: 0;"> <!-- Remove top margin -->
        <div class="row shadow bg-body-tertiary rounded gx-4 gy-4"> <!-- Added gx-4 and gy-4 for spacing -->
            @foreach ($mitras->chunk(2) as $chunk) <!-- Chunk the results into groups of 2 -->
                <div class="col-6 mb-4"> <!-- Added mb-4 for bottom margin -->
                    @foreach ($chunk as $mitra)
                        <div class="card mx-2 mb-4">
                            <div class="card-img-top position-relative" style="height: 50%;">
                                <img src="https://www.hargatiket.net/wp-content/uploads/2018/07/Harga-Tiket-Citra-Raya-Water-World.jpg" class="img-fluid w-100 h-100" alt="Avatar" style="object-fit: cover;">
                                <span class="badge text-bg-primary rounded-pill position-absolute top-0 end-0 m-2" style="font-size: 1.25rem; padding: 0.5em 1em;">EKSKLUSIF</span>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title my-1" style="font-size: 1.5rem;">PT. Teknologi Maju Jaya</h5>
                                    <span class="badge text-bg-primary rounded-pill" style="font-size: 1.25rem; padding: 0.5em 1em;">Teknologi</span>
                                </div>
                                <div class="col">
                                    Jakarta Pusat, Indonesia
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <p>PT. Teknologi Maju Jaya adalah perusahaan teknologi yang berdedikasi untuk menyediakan solusi terkini dan inovatif dalam bidang teknologi informasi. </p>
                                    </div>
                                </div>
                                <hr>
                                <a href="detailMitra" class="btn btn-outline-primary w-100">Chat dan Lakukan Kerja Sama</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
