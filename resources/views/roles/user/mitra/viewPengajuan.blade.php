@extends('layouts.layout')
@section('isPengajuanActive', 'active')

@section('content')
    <div class="container my-5 full-height m-auto d-flex w-100 justify-content-center align-items-center flex-column">
        <div class="row w-100 my-5">
            <div class="col text-center">
                <h2>History Pengajuan</h2>
            </div>
        </div>
        <div class="row w-100">
            <div class="col">
                @foreach ($pengajuans as $pengajuan)
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">{{ $pengajuan->name }}</div>
                                {{ $pengajuan->kategori }} - {{ $pengajuan->start_time }}
                            </div>
                            <a href="/pengajuan/edit/{{ $pengajuan->id }}" class="btn btn-warning">Edit</a>
                            <a href="/pengajuan/pdf/{{ $pengajuan->id }}" class="btn btn-primary">Download PDF</a>
                            <form action="/pengajuan/delete/{{ $pengajuan->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger w-100" onclick="return confirm('Are You sure?')"><span
                                        data-feather="x-circle"></span> Delete</button>
                            </form>
                        </li>
                    </ol>
                @endforeach
            </div>
        </div>
    </div>
@endsection
