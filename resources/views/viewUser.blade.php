@extends('layouts/layoutAdmin')

@section('content')
    <div class="col-lg-9">
        <div class="p-4">
            <h1 class="h2">View User</h1>
            <div class="d-flex flex-row mb-3">
                <input class="form-control me-4 rounded-pill" type="text" placeholder="Search User">
                <button class="btn btn-primary" type="button">Search</button>
            </div>

            <div class="table-user">
                <table class="table table-bordered text-center">
                    
                </table>
            </div>
        </div>
    </div>
@endsection