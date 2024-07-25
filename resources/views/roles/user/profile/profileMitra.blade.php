@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2 class="text-center p-3">Profile Mitra</h2>
        <div class="row d-flex justify-content-center">
            <label class="text-center" for="Mitra Profile Picture">
                <b class="h6">
                    Mitra Profile Picture
                </b>
            </label>
            <img src="images/profileMitra.png" class="mt-2 mb-4" style="width: 30%; height: 50%;">
        </div>


        <form>
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="mitraName" class="form-label"><b>Mitra Name</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraName" class="form-control-plaintext">Pt. Maju Jaya</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="mitraWebsite" class="form-label"><b>Mitra Website</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraWebsite" class="form-control-plaintext">www.majujaya.com</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="establishmentYear" class="form-label"><b>Establishment Year</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="establishmentYear" class="form-control-plaintext">2006</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="mitraCategory" class="form-label"><b>Mitra Category</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraCategory" class="form-control-plaintext">Makanan</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraOverview" class="form-label"><b>Mitra Overview (15-25 words)</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraOverview" class="form-control-plaintext">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry...</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-5">
                    <label for="contactName" class="form-label"><b>Contact Name</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="contactName" class="form-control-plaintext">John Doe</div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="contactPhoneNumber" class="form-label"><b>Contact Phone Number</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="contactPhoneNumber" class="form-control-plaintext">123-456-7890</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="contactEmail" class="form-label"><b>Contact Email</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="contactEmail" class="form-control-plaintext">example@gmail.com</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraDetails" class="form-label"><b>Mitra Details (20-40 words)</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraDetails" class="form-control-plaintext">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry...</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <label for="mitraAddress" class="form-label"><b>Mitra Address</b></label>
                    <div class="card p-2 no-outline-card">
                        <div id="mitraAddress" class="form-control-plaintext">1234 Main St, City, Country</div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-4">
                <div class="col-10">
                    <div class="row">
                        <label for="mitraLocation" class="form-label"><b>Mitra Location</b></label>
                        <img src="images/mapLocation.png" class="img-fluid mt-2" style="width: 40%" alt="Mitra Location">
                    </div>
                </div>
            </div>
            {{-- button --}}
            <div class="d-flex justify-content-center">
                <div class=" col-10 ">
                    {{-- <a href="{{ route('edit-profile-mitra')}}" class="btn btn-primary">Edit Profile</a> --}}
                </div>
            </div>
        </form>


    </div>
@endsection
