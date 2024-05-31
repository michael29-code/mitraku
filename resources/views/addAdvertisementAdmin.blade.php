@extends('layouts.layoutAdmin')

@section('content')
    
    <div class="row m-3" style="height: 3rem">
        <button type="button" class="btn btn-dark" style="width: 7rem; height: 3rem">Dark</button>
        <h2 class="col" style="width: 10rem; height 3rem">Create Advertisement</h2>
    </div>
    
    <form>
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label">Title</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Price</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <select class="form-select" aria-label="Default select example">
                <option selected>Subscription Duration</option>
                <option value="1">Daily</option>
                <option value="2">Monthly</option>
                <option value="3">Annualy</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="button" class="btn btn-primary">Submit</button>
    </form>

@endsection