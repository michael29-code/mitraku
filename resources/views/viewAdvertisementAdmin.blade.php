@extends('layouts.layoutAdmin')

@section('content')

<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="row justify-content-center p-3">
        <div class="row col" style="height: 3rem">
            <button type="button" class="btn btn-dark" style="width: 7rem; height: 3rem">Dark</button>
            <h2 class="col" style="width: 10rem; height 3rem">View Advertisement</h2>
        </div>
        <form class="d-flex col" role="search" style="width: 20rem; height: 3rem">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    <div class="row row-cols-2 p-3 justify-content-center">
        @foreach ($advertise as $a)
        <div class="row col shadow p-2 m-3 bg-body-tertiary rounded" style="width: 37rem; height:13rem">
            <div class="col">
                <h5>{{ $a->price }}</h5>
                <h4>{{ $a->title }}</h4>
                <p>{{ $a->description }}</p>
                <form action="{{ route('advertisement.destroy', $a->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this advertisement?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('advertisement.edit', $a->id) }}" class="btn btn-warning">Edit</a>
            </div>
            <div class="col bg-info"></div>
        </div>   
        @endforeach
    </div>
</div>

@endsection
