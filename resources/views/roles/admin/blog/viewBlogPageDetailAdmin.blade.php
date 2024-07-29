@extends('layouts.layoutAdmin')

@section('content')
    <div class="container ">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body ">
                        <div class="row my-3">
                            <div class="col-5">
                                <div class="col">
                                    <h4>
                                        <a href="/view-blog" class="text-decoration-none">
                                            <i class="fa-solid fa-arrow-left" style="font-size: 2rem"></i>
                                        </a>
                                        View Blog
                                    </h4>
                                </div>
                            </div>
                            <div class="col text-end">
                                <a href="/edit-blog/{{ $blog->slug }}" class="text-decoration-none text-black"><i
                                        class="fa-solid fa-pen-to-square"></i>Edit Blog</a>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col">
                                    @if ($blog->kategori->jenisKategori)
                                        <span class="badge bg-primary">{{ $blog->kategori->jenisKategori }}</span>
                                    @else
                                        <span class="badge bg-primary">Uncategorized</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <h4>{{ $blog->title }}</h4>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3 d-flex align-items-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                        class="rounded-circle img-fluid" alt="Avatar" style="width: 35px;">
                                    <div class="ms-3">
                                        <p class="mb-0">{{ $blog->writer->username }}</p>
                                        <small>{{ $blog->created_at }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="rounded w-100" alt="..."
                                        style="max-height: 400px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Body</p>
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
