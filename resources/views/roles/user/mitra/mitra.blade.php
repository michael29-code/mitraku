@extends('layouts.layout')

@section('isMitraActive', 'active')

@section('content')
    <div class="p-4">
        <h1 class="h2">Mitra Page</h1>
        <p>Check out live properties on the market currently for sale</p>
        
        <form action="{{ route('mitra-search') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Mitra by Name" name="search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </div>
        </form>
        @if(isset($searchTerm))
        <h5>Search Results for "{{ $searchTerm }}"</h5>
        @endif
        
        @if(isset($mitras))
        <ul>
            @foreach($mitras as $mitra)
            <li>{{ $mitra->mitraName }}</li>
            @endforeach
        </ul>
        <p class="mb-0">{{ $mitras->total() }} Results for Search</p>
        @endif
        <div class="container p-5 h-100" style="margin-top: 0;">
            <div class="row shadow bg-body-tertiary rounded gx-4 gy-4">
                @foreach ($mitras as $mitra)
                    <div class="col-md-6 mb-4"> 
                        <a href="{{ route('detail-mitra', $mitra->id) }}" class="text-decoration-none">
                            <div class="card mx-2 mb-4">
                                <div class="card-img-top position-relative" style="height: 50%;">
                                    <img src="https://www.hargatiket.net/wp-content/uploads/2018/07/Harga-Tiket-Citra-Raya-Water-World.jpg"
                                        class="img-fluid w-100 h-100" alt="Avatar"
                                        style="object-fit: cover;">
                                    <span class="badge text-bg-primary rounded-pill position-absolute top-0 end-0 m-2"
                                        style="font-size: 1.25rem; padding: 0.5em 1em;">EKSKLUSIF</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title my-1" style="font-size: 1.5rem;">{{ $mitra->mitraName }}</h5>
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
                                    <a href="{{ route('detail-mitra', $mitra->id) }}" class="btn btn-outline-primary w-100"
                                        style="text-decoration: none;">Chat dan Lakukan Kerja Sama</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $mitras->links() }}
            </div>
        </div>
    </div>
@endsection
