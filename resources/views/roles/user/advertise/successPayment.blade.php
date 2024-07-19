@extends('layouts/layout')

@section('content')
    <div class="container my-5 full-height m-auto d-flex w-100 justify-content-start align-items-center flex-column">
        <div class="row w-100 d-flex justify-content-center">
            <div class="col-md-6 payment-form my-5">
                <h1>Pembayaran Berhasil</h1>
                <p>Terimakasih sudah melakukan pembayaran</p>
                <a href="/transactions" class="text-decoration-none">kembali kehalaman utama</a>
            </div>
        </div>
    </div>
@endsection
