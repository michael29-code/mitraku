@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="container">
                <img style="width: 20rem; height: 20rem;" src="{{ $user->image }}" alt="profile_image">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Pilih Foto</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="col-8 mt-5">
            <h5>Ubah Biodata Diri</h5>
            <div class="row">
                <div class="col-4">
                    <h6>Name</h6>
                    <h6>Level</h6>
                    <h6>Birth Date</h6>
                    <h6>Address</h6>
                    <h6>Email</h6>
                    <h6>Password</h6>
                </div>
                <div class="col-8">
                    <h6>{{ $user->username }}</h6>
                    <h6>{{ $user->level }}</h6>
                    <h6>{{ $user->date_of_birth }}</h6>
                    <h6>{{ $user->address }}</h6>
                    <h6>{{ $user->email }}</h6>
                    <h6>**********</h6>
                </div>
            </div>
        </div>
    </div>
@endsection