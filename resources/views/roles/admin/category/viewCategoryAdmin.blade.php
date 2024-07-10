@extends('layouts.layoutAdmin')

@section('isViewCategoryActive', 'active')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <div class="container my-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body py-5">
                        <div class="container">
                            <div class="col-md-12">
                                <h4><a href="{{ route('manage-category') }}"><i class="fa-solid fa-arrow-left"></i></a> View
                                    Category</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="card border border-0 gap-2">
                                    @foreach ($data as $item)
                                        <div class="border-bottom">
                                            <div class="row d-flex align-items-center justify-content-center">
                                                <div
                                                    class="col-md-12 my-2 d-flex align-items-center justify-content-center">
                                                    <div class="col-md-6">
                                                        <h5>{{ $item->jenisKategori }}</h5>
                                                    </div>
                                                    <div class="col-md-5 d-flex align-items-center justify-content-end ">
                                                        <a href="{{ route('update-category', ['jenisKategori' => $item->jenisKategori]) }}"
                                                            class="btn btn-primary btn-sm">Update</a>
                                                        <form onsubmit="return confirm('Yakin mau hapus data ?')"
                                                            class="d-inline"
                                                            action="{{ route('destroy-category', $jenisKategori = $item->jenisKategori) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm"
                                                                type="submit">Delete</button>
                                                        </form>
                                                    </div>

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
        </div>
    </div>
    </div>
@endsection
