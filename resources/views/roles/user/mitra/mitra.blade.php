@extends('layouts.layout')

@section('isMitraActive', 'active')

@section('content')
    <div class="row">
        <div class="col">
            <h2 class="h2">Mitra Page</h2>
            <p>Check out live properties on the market currently for sale</p>

            <!-- Updated form to handle category selection -->
            <form action="{{ route('view-mitra') }}" method="GET" class="mb-4">
                <div class="row g-2 align-items-center">
                    <div class="col-md-2">
                        <select class="form-select" name="category" aria-label="Category" onchange="this.form.submit()">
                            <option value="" {{ request('category') == '' ? 'selected' : '' }}>All Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ (isset($selectedCategory) && $selectedCategory == $category->id) ? 'selected' : '' }}>
                                    {{ $category->jenisKategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Search Mitra by Name" name="search"
                            value="{{ request('search') }}">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-outline-primary w-100" type="submit">Search</button>
                    </div>
                </div>
            </form>

            <div class="row mt-4">
                <div class="col">
                    <p>Promoted</p>
                </div>
            </div>
            <div class="row mb-4 mt-2">
                <div class="col mb-3 mb-sm-0">
                    <div class="card border border-0 shadow bg-body-tertiary rounded">
                        <div class="row no-gutters shadow bg-body-tertiary rounded">
                            <div class="col-2 p-3">
                                @if ($shuffledAdvertisement)
                                    <img src="{{ $shuffledAdvertisement->image_cover ? asset('storage/mitra-images/' . $shuffledAdvertisement->image_cover) : asset('/images/default_mitra_image.jpg') }}"
                                        class="img-fluid">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">{{ $shuffledAdvertisement->mitraName }}</h5>
                                        <div class="">
                                            <span class="badge rounded-pill text-bg-primary">Ad</span>
                                            <span class="badge rounded-pill text-bg-primary">{{ $shuffledAdvertisement->jenisKategori }}</span>
                                        </div>
                                    </div>
                                    <p>{{ $shuffledAdvertisement->address }}</p>
                                    <p>{{ $shuffledAdvertisement->mitraOverview }}</p>
                                    <a href="{{ route('detail-mitra', $shuffledAdvertisement->id) }}"
                                        class="btn btn-outline-primary w-100" style="text-decoration: none;">Chat
                                        dan Lakukan Kerja Sama</a>
                                </div>
                                @else
                                    <p>No active advertisement available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (isset($searchTerm) && $searchTerm)
        <div class="row mb-5">
            <div class="col">
                <h5>Search Results for "{{ $searchTerm }}"</h5>
            </div>
        </div>
    @endif

    @if (isset($selectedCategory) && $selectedCategory)
        <div class="row mb-5">
            <div class="col">
                <h5>Filtered by Category: {{ $categories->find($selectedCategory)->jenisKategori }}</h5>
            </div>
        </div>
    @endif

    @if ($mitras->count())
        <div class="row mb-5">
            <div class="col">
                <p class="mb-0">{{ $mitras->total() }} Results Found</p>
            </div>
        </div>
    @else
        <div class="row mb-5">
            <div class="col">
                <p>No results found.</p>
            </div>
        </div>
    @endif
    <div class="row shadow bg-body-tertiary rounded gx-4 gy-4">
        @foreach ($mitras as $mitra)
            <div class="col-md-6 mb-4">
                <a href="{{ route('detail-mitra', $mitra->id) }}" class="text-decoration-none">
                    <div class="card mx-2 mb-4">
                        <div class="card-img-top position-relative" style="height: 50%;">
                            <div class="fixed-height-container">
                                <img src="{{ $mitra->image_cover ? asset('storage/' . $mitra->image_cover) : asset('/images/default_mitra_image.jpg') }}"
                                    class="img-fluid w-100 rounded" alt="image_cover" style="object-fit: cover;">
                                @if ($mitra->status === 'active')
                                    <span class="badge text-bg-primary rounded-pill position-absolute top-0 end-0 m-2"
                                        style="font-size: 1.25rem; padding: 0.5em 1em;">EKSKLUSIF</span>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title my-1" style="font-size: 1.5rem;">{{ $mitra->mitraName }}</h5>
                                <span class="badge text-bg-primary rounded-pill" style="font-size: 1.25rem; padding: 0.5em 1em;">
                                    {{ $mitra->category->jenisKategori }}
                                </span>
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
@endsection
