@extends('layouts.layoutAdmin')

@section('isViewAdvertisementActive', 'active')

@section('content')
<div class="container my-5 p-5 h-100">
    <div class="row shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="row w-100 align-items-center">
            <div class="col-md-6 d-flex align-items-center">
                <div class="me-3 mx-3 my-3">
                    <a href="{{ route('manage-advertisement-admin') }}"><i class="fa-solid fa-arrow-left" style="font-size: 2rem"></i></a>
                </div>
                <div>
                    <h4 class="mb-0">View Advertisement</h4>
                </div>
            </div>
            <div class="col-md-6">
                <form method="GET" action="{{ route('search-advertisement-admin') }}" class="d-flex flex-row mb-3" required>
                    <div class="input-group">
                        <div class="border border-end-0 input-group-text bg-transparent">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="text" class="form-control border border-start-0"
                            aria-label="Text input with checkbox" placeholder="search advertisement's name" name="search">
                    </div>
                    <button class="btn btn-sm btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>    
        <div class="row mx-3 my-5 bg-body-tertiary rounded">
            @foreach ($advertise as $a)
            <div class="explaination col-lg-6 mb-3">
                <div class="d-flex justify-content-center shadow bg-body-tertiary rounded mx-auto p-3" style="width: 100%; max-width: 550px; min-height: 100px;">
                    <div class="text p-4">
                        <h1 class="body-large-bold blue mb-4 mt-2">Starting at ${{ $a->price }}</h1>
                        <h1 class="h3 mb-4">{{ $a->title }}</h1>
                        <div class="body-large-medium mb-3">{{ $a->description }}</div>
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('delete-advertisement', $a->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this advertisement?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-danger me-2 mx-0">Delete</button>
                            </form>
                            <a href="{{ route('edit-advertisement', ['id' => $a->id]) }}" class="btn btn-xs btn-primary">Edit Advertisement</a>
                        </div>
                    </div>
                    @if(strlen($a->description) <= 100)
                    <div class="col image p-2 mx-1">
                        <img class="img-thumbnail" style="width: auto; height: auto; max-width: 100%;" src="images/AdvertisementPage.png" alt="">
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>        
    </div>
</div>
@endsection
