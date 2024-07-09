@extends('layouts.layoutAdmin')

@section('content')
<div class="container w-100 h-100">
    <div class="row shadow bg-body-tertiary rounded">
        <div class="col">
            <div class="card border border-0">
                <div class="card-body py-5">
                    <div class="row my-3">
                        <div class="col-5">
                            <div class="row">
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="me-3 mx-3 my-3">
                                        <a href="{{ route('manage-advertisement') }}"><i class="fa-solid fa-arrow-left" style="font-size: 2rem"></i></a>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">View Advertisement</h4>
                                    </div>
                                </div>
                                <form action="{{ route('update-advertisement', $advertisement->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="exampleInputTitle" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ $advertisement->title }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPrice" class="form-label">Price</label>
                                        <input type="text" name="price" class="form-control" value="{{ $advertisement->price }}">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <select class="form-select" aria-label="Default select example" name="subscriptionDate">
                                            <option value="Daily" {{ $advertisement->subscriptionDate == 'Daily' ? 'selected' : '' }}>Daily</option>
                                            <option value="Monthly" {{ $advertisement->subscriptionDate == 'Monthly' ? 'selected' : '' }}>Monthly</option>
                                            <option value="Annually" {{ $advertisement->subscriptionDate == 'Annually' ? 'selected' : '' }}>Annually</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $advertisement->description }}</textarea>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Update"></input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
