@extends('layouts/layoutAdmin')

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
                    @for($i=0; $i<15;$i++)
                    <tr>
                        <td class="body-medium-medium">
                            <b>PT. Teknologi Maju Jaya</b>
                        </td>

                        <td>Jakarta, Jalan Hamengkubuwono No 15</td>
                        <td>Teknologi, Bangunan</td>
                        <td>
                            <button class="btn btn-danger">Block</button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection

