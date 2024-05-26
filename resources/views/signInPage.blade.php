@extends('layouts.layout')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="px-5 py-1 col-sm col-lg-6">
                <div class="row py-0">
                    <div class="col">
                        <h4>Sign In</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Don't have account? <span style="color: blue">
                            <a href="#" style="text-decoration: none">
                                Sign Up
                            </a>
                        </span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="signInEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signInEmail" placeholder="ex: name@gmail.com">
                        <div id="emailError" class="form-text ms-2 text-danger body-small-bold">Error Text</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="signInPassword" class="form-label">Password </label>
                        <input type="email" class="form-control" id="signInPassword" placeholder="at least 8 characters">
                        <div id="passwordError" class="form-text ms-2 text-danger body-small-bold">Error Text</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
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
                <div class="row mt-3">
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
                    <div class="col">
                        GOOGLE
                    </div>
                    <div class="col">
                        Facebook
                    </div>
                    <div class="col">
                        Apple
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-6 bg-secondary">
                {{-- <img src="" alt=""> --}}
            </div>
        </div>
    </div>
@endsection
