@extends('layouts.layout')

@section('isHomeActive', 'active')

@section('content')
    {{-- @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    {{-- @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}
    {{-- {{ dd(Auth::user()) }} --}}
    {{-- {{ dd(Auth::user()->mitra) }} --}}


    <div class="mx-auto m-3 text-center" style="width: 35rem;">
        <h2>We make it easy for tenants and landlords.</h2>
    </div>

    <div class="mx-auto m-0 text-center" style="width: 50rem;">
        <p class="body-large-bold">Whether it's selling your current home, getting financing, or buying a new home, we
            make it easy and efficient. The best part? you'll save a bunch of money and time with our services.</p>
    </div>

    <div class="text-center">
        <a href="{{ route('view-mitra') }}" type="button" class="btn btn-primary btn-sm">View Mitra</a>
    </div>

    <div class="mx-auto m-5 row justify-content-center">
        <img src="/images/RumahNekoya.png" class="img-fluid home-picture" alt="rumah-nekoya" style="width: 80rem">
    </div>

    <div class="p-5 m-6 row justify-content-center text-center">
        <h3>Trusted by over a lot of companies.</h3>
        <div class="justify-content-center text-center g-5 row row-cols-5">
            <div>
                <img src="/images/logo-1.png" class="img-fluid" alt="logo1" style="width: 10rem">
            </div>
            <div>
                <img src="/images/logo-1.png" class="img-fluid" alt="logo1" style="width: 10rem">
            </div>
            <div>
                <img src="/images/logo-1.png" class="img-fluid" alt="logo1" style="width: 10rem">
            </div>
            <div>
                <img src="/images/logo-1.png" class="img-fluid" alt="logo1" style="width: 10rem">
            </div>
            <div>
                <img src="/images/logo-1.png" class="img-fluid" alt="logo1" style="width: 10rem">
            </div>
            <div>
                <img src="/images/logo-1.png" class="img-fluid" alt="logo1" style="width: 10rem">
            </div>
            <div>
                <img src="/images/logo-1.png" class="img-fluid" alt="logo1" style="width: 10rem">
            </div>
            <div>
                <img src="/images/logo-1.png" class="img-fluid" alt="logo1" style="width: 10rem">
            </div>
            <div>
                <img src="/images/logo-1.png" class="img-fluid" alt="logo1" style="width: 10rem">
            </div>
        </div>
    </div>

    <div class="text-center row row-cols-2 m-3 g-3 p-5">
        <img class="" src="/images/Dinding.png" alt="dinding" height="300rem">
        <div class="row align-items-center col body-medium-bold p-2">
            <div class="row p-2" style="width:25rem">
                <h3>Multi Curency Increase Update</h3>
            </div>
            <div class="p-2">
                <p>Whether it's selling your current home, getting financing, or buying a new home, we make it easy and
                    efficient. The best part? you'll save a bunch of money and time with our services.</p>
            </div>
            <div class="p-2">
                <a href="{{ route('view-blog') }}" type="button" class="btn btn-primary btn-sm">View Blog</a>
            </div>
        </div>
    </div>

    <div class="p-5 m-5 mx-auto text-center g-3" style="width: 85rem">

        <div class="row">
            <h2>Benefit and Regulated</h2>
        </div>

        <div class="justify-content-center text-center row row-cols-4 m-3 p-1">
            <div class="row align-items-center body-medium-bold p-2">
                <h4>Property Insurance</h4>
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                <h4>Best Price</h4>
            </div>            
            <div class="row align-items-center body-medium-bold p-2">
                <h4>Property Insurance</h4>
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                <h4>Best Price</h4>
            </div>
        </div>

        <div class="justify-content-center text-center row row-cols-4 m-3 g-3">
            <div class="row align-items-center body-medium-bold p-2">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>

        <div class="justify-content-center text-center row row-cols-4 m-3 g-3">
            <div class="row align-items-center body-medium-bold p-2">
                <h4>Lowest Commision</h4>
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                <h4>Overall Control</h4>
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                <h4>Lowest Commision</h4>
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                <h4>Overall Control</h4>
            </div>
        </div>

        <div class="justify-content-center text-center row row-cols-4 m-3 g-3">
            <div class="row align-items-center body-medium-bold p-2">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
            <div class="row align-items-center body-medium-bold p-2">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>

    </div>



    <div class="text-center row row-cols-2 m-3 g-3 p-5">
        <div class="align-self-center col body-medium-bold p-2">
            <div class="row p-2">
                <h2>Multi Curency Increase Update</h2>
            </div>
            <div class="p-2">
                <p>Whether it's selling your current home, getting financing, or buying a new home, we make it easy and
                    efficient. The best part? you'll save a bunch of money and time with our services.</p>
            </div>
            <div class="p-2">
                <a href="{{ route('view-advertisement-user') }}" type="button" class="btn btn-primary btn-sm">View Advertise</a>
            </div>
        </div>
        <img class="" src="/images/Dinding.png" alt="dinding" height="300rem">
    </div>

    <div class="text-center row row-cols-2 m-3 g-3 p-5">
        <img class="" src="/images/DenahRumah.png" alt="denah-rumah" height="300rem">
        <div class="align-self-center col body-medium-bold p-2">
            <div class="row p-2">
                <h2>Multi Curency Increase Update</h2>
            </div>
            <div class="p-2">
                <p>Whether it's selling your current home, getting financing, or buying a new home, we make it easy and
                    efficient. The best part? you'll save a bunch of money and time with our services.</p>
            </div>
            <div class="text-center row row-cols-3 m-3">
                <div class="text-center">
                    <h3>7.4%</h3>
                    <div class="body-medium-bold">
                        Property Return Rate
                    </div>
                </div>
                <div class="text-center">
                    <h3>3.586</h3>
                    <div class="body-medium-bold">
                        Property in Sell & Rent
                    </div>
                </div>
                <div class="text-center">
                    <h3>2.540</h3>
                    <div class="body-medium-bold">
                        Daily Completed Transactions
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
