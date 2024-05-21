@extends('layouts.layout')

@section('title', 'WELCOME PAGE :DDDDDD')
@section('isHomeActive', 'active')

@section('content')

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#table" />
                    </svg>
                    Orders
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#grid" />
                    </svg>
                    Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#people-circle" />
                    </svg>
                    Customers
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                    class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>

    {{-- <div class="test-black-border">
        AAAAAAA
    </div> --}}
    {{-- <h1>H1: &emsp; Lorem ipsum dolor sit amet consectetur </h1>
    <h2>H2: &emsp; Lorem ipsum dolor sit amet consectetur </h2>
    <h3>H3: &emsp; Lorem ipsum dolor sit amet consectetur </h3>
    <h4>H4: &emsp; Lorem ipsum dolor sit amet consectetur </h4>
    <h5>H5: &emsp; Lorem ipsum dolor sit amet consectetur </h5>
    <h6>H6: &emsp; Lorem ipsum dolor sit amet consectetur </h6>
    <div class="body-large-bold">body-large-bold: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="body-large-medium">body-large-medium: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="body-medium-bold">body-medium-bold: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="body-medium-medium">body-medium-medium: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="body-small-bold">body-small-bold: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="body-small-small">body-small-small: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="blue">blue: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="black">black: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="white-navbar">white-navbar: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="white-background">white-background: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="darkkkk-blue-banget">darkkkk-blue-banget: &emsp; Lorem ipsum dolor sit amet consectetur </div>
    <div class="darkkkk-blue">darkkkk-blue: &emsp; Lorem ipsum dolor sit amet consectetur </div> --}}



@endsection
