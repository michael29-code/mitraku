@extends('layouts.layout')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="px-5 py-1 col-sm col-lg-6">
                <div class="row py-0">
                    <div class="col">
                        <h4>Sign Up</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        {{-- Sign up to enjoy the features of MiKu --}}
                        Already have an account? <span style="color: blue">
                            <a href="{{ route('login') }}" style="text-decoration: none">
                                Sign In!
                            </a>
                        </span>
                    </div>
                </div>
                <form action="/sign-up" method="POST">
                    @csrf
                    <div class="row mt-3">
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
                    <div class="row mt-3">
                        <div class="col">
                            <label for="signUpDateOfBirth" class="form-label">Date Of Birth </label>
                            <input name="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                id="signUpDateOfBirth" placeholder="Ex: 8 June 1977" value="{{ old('date_of_birth') }}">
                            {{-- <div id="DateOfBirthError" class="form-text ms-2 text-danger body-small-bold">Error Text</div> --}}
                            @error('date_of_birth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
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
                    <div class="row mt-3">
                        <div class="col">
                            <label for="signUpPassword" class="form-label">Password </label>
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="signUpPassword"
                                placeholder="at least 8 characters">
                            {{-- <div id="passwordError" class="form-text ms-2 text-danger body-small-bold">Error Text</div> --}}
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm col-lg-6 bg-secondary">
                {{-- <img src="" alt=""> --}}
            </div>
        </div>
    </div>
@endsection
