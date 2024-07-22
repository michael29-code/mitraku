@extends('layouts.layout')

@section('isBlogActive', 'active')

@section('content')

    <div class="container">

        <div class="rectangleSpace" style="height: 3rem"></div>

        <div class="rectangle" style="">
            <div class="rectangleSpace" style="height: 2rem"></div>
            <div class="miniRectangle text-center" style="">
                <h1 class="category">Technology</h1>
            </div>
            <div class="row align-items-center p-3" style="width: 55rem">
                <h1 class="title">The Impact of Technology on the Workplace: How Technology is Changing</h1>
            </div>
            <div class="row row-cols-6 align-item-center g-3">
                <div class="rectangleSpace align-item-center" style="width: 2.5rem"></div>
                <div class="col" style="width: 3rem">
                    <img class="rounded-circle" src="/images/profile_admin.jpg" alt=""
                        style="height: 3rem; width: 3rem">
                </div>
                <div class="col p-3">
                    <h3 class="author">Tracey Wilson</h3>
                </div>
                <div class="rectangleSpace align-item-center" style="width: 2.5rem"></div>
                <div class="col p-3">
                    <h3 class="date">August 20, 2022</h3>
                </div>
            </div>
        </div>

        <div class="rectangleSpace" style="height: 7rem"></div>


        <div class="container row row-cols-4">
            @foreach ($blogs as $blog)
                <div>
                    <a class="text-decoration-none" href="{{ route('view-blog-detail', $blog->id) }}">
                        <div class="rectangle col" style="width: 21rem; height: 30rem">
                            <img class="rounded p-2" src="{{ $blog->image }}" alt="bnr1"
                                style="height: 15rem; width: 21rem">
                            <div class="rectangleSpace" style="height: 1rem"></div>
                            <div class="miniRectangle text-center">
                                <div class="category">{{ $blog->kategori->jenisKategori }}</div>
                            </div>
                            <div class="rectangleSpace" style="height: 1rem"></div>
                            <div class="row" style="width: 20rem; height: 5rem;">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                            </div>
                            <div class="rectangleSpace" style="height: 1rem"></div>
                            <div class="row row-cols-3 align-item-center g-3">
                                <div class="rectangleSpace" style="width: 1rem"></div>
                                <div class="col" style="width: 3rem">
                                    <img class="rounded-circle" src="/images/profile_admin.jpg" alt=""
                                        style="height: 3rem; width: 3rem">
                                </div>
                                <div class="column" style="width: 15rem">
                                    <div class="author">
                                        {{ $blog->writer->username }}
                                    </div>

                                    <div class="created_at">
                                        {{ $blog->created_at->diffForHumans() }}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="rectangleSpace" style="height: 1.5rem"></div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center"> {{-- Center the pagination links --}}
                {{ $blogs->links() }} </div>
        </div>
    </div>

@endsection
