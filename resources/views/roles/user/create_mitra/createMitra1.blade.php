@extends('layouts.layout')

@section('content') 
<form action="roles.admin.mitra.viewMitra" method="POST">
    @csrf
    <div class="container my-5 m-auto d-flex w-100 justify-content-center align-items-center flex-column">
        <div class="row w-100">
            <div class="col bg-secondary">
                {{-- <img src="..." class="img-fluid" alt="..."> --}}

            </div>
            <div class="col p-5">
                <div class="row">
                    <div class="col">
                        <h3>Daftar Mitra</h3>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100" style="width: 100%; height: 0.8rem">
                            <div class="progress-bar" style="width: 100%; height: 0.8rem"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="0" style="width: 100%; height: 0.8rem">
                            <div class="progress-bar" style="width: 100%; height: 0.8rem"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="0" style="width: 100%; height: 0.8rem">
                            <div class="progress-bar" style="width: 100%; height: 0.8rem"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>pastikan informasi anda valid</p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Nama Mitra</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="namaMitra" style="width: 400px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Alamat Mitra</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="lokasiMitra" style="width: 400px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <p><b>Kategori Mitra</b></p>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="kategoriMitra" style="width: 400px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row my-2">
                            <div class="col">
                                {{-- <button type="submit" class="btn btn-primary w-100" onclick="{{ Redirect::to('viewMitra') }}">Save</button> --}}
                                {{-- <a href="/viewMitra" class="btn btn-primary w-100">Save</a> --}}
                                <input type="submit" class="btn btn-primary w-100" name="submit" value="Save">  
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
