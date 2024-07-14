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


    <div class="row justify-content-center">
        <div class="mx-auto m-3 text-center" style="width: 50rem;">
            <h1>We make it easy for tenants and landlords.</h1>
        </div>
        <div class="mx-auto m-0 text-center" style="width: 50rem;">
            <p class="body-large-bold">Whether it's selling your current home, getting financing, or buying a new home, we
                make it easy and efficient. The best part? you'll save a bunch of money and time with our services.</p>
        </div>
        <div class="mx-auto m-3 row justify-content-center">
            <button type="button" class="btn btn-primary btn-sm" style="width:13rem;">Button</button>
        </div>
    </div>

    <div class="mx-auto m-5 row justify-content-center">
        <img src="/images/RumahNekoya.png" class="img-fluid home-picture" alt="rumah-nekoya">
    </div>

    <div class="border m-5 row justify-content-center text-center">
        <h2>Trusted by over a lot of companies.</h2>
        <div class="justify-content-center text-center row row-cols-5" style="">
            <div class="border rounded-3 m-2 p-3 col" style="width: 13rem;">Sponsor</div>
            <div class="border rounded-3 m-2 p-3 col" style="width: 13rem;">Sponsor</div>
            <div class="border rounded-3 m-2 p-3 col" style="width: 13rem;">Sponsor</div>
            <div class="border rounded-3 m-2 p-3 col" style="width: 13rem;">Sponsor</div>
            <div class="border rounded-3 m-2 p-3 col" style="width: 13rem;">Sponsor</div>
            <div class="border rounded-3 m-2 p-3 col" style="width: 13rem;">Sponsor</div>
            <div class="border rounded-3 m-2 p-3 col" style="width: 13rem;">Sponsor</div>
            <div class="border rounded-3 m-2 p-3 col" style="width: 13rem;">Sponsor</div>
            <div class="border rounded-3 m-2 p-3 col" style="width: 13rem;">Sponsor</div>
        </div>
    </div>

    <div class="text-center row row-cols-2 m-3">
        <img src="/images/Dinding.png" alt="dinding">
        <div class="align-self-center col body-medium-bold">
            <h2>Multi Curency Increase Update</h2>
            <p>Whether it's selling your current home, getting financing, or buying a new home, we make it easy and
                efficient. The best part? you'll save a bunch of money and time with our services.</p>
            <button type="button" class="btn btn-primary btn-sm">Button</button>
        </div>
    </div>

    <div class="m-5 mx-auto m-3 text-center" style="width: 50rem;">
        <h2>Benefit and Regulated</h2>
    </div>

    <div class="justify-content-center text-center row row-cols-4 m-3">
        <div class="text-center">
            <h3>Property Insurance</h3>
            <div class="body-medium-bold">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>
        <div class="text-center">
            <h3>Best Price</h3>
            <div class="body-medium-bold">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>
        <div class="text-center">
            <h3>Property Insurance</h3>
            <div class="body-medium-bold">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>
        <div class="text-center">
            <h3>Best Price</h3>
            <div class="body-medium-bold">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>
        <div class="text-center">
            <h3>Lowest Commision</h3>
            <div class="body-medium-bold">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>
        <div class="text-center">
            <h3>Overall Control</h3>
            <div class="body-medium-bold">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>
        <div class="text-center">
            <h3>Lowest Commision</h3>
            <div class="body-medium-bold">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>
        <div class="text-center">
            <h3>Overall Control</h3>
            <div class="body-medium-bold">
                We offer our customer property protection of liability coverage and insurance for their better life.
            </div>
        </div>
    </div>

    <div class="text-center row row-cols-2 m-3">
        <div class="align-self-center col body-medium-bold">
            <h2>Multi Curency Increase Update</h2>
            <p>Whether it's selling your current home, getting financing, or buying a new home, we make it easy and
                efficient. The best part? you'll save a bunch of money and time with our services.</p>
            <button type="button" class="btn btn-primary btn-sm">Button</button>
        </div>
        <img src="/images/Dinding.png" alt="dinding">
    </div>

    <div class="text-center row row-cols-2 m-3">
        <div class="col align-self-center">
            <h2>Multi Curency Increase Update</h2>
            <div class="body-medium-bold align-self-center">
                Whether it's selling your current home, getting financing, or buying a new home, we make it easy and
                efficient. The best part? you'll save a bunch of money and time with our services.
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
        <img src="/images/DenahRumah.png" alt="denah-rumah">
    </div>

@endsection
