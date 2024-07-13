@extends('layouts.layoutAdmin')

@section('content')
<div class="d-flex justify-content-center">
    <div class="row shadow bg-body-tertiary rounded w-75">
        <div class="col">
            <div class="card border-0">
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
                            <input type="text" name="title" class="form-control" id="title" value="{{ $advertisement->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="price" value="{{ $advertisement->price }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="subscriptionDate" class="form-label">Subscription Date</label>
                            <select class="form-select" id="subscriptionDate" name="subscriptionDate" required>
                                <option value="Daily" {{ $advertisement->subscriptionDate == 'Daily' ? 'selected' : '' }}>Daily</option>
                                <option value="Monthly" {{ $advertisement->subscriptionDate == 'Monthly' ? 'selected' : '' }}>Monthly</option>
                                <option value="Annually" {{ $advertisement->subscriptionDate == 'Annually' ? 'selected' : '' }}>Annually</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description" required>{{ $advertisement->description }}</textarea>
                        </div>
                        <div class="mb-3 text-end">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
