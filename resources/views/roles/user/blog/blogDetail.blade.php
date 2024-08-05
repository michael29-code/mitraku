@extends('layouts.layout')

@section('isBlogActive', 'active')
@section('title', 'Blog Detail')

@section('content')
    <div class="container my-5">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <span class="badge text-bg-primary my-2">{{ $blog->kategori->jenisKategori }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>{{ $blog->title }}</h4>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-3 d-flex justify-content-evenly">
                                    <img src="/images/profile_admin.jpg" class="rounded-circle img-fluid" alt="Avatar"
                                        style="width: 35px" />
                                    <p>{{ $blog->writer->username }}</p>
                                    <p>{{ $blog->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col">
                                    <img src="{{ asset('storage/' . $blog->image) ? asset('storage/' . $blog->image) : asset('storage/blog-images/default.png') }}"
                                        class="rounded w-100" alt="bnr1" style="height: 50vh">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {!! $blog->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
