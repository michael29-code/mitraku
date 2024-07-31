@extends('layouts.layoutAdmin')

@section('isViewAdvertisementActive', 'active')

@section('content')
    <div class="container w-100 h-100">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="row my-3">
                <div class="col-5 my-4 mx-3">
                    <div class="row md-5">
                        <div class="col-1 d-flex justify-content-center align-items-center">
                            <a href="/manage-blog"><i class="fa-solid fa-arrow-left"
                                    style="font-size: 2rem"></i></a>
                        </div>
                        <div class="col">
                            <h4>Write Blog</h4>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row my-3">
                <div class="col mx-5">
                    <form action="{{ route('store-advertisement-admin') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputTitle" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPrice" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPeriod" class="form-label">Period (Monthly)</label>
                            <input type="number" name="period" class="form-control @error('period') is-invalid @enderror" value="{{ old('period') }}">
                            @error('period')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="description" style="resize: none; height: 10rem;">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary w-100" value="Submit"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
