@extends('layouts/layout')

@section('content')
    <div class="row-lg-10 d-flex justify-content-center">
        <div class="col-md-6 payment-form my-5">
            <h1 class="h2 mb-4">Confirm Payment</h1>
            <form action="/pay/store" method="post">
                @csrf
                <div class="row" style="">
                    <div class="col-md-6 full-name mb-3">
                        <label for="full-name" class="form-label">Username</label>
                        <input type="text" class="form-control d-none" placeholder="Name" name='user_id'
                            value="{{ Auth::user()->id }}" name="user_id">
                        <input type="text" class="form-control" placeholder="Name" name='username'
                            value="{{ $user[0]->username }}">
                    </div>
                    <div class="col-md-6 full-name mb-3">
                        <label for="full-name" class="form-label">email</label>
                        <input type="text" class="form-control" placeholder="Name" name='email'
                            value="{{ $user[0]->email }}" name="email">
                    </div>

                    <div class="col-md-6 country mb-4">
                        <label for="advertise" class="form-label">Advertisment</label>
                        <select id="advertise" class="form-control" name="advertise_id">
                            <option value="">Select</option>
                            <option value="{{ $selected[0]->id }}" selected>{{ $selected[0]->title }}</option>
                            {{-- @foreach ($advertisements as $item)
                                <option value="{{ $item->id }}">{{ $item->title }} | {{ $item->price }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div class="col-md-6 postalCode mb-4">
                        <label for="postalCode" class="form-label">Gross Amount</label>
                        <input type="text" class="form-control" name="gross_amount" id="postalCode"
                            value="{{ $selected[0]->price }}">
                    </div>

                    <div class="col-12">
                        <button id="pay-button" type="submit" class="btn btn-primary w-100">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
