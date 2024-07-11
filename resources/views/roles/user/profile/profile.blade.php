@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="container">
                <img style="width: 20rem; height: 20rem;" src="{{ $user->image }}" alt="profile_image">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Pilih Foto</label>
                <input class="form-control" type="file" id="new-image">
            </div>
        </div>
        <div class="col-8 mt-5">
            <h5>Biodata Diri</h5>
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

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#change-password">
                        Change Password
                    </button>

                    <div class="modal fade" id="change-password" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        {{-- <div class="modal fade @if ($errors->any()) show @endif" id="change-password"
                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" --}}
                        @if ($errors->any())
                            style="display: block;"
                        @endif>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('change-password') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Change Password</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">New Password</label>
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror" id="password"
                                                required>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    {{-- <label for="recipient-name" class="col-form-label">New Password</label>
                                    <input type="text" name="password" class="form-control" id="password" required>
                                    <button class="btn btn-primary">Save changes</button> --}}
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    @if($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var myModal = new bootstrap.Modal(document.getElementById('change-password'));
                myModal.show();
            });
        </script>
    @endif
@endsection