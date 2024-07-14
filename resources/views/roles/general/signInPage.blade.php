@extends('layouts.layoutRegister')

@section('content')
    <div class="container p-5" style="height: 90%;width: 100%">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row" style="height: 100%">
            <div class="px-5 py-1 col-sm col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <div class="row py-0 w-100">
                    <div class="col">
                        <h4>Sign In</h4>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col">
                        Don't have account? <span style="color: blue">
                            <a href="{{ route('register') }}" style="text-decoration: none">
                                Sign Up
                            </a>
                        </span>
                    </div>
                </div>
                <form action="/sign-in" method="POST" class="w-100">
                    @csrf
                    <div class="row mt-4">
                        <div class="col">
                            <label for="signInEmail" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="signInEmail" placeholder="ex: name@gmail.com" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="signInPassword" class="form-label">Password </label>
                        <div class="col passs">
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror passwordInputPlace" id="signInPassword"
                                placeholder="at least 8 characters">
                            <i class="bi bi-eye-slash-fill opacity-75 passwordIconPlace" id="togglePassword" style="cursor: pointer;"></i>

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col text-end" style="color: blue">
                            Forgot password?
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Sign In</button>
                        </div>
                    </div>
                </form>
                {{-- <div class="row mt-3">
                    <div class="col">
                        <hr>
                    </div>
                    <div class="col text-center">
                        or continue with
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col text-center" style="font-size: 2rem">
                        <i class="bi bi-google"></i>
                    </div>
                    <div class="col text-center" style="font-size: 2rem">
                        <i class="bi bi-facebook"></i>
                    </div>
                    <div class="col text-center" style="font-size: 2rem">
                        <i class="bi bi-apple"></i>
                    </div>
                </div> --}}
            </div>
            <div class="col-sm col-lg-6 bg-secondary">
                {{-- <img src="" alt=""> --}}
            </div>
        </div>
    </div>
@endsection
