@extends('layouts/layout')

@section('isAdvertisementActive', 'active')
@section('title', "Advertisement")

@section('content')
    <div class="row justify-content-center mt-4 my-4">
        <div class="header-advertisment col-lg-5 p-3 text-center">
            <h1 class="h1">Reach millions of early adopters</h1>
            <div class="body-large my-2">
                Our advertising options will help you build traction with the most influential early adopters on the web.
                Campaigns start at just $5,000.
            </div>
            @auth
                @if (Auth::user()->level == 2)
                    <a href="{{ route('create-mitra-1') }}" class="btn btn-primary mt-2 mb-2 body-medium-bold">
                        Register Mitra
                    </a>
                @endif
            @endauth
        </div>
    </div>

    <div class="sponsor-advertisement row mt-2 d-flex justify-content-center">
        <div class="col-md-4 my-4">
            <h1 class="d-flex justify-content-center h1 mb-3">Trusted By</h1>
            <div class="d-flex justify-content-center flex-wrap gap-2">
                <div>
                    <img src="/images/aws.png" class="img-fluid" alt="logo1" style="width: 8rem">
                </div>
                <div>
                    <img src="/images/google.jpg" class="img-fluid" alt="logo1" style="width: 5rem">
                </div>
                <div>
                    <img src="/images/microsoft.png" class="img-fluid" alt="logo1" style="width: 8rem">
                </div>
                <div>
                    <img src="/images/databricks.png" class="img-fluid" alt="logo1" style="width: 8rem">
                </div>
                <div>
                    <img src="/images/salesforce.jpg" class="img-fluid" alt="logo1" style="width: 8rem">
                </div>
                <div>
                    <img src="/images/snowflake.jpg" class="img-fluid" alt="logo1" style="width: 8rem">
                </div>
                <div>
                    <img src="/images/oracle.jpg" class="img-fluid" alt="logo1" style="width: 6rem">
                </div>
                <div>
                    <img src="/images/tableau.png" class="img-fluid" alt="logo1" style="width: 9rem">
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center p-4 my-4">
        <div class="find-new-customer col-lg-8 mt-4">
            <h1 class="col bold fs-1 text-center">Find new customers</h1>
            <div class="col body-large-medium text-center my-2">Advertising on Mitraku helps you grow awareness, trials, and
                usage
                of your product by reaching millions of the most influential early adopters and techies around the globe.
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4 p-4">
        @foreach ($advertisements as $advertisement)
            <div class="explanation col-lg-10 mt-4">
                <div class="col d-flex justify-content-center shadow bg-body-tertiary rounded mx-auto p-3">
                    <div class="row">
                        <div class="col-9 text p-3">
                            <h1 class="body-large-bold blue mb-3 mt-2">Starting at ${{ $advertisement->price }}</h1>
                            <h1 class="h3 mb-3">{{ $advertisement->title }}</h1>
                            <div class="body-large-medium mb-2">
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
