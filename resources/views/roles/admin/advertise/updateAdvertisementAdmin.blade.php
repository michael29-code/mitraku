@extends('layouts.layoutAdmin')
@section('title', "Edit Advertisement")

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card shadow bg-body-tertiary rounded w-75 border-0" style="min-height: 80vh;">
            <div class="card-body py-5">
                <div class="row mb-4">
                    <div class="col-md-6 d-flex align-items-center">
                        <a href="{{ route('manage-advertisement-admin') }}" class="me-3">
                            <i class="fa-solid fa-arrow-left" style="font-size: 2rem"></i>
                        </a>
                        <h4>Edit Advertisement</h4>
                    </div>
                </div>
                <form action="{{ route('update-advertisement-admin', $advertisement->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                            value="{{ $advertisement->title }}" required>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price"
                            value="{{ $advertisement->price }}" required>
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="period" class="form-label">Period</label>
                        <input type="text" name="period" class="form-control @error('period') is-invalid @enderror" id="period"
                            value="{{ $advertisement->period }}" required>
                        @error('period')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description" required
                            style="resize: none; height: 10rem;">{{ $advertisement->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 text-end">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
