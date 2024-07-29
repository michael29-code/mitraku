@extends('layouts.layoutAdmin')

@section('isViewAdvertisementActive', 'active')

@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container h-100">
        <div class="row shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <div class="col-12">
                <div class="row w-100 align-items-center">
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="me-3 mx-3 my-3">
                            <a href="{{ route('manage-advertisement-admin') }}"><i class="fa-solid fa-arrow-left"
                                    style="font-size: 2rem"></i></a>
                        </div>
                        <div>
                            <h4 class="mb-0">View Advertisement</h4>
                        </div>
                    </div>
                    <div class="col-md-7 mt-3">
                        {{-- <form method="GET" action="{{ route('advertisement-search-admin') }}" class="d-flex flex-row mb-3" required>
                    <div class="input-group">
                        <div class="border border-end-0 input-group-text bg-transparent">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="text" class="form-control border border-start-0"
                            aria-label="Text input with checkbox" placeholder="search advertisement's name" name="search">
                    </div>
                    <button class="btn btn-sm btn-primary" type="submit">Search</button>
                </form> --}}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row mx-3 my-5 py-5 bg-body-tertiary rounded">
                    @foreach ($advertisements as $a)
                        <div class="explaination col-lg-6 mb-3">
                            <div class="d-flex justify-content-center shadow rounded mx-auto py-3 h-100">
                                <div class="col text-center py-5">
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="body-large-bold blue mb-4 mt-2">Starting at ${{ $a->price }}</h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="h3 mb-4">{{ $a->title }}</h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mx-3">
                                            {{ Str::of($a->description)->limit(250) }}
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col">
                                            <form action="{{ route('delete-advertisement-admin', $a->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this advertisement?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route('edit-advertisement-admin', ['id' => $a->id]) }}"
                                                class="btn btn-primary">Edit Advertisement</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- @if (strlen($a->description) <= 100)
                                    <div class="col image p-2 mx-1">
                                        <img class="img-thumbnail" style="width: auto; height: auto; max-width: 100%;"
                                            src="images/AdvertisementPage.png" alt="">
                                    </div>
                                @endif --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
