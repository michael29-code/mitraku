@extends('layouts.layoutAdmin')

@section('isViewAdvertisementActive', 'active')

@section('content')
<div class="container w-100 h-100">
    <div class="row shadow bg-body-tertiary rounded">
        <div class="row m-3" style="height: 3rem">
            <h2 class="col" style="width: 10rem; height 3rem">Create Advertisement</h2>
        </div>

        <form action="{{ route('store-advertisement-admin') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputTitle" class="form-label">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPrice" class="form-label">Price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="mb-3 form-check">
                <select class="form-select" aria-label="Default select example" name="subscriptionDate">
                    <option selected>Subscription Duration</option>
                    <option value="Daily">Daily</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Annually">Annually</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <input type="submit" class="btn btn-primary w-100" value="Submit"></input>
        </form>
    </div>
</div>
@endsection
