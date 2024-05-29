@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body py-5">
                        <div class="row my-3">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-1 text-end">
                                        <a href="/view-blog">
                                            <i class="fa-solid fa-arrow-left" style="font-size: 2rem"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <h4>View Blog</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-end">
                                <a href="/edit-blog/{{ $blog->slug }}" class="text-decoration-none text-black"><i
                                        class="fa-solid fa-pen-to-square"></i>Edit Blog</a>
                            </div>
                        </div>
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
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                        class="rounded-circle img-fluid" alt="Avatar" style="width: 35px" />
                                    <p>{{ $blog->writer->name }}</p>
                                    <p>{{ $blog->created_at }}</p>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col">
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="rounded w-100" alt="..."
                                        style="height: 50vh">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    body
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
