@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center position-relative">
            <a href="{{ route('profile-mitra') }}" class="text-dark position-absolute start-0">
                <i class="fa-solid fa-arrow-left mx-3 fa-2x"></i>
            </a>
            <h3 class="text-center p-3 m-0">Edit Profile Mitra</h3>
        </div>
        <form action="{{ route('update-profile-mitra') }}" method="POST">
            @csrf
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="mitraName" class="form-label"><b>Mitra Name</b></label>
                    <div class="card">
                        <div id="mitraName" class="form-control-plaintext ms-2">Pt. Maju Jaya</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="mitraWebsite" class="form-label"><b>Mitra Website</b></label>
                    <input type="text" id="mitraWebsite" name="mitraWebsite" class="form-control" value="www.majujaya.com">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="establishmentYear" class="form-label"><b>Establishment Year</b></label>
                    <div class="card ">
                        <div id="establishmentYear" class="form-control-plaintext ms-2">2006</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="mitraCategory" class="form-label"><b>Mitra Category</b></label>
                    <input type="text" id="mitraCategory" name="mitraCategory" class="form-control" value="Makanan">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraOverview" class="form-label"><b>Mitra Overview (15-25 words)</b></label>
                    <textarea id="mitraOverview" name="mitraOverview" class="form-control" rows="3">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</textarea>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="contactName" class="form-label"><b>Contact Name</b></label>
                    <input type="text" id="contactName" name="contactName" class="form-control" value="John Doe">
                </div>
                <div class="col-5">
                    <label for="contactPhoneNumber" class="form-label"><b>Contact Phone Number</b></label>
                    <input type="text" id="contactPhoneNumber" name="contactPhoneNumber" class="form-control" value="123-456-7890">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="contactEmail" class="form-label"><b>Contact Email</b></label>
                    <input type="email" id="contactEmail" name="contactEmail" class="form-control" value="example@gmail.com">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraDetails" class="form-label"><b>Mitra Details (20-40 words)</b></label>
                    <textarea id="mitraDetails" name="mitraDetails" class="form-control" rows="3">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</textarea>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraAddress" class="form-label"><b>Mitra Address</b></label>
                    <textarea id="mitraAddress" name="mitraAddress" class="form-control" rows="2">1234 Main St, City, Country</textarea>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraLocation" class="form-label"><b>Mitra Location</b></label>
                    <input type="text" id="mitraLocation" name="mitraLocation" class="form-control" value="images/mapLocation.png">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraImage" class="form-label"><b>Mitra Image</b></label>
                    <input type="file" id="mitraImage" name="mitraImage" class="form-control">
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10 d-flex justify-content-between">
                    <div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url('/profile-mitra') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
