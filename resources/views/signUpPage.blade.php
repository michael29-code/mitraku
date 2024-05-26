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
                        Sign up to enjoy the features of MiKu
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="signUpUsername" class="form-label">Username </label>
                        <input type="text" class="form-control" id="signUpUsername" placeholder="at least 5 characters">
                        <div id="UsernameError" class="form-text ms-2 text-danger body-small-bold">Error Text</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="signUpDateOfBirth" class="form-label">Date Of Birth </label>
                        <input type="date" class="form-control" id="signUpDateOfBirth" placeholder="Ex: 8 June 1977">
                        <div id="DateOfBirthError" class="form-text ms-2 text-danger body-small-bold">Error Text</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="signUpEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signUpEmail" placeholder="ex: name@gmail.com">
                        <div id="emailError" class="form-text ms-2 text-danger body-small-bold">Error Text</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="signUpPassword" class="form-label">Password </label>
                        <input type="email" class="form-control" id="signUpPassword" placeholder="at least 8 characters">
                        <div id="passwordError" class="form-text ms-2 text-danger body-small-bold">Error Text</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary" style="width: 100%">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-6 bg-secondary">
                {{-- <img src="" alt=""> --}}
            </div>
        </div>
    </div>
@endsection
