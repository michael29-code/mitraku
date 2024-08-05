@extends('layouts.layout')

@section('isBlogActive', 'active')

@section('content')
    @if ($latestBlog)
        <a href="{{ route('view-blog-detail', $latestBlog->id) }}" class="text-decoration-none">
            <div class="rectangle mt-5 gmbr-nekobot"
                style="background-image: url('{{ asset('storage/' . $latestBlog->image) }}'); background-size: cover; background-position: center; display: flex; flex-direction: column; justify-content: center;filter: blur(0.05rem) saturate(0.7) contrast(1.5) brightness(1.2);
">
                <div class="miniRectangleHeader text-center">
                    <h1 class="category m-0 p-1" style="color: primary;">{{ $latestBlog->kategori->jenisKategori }}</h1>
                </div>
                <div class="p-3">
                    <h1 class="title" style="color: white; max-width: 80%;">{{ $latestBlog->title }}</h1>
                </div>
                <div class="mt-2 mx-5">
                    <div class="d-inline-flex align-items-center">
                        <img class="rounded-circle" src="/images/profile_admin.jpg" alt="Author"
                            style="height: 3rem; width: 3rem;">
                        <div class="me-3">
                            <h3 class="author m-0" style="color: white;">{{ $latestBlog->writer->username }}</h3>
                        </div>
                        <h3 class="date m-0" style="color: white;">{{ $latestBlog->created_at->format('F d, Y') }}</h3>
                    </div>
                </div>
            </div>
        </a>
    @endif

    <div class="rectangleSpace" style="height: 3rem"></div>

    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach ($blogs as $blog)
                <div class="col">
                    <a class="text-decoration-none" href="{{ route('view-blog-detail', $blog->id) }}">
                        <div class="card h-100 shadow-sm" style="width: 21rem;">
                            <img class="card-img-top"
                                src="{{ asset('storage/' . $blog->image) ? asset('storage/' . $blog->image) : asset('storage/blog-images/default.png') }}"
                                alt="bnr1" style="height: 15rem; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text mb-1">
                                    <span class="badge bg-primary">{{ $blog->kategori->jenisKategori }}</span>
                                </p>
                            </div>
                            <div class="card-footer d-flex align-items-center">
                                <img class="rounded-circle" src="/images/profile_admin.jpg" alt="Author"
                                    style="height: 3rem; width: 3rem;">
                                <small class="author">{{ $blog->writer->username }}</small>
                                <small class="text-muted mx-3">{{ $blog->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
