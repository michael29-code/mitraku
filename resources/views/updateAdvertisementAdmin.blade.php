@extends('layouts.layoutAdmin')

@section('content')

<div class="row m-3" style="height: 3rem">
    <button type="button" class="btn btn-dark" style="width: 7rem; height: 3rem">Dark</button>
    <h2 class="col" style="width: 10rem; height 3rem">Update Advertisement</h2>
</div>

<form action="{{ route('advertisement.update', $advertisement->id) }}" method="POST">
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

@endsection
