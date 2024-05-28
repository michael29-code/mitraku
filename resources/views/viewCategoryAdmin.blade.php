@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h4>View Category</h4>
                                </div>
                            </div>
                                <div class="col">
                                    <div class="card border border-0">
                                        <div class="card-body">
                                            @foreach ($data as $item)
                                                <div class="row">
                                                    <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                                        {{ $item->jenisKategori }}
                                                    </div>
                                                </div>
                                            @endforeach

                                            {{-- <div class="row">
                                                <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                                    Restoran & Makanan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mx-5 my-2 py-2">
                                                    Kesehatan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                                    Pendidikan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                                    Teknologi dan Software
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                                    Manajemen Properti
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                                    Desain
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                                    Pertanian & Perkebunan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                                                    Tekstil
                                                </div>
                                            </div> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
