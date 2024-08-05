@extends('layouts.layoutRegister')
@section('title', "Sign Up")

@section('content')
    <div class="container p-5 " style="height: 90%;width: 100%">
        <div class="row" style="height: 100%; width: 100%">
            <div class="px-5 py-1 col-sm col-lg-6 d-flex flex-column justify-content-center align-items-center"
                style="height: 100%; width: 50%">
                <div class="row py-0  w-100">
                    <div class="col">
                        <h4>Sign Up</h4>
                    </div>
                </div>
                <div class="row w-100 ">
                    <div class="col">
                        {{-- Sign up to enjoy the features of MiKu --}}
                        Already have an account? <span style="color: blue">
                            <a href="{{ route('login') }}" style="text-decoration: none">
                                Sign In!
                            </a>
                        </span>
                    </div>
                </div>
                <form action="/sign-up" method="POST" class="w-100">
                    @csrf
                    <div class="row mt-3 w-100">
                        <div class="col">
                            <label for="signUpUsername" class="form-label">Username </label>
                            <input name="username" type="text"
                                class="form-control @error('username') is-invalid @enderror" id="signUpUsername"
                                placeholder="at least 5 characters" value="{{ old('username') }}">
                            {{-- <div id="UsernameError" class="form-text ms-2 text-danger body-small-bold">Error Text</div> --}}
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3 w-100">
                        <div class="col">
                            <label for="signUpDateOfBirth" class="form-label">Date Of Birth </label>
                            <input name="date_of_birth" type="date"
                                class="form-control @error('date_of_birth') is-invalid @enderror" id="signUpDateOfBirth"
                                placeholder="Ex: 8 June 1977" value="{{ old('date_of_birth') }}">
                            {{-- <div id="DateOfBirthError" class="form-text ms-2 text-danger body-small-bold">Error Text</div> --}}
                            @error('date_of_birth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4 w-100">
                        <div class="col">
                            <label for="signUpEmail" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="signUpEmail" placeholder="ex: name@gmail.com" value="{{ old('email') }}">
                            {{-- <div id="emailError" class="form-text ms-2 text-danger body-small-bold">Error Text</div> --}}
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3 w-100">
                        <label for="signUpPassword" class="form-label">Password </label>
                        <div class="col passs">
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror passwordInputPlace2"
                                id="signUpPassword" placeholder="at least 8 characters">
                            <i class="bi bi-eye-slash-fill opacity-75 passwordIconPlace2" id="togglePassword"
                                style="cursor: pointer;"></i>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3 w-100">
                        <label for="signUpConfirmPassword" class="form-label">Confirm Password </label>
                        <div class="col passs">
                            <input name="password_confirmation" type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror passwordInputPlace"
                                id="password_confirmation" placeholder="Confirm your password">
                            <i class="bi bi-eye-slash-fill opacity-75 passwordIconPlace" id="togglePassword"
                                style="cursor: pointer;"></i>
                        </div>
                    </div>

                    <div class="row mt-3 w-100">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm col-lg-6">
                <img src="/images/signup_image.jpg" alt="" style="width: 100%; height:100%;">
            </div>
        </div>
    </div>
@endsection
