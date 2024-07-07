@extends('layouts.layout')

@section('content')
<div class="container my-5 mx-auto">
    <div class="row align-items-center">
        <div class="col-auto">
            <a href="/manage-blog" class="text-decoration-none d-flex align-items-center">
                <i class="fa-solid fa-arrow-left" style="font-size: 2rem;"></i>
                <span class="ms-4" style="font-size: 1.5rem;">Back</span>
            </a>
        </div>
        <div class="col text-center">
            <h2 class="mb-0">PT Teknologi Maju Jaya</h2>
            <div class="row my-5">
                <div class="col">
                    <p>PT Teknologi Maju Jaya adalah perusahaan teknologi yang fokus pada pengembangan solusi perangkat lunak untuk bisnis. </p>
                    <div class="col">
                        <h6>Since 2010 | www.teknologimajujaya.co.id</h6>
                    </div>
                    <span class="badge text-bg-primary rounded-pill" style="font-size: 1rem; padding: 0.5em 1em;">Teknologi</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5 m-auto d-flex w-100 justify-content-center align-items-center flex-column">
            <div class="row w-100">
                <div class="col bg-secondary rounded-5">
                    {{-- <img src="..." class="img-fluid" alt="..."> --}}
                </div>
                <div class="col p-5">
                    <div class="row">
                        <div class="col">
                            <h4>Contacts</h4>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-2">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                class="rounded-circle img-fluid" alt="Avatar" />
                        </div>
                        <div class="col-5">
                            <h5>David Rodloy</h5>
                            <span>Email: davidrodloy@teknologimajujaya.com</span>
                            <span>Phone no: +62 123 456 789</span>
                        </div>
                    </div>
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-1" role="group" aria-label="First button">
                            <button type="button" class="btn btn-primary">Contact</button>
                        </div>
                        <div class="btn-group me-2" role="group" aria-label="Second button">
                            <button type="button" class="btn btn-outline-primary">Send Form</button>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col">
                            <p><b>Mitra Details</b></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h4 class="mb-4">Gallery</h4>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card bg-secondary rounded-5"  style="height: 200px;">
                    
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card bg-secondary rounded-5"  style="height: 200px;">
                    
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card bg-secondary rounded-5"  style="height: 200px;">
                    
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card bg-secondary rounded-5"  style="height: 200px;">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 m-auto d-flex w-100 justify-content-center align-items-center flex-column">
            <div class="col p-5">
                <div class="row">
                    <div class="col">
                        <div class="rating">
                            <h4>Latest Ratings & Certificates</h4>
                            <p>PEFINDO Credit Rating Agency (December 2021): (id)BBB+/outlook stable
                                Fitch Rating (May 2018): BBB+ (idn)/outlook stable
                                Social Performance (Planet Rating 2014): 4-
                                Client Protection Certificate (Cerise and SPTF Team, April 2022): Certification level: Gold</p>
                        </div>
                        <div class="row">
                            <h4>Award</h4>
                            <h6>MIX Market Ranking (CGAP / World Bank)</h6>
                             <p>2009 : #1 out of 1,600 MFIs in the world
                                2008 : #1 out of 1,300 MFIs in the world
                                2007 : #25 out of 1,100 MFIs in the world</p>
                            <h6>Other</h6>
                            <p>2008 : Grameen Foundation Excellence Award
                                2008 : Unitus Inc. Achievement Award
                                2007 : Ernst & Young Finalist, Social Entrepreneur Indonesi</p>
                        </div>
                    </div>
                    <div class="col">
                          
                    </div>
                </div>
            </div>
</div>


@endsection
