@extends('layouts.layout')

@section('content')
    <div class="row" style="height: 80vh">
        <div class="col-4 g-5">
            <div class="container col-8">
                <img class="rounded-circle" style="width: 15rem; height: 15rem;" src="{{ $user->getImageURL() }}"
                    alt="profile_image">
            </div>
            <div class="mb-3 p-5">
                <form action="{{ route('uploud-image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="formFile" class="form-label">Pilih Foto</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required>
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="p-3">
                        <button type="submit" class="btn btn-primary">Upload Image</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-8 mt-5">
            <div class="">
                <h2>Biodata Diri</h5>
            </div>

            <div class="row g-4">
                <div class="col-4">
                    <h6>Name</h6>
                </div>
                <div class="col-8">
                    <h6>{{ $user->username }}</h6>
                </div>
                <div class="col-4">
                    <h6>Level</h6>
                </div>
                <div class="col-8">
                    <h6>{{ $user->level }}</h6>
                </div>
                <div class="col-4">
                    <h6>Birthdate</h6>
                </div>
                <div class="col-8">
                    <h6>{{ $user->date_of_birth }}</h6>
                </div>
                <div class="col-4">
                    <h6>Address</h6>
                </div>
                <div class="col-8">
                    <h6>{{ $user->address }}</h6>
                </div>
                <div class="col-4">
                    <h6>Email</h6>
                </div>
                <div class="col-8">
                    <h6>{{ $user->email }}</h6>
                </div>

                <div class="p-5 text-center">
                    <button style="width: 15rem" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#change-password">
                        Change Password
                    </button>
                </div>

                <div class="modal fade" id="change-password" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
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
                                    <div class="mb-1">
                                        <label for="recipient-name" class="col-form-label">New Password</label>
                                        <div class="col passs">
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror passwordInputPlace"
                                                id="password" required placeholder="at least 8 characters">
                                            <i class="bi bi-eye-slash-fill opacity-75 passwordIconPlace" id="togglePassword"
                                                style="cursor: pointer;"></i>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmNewPassword" class="col-form-label">Confirm New Password</label>
                                        <div class="col passs">
                                            <input name="password_confirmation" type="password"
                                                class="form-control @error('password_conformation') is-invalid @enderror passwordInputPlace2"
                                                id="password_conformation" required placeholder="confirm your new password">
                                            <i class="bi bi-eye-slash-fill opacity-75 passwordIconPlace2"
                                                id="togglePassword" style="cursor: pointer;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
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

    @if ($errors->has('password'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('change-password'));
                myModal.show();
            });
        </script>
    @endif
@endsection
