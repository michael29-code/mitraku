@extends('layouts.layoutAdmin')

@section('isViewBlogActive', 'active')
@section('title', "View Blog Page")

@section('content')
    <div class="container px-4">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0 position-relative"> 
                    <div class="card-body-blog pb-5" style="min-height: 450px;"> 
                        <div class="row my-3">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-1 d-flex justify-content-center align-items-center">
                                        <a href="/manage-blog"><i class="fa-solid fa-arrow-left"
                                                style="font-size: 2rem"></i></a>
                                    </div>
                                    <div class="col">
                                        <h4>View Blog</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <form method="GET" action="{{ route('search-blog-admin') }}" class="d-flex flex-row mb-3"
                                    required>
                                    <div class="input-group">
                                        <div class="border border-end-0 input-group-text bg-transparent">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </div>
                                        <input type="text" class="form-control border border-start-0"
                                            aria-label="Text input with checkbox" placeholder="search blog name"
                                            name="search">
                                    </div>
                                    <button class="btn btn-sm btn-primary" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 my-3">
                            @foreach ($blogs as $blog)
                                <div class="col my-3">
                                    <div class="card mx-2 h-100 d-flex flex-column">
                                        <a href="/view-blog-detail/{{ $blog->slug }}" class="text-decoration-none">
                                            <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top mx-auto"
                                                alt="..." style="max-height: 300px; object-fit: cover;">
                                            <div class="card-body-blog mx-3 d-flex flex-column">
                                                <div>
                                                    <span
                                                        class="badge text-bg-primary my-2">{{ $blog->kategori->jenisKategori }}</span>
                                                    <h5 class="card-title my-1">{{ $blog->title }}</h5>
                                                    <div class="row my-3 align-items-center">
                                                        <div class="col-2 d-flex justify-content-center">
                                                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                                class="rounded-circle img-fluid" alt="Avatar" />
                                                        </div>
                                                        <div class="col d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <div>{{ $blog->writer->username }}</div>
                                                                <div>{{ $blog->created_at->diffForHumans() }}</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="mt-auto me-3">
                                                    <form action="/delete-blog/{{ $blog->slug }}"
                                                        method="post"class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger w-100"
                                                            onclick="return confirm('Are You sure?')">
                                                            <span data-feather="x-circle"></span> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-center"> {{-- Center the pagination links --}}
                                {{ $blogs->links() }} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
