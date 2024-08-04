@extends('layouts/layout')

@section('isAdvertisementActive', 'active')

@section('content')
    <div class="row justify-content-center mt-5 my-5 p-5">
        <div class="header-advertisment col-lg-5 p-4 text-center">
            <h1 class="h1">Reach millions of early adopters</h1>
            <div class="body-large my-3">
                Our advertising options will help you build traction with the most influential early adopters on the web.
                Campaigns start at just $5,000.
            </div>
            @auth
                @if (Auth::user()->level == 2)
                    <a href="{{ route('create-mitra-1') }}" class="btn btn-primary mt-3 mb-3 body-medium-bold">
                        Register Mitra
                    </a>
                @endif
            @endauth
        </div>
    </div>


    <div class="sponsor-advertisement row mt-3 d-flex justify-content-center">
        <div class="col-md-4 my-5">
            <h1 class="d-flex justify-content-center h1 mb-4">Trusted By</h1>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                @foreach ($sponsors as $sponsor)
                    <span class="border d-flex p-2 bd-highlight border-dark rounded-pill mb-2 mr-2">
                        <b class="body-medium-bold">{{ $sponsor->name }}</b>
                    </span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row justify-content-center p-5 my-5">
        <div class="find-new-customer col-lg-8 mt-5">
            <h1 class="col bold fs-1 text-center">Find new customers</h1>
            <div class="col body-large-medium text-center my-3">Advertising on Mitraku helps you grow awareness, trials and
                usage
                of your product by reaching millions of the most influential early adopters and techies around the globe.
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5 p-5">
        @foreach ($advertisements as $advertisement)
            <div class="explanation col-lg-10 mt-5">
                <div class="col d-flex justify-content-center shadow bg-body-tertiary rounded mx-auto p-3">
                    <div class="row">
                        <div class="col-9 text p-3">
                            <h1 class="body-large-bold blue mb-4 mt-2">Starting at ${{ $advertisement->price }}</h1>
                            <h1 class="h3 mb-4">{{ $advertisement->title }}</h1>
                            <div class="body-large-medium mb-3">
                                {{ $advertisement->description }}
                            </div>
                            <a href="/payment/{{ $advertisement->id }}" class="btn btn-primary">Get Started</a>
                        </div>
                        <div class="col-2 image mx-3">
                            <img class="img-thumbnail" style="max-width: 213.5px; height: 171.105px"
                                src="images/AdvertisementPage.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
