@extends('layouts/layoutAdmin')

{{-- INI SALAh, HARUSNYA DI PAGE USER --}}
@section('isHomeMitra', 'active')

@section('content')
    <div class="col-lg-9">
        <div class="p-4">
            <h1 class="h2">View Mitra</h1>
            <div class="d-flex flex-row mb-3">
                <input class="form-control me-4 rounded-pill" type="text" placeholder="Search User">
                <button class="btn btn-primary" type='button'>Search</button>
            </div>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Mitra</th>
                        <th>Lokasi</th>
                        <th>Kategori</th>
                        <th>Block / Unblock</th>
                    </tr>
                </thead>
                <tbody>
                    @if($mitra->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">No mitra available</td>
                    </tr>
                    @else
                    @foreach ($mitra as $m)
                        <tr>
                            {{-- <td>{{ $m->id }}</td> --}}
                            <td>{{ $m->namaMitra }}</td>
                            <td>{{ $m->lokasiMitra }}</td>
                            <td>{{ $m->kategoriMitra }}</td>
                            <td><button class="btn btn-danger">Block</button></td>
                        </tr> 
                    @endforeach
                @endif
                
                </tbody>
            </table>
        </div>
    </div>
@endsection
