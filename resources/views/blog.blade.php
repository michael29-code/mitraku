@extends('layouts.layout')

@section('content')
<div class="rectangleSpace"></div>
    <div class="rectangle">
        <div class="rectangleSpace"></div>
        <div class="row row-cols-6">
            <div class="miniRectangle">
                <h1 class="category">Technology</h1>
            </div>
        </div>
        <div class="col row-cols-2">
            <h1 class="title">The Impact of Technology on the Workplace: How Technology is Changing</h1>
        </div>
        <div class="row row-cols-6">
            <h3 class="author">Tracey Wilson</h3>
            <h3 class="date">August 20, 2022</h3>
        </div>
    </div>
 
    <div class="container my-5 p-5 h-100">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                        <div class="row my-5">
                            @foreach ($blogs as $blog)
                            <div class="col">
                                <div class="card mx-2">
                                    <img src="storage/{{ $blog['image'] }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <span class="badge text-bg-primary my-2">{{ $blog->kategori->jenisKategori}}</span>
                                        <h5 class="card-title my-1">{{ $blog['title'] }}</h5>
                                        <div class="row my-3">
                                            <div class="col-2">
                                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                    class="rounded-circle img-fluid" alt="Avatar" />
                                            </div>
                                            <div class="col">
                                                {{ $blog['writerID'] }}
                                            </div>
                                            <div class="col">{{ $blog['created_at'] }}</div>
                                        </div>
                                        <a href="#" class="btn btn-danger w-100">Delete</a>
                                    </div>
                                </div>
                            </div>       
                            @endforeach
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection