@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5 p-5 h-100">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body py-5">
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
                                <div class="input-group mb-3">
                                    <div class="border border-end-0 input-group-text bg-transparent">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <input type="text" class="form-control border border-start-0"
                                        aria-label="Text input with checkbox" placeholder="search mitra">
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 my-3">
                            @foreach ($blogs as $blog)
                                <div class="col my-3">
                                    <div class="card mx-2 h-100">
                                        <a href="/view-blog-detail/{{ $blog->slug }}">
                                            <img src="{{ asset('storage/' . $blog->image) }}"class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <span class="badge text-bg-primary my-2">{{ $blog->kategori1 }}</span>
                                                <span class="badge text-bg-primary my-2">{{ $blog->kategori2 }}</span>
                                                <h5 class="card-title my-1">{{ $blog->title }}</h5>
                                                <div class="row my-3">
                                                    <div class="col-2">
                                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                            class="rounded-circle img-fluid" alt="Avatar" />
                                                    </div>
                                                    <div class="col">
                                                        {{ $blog->writerId }}
                                                    </div>
                                                    <div class="col">{{ $blog->created_at->diffForHumans() }}</div>
                                                </div>
                                                <div class="row w-100">
                                                    <div class="col">
                                                        <form action="/delete-blog/{{ $blog->slug }}" method="post"
                                                            class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-danger w-100"
                                                                onclick="return confirm('Are You sure?')"><span
                                                                    data-feather="x-circle"></span> Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col d-flex align-self-end">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
