@extends('layouts.layout')

@section('isPengajuanActive', 'active')

@section('content')
    <div class="container mb-5 full-height m-auto d-flex w-100 justify-content-start align-items-center flex-column">
        <div class="row my-5">
            <div class="col text-center">
                <h2>Form Pengajuan Penawaran</h2>
            </div>
        </div>
        <div class="row w-100">
            <div class="col">
                <form action="/add-pengajuan" method="post">
                    @csrf
                    <div class="row w-100">
                        <div class="col-6">
                            <p><b>Name</b></p>
                            <input type="text" name="user_id" value="{{ auth()->user()->id }}" class="d-none">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback m-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <p><b>Address</b></p>
                            <input type="text" class="form-control  @error('address') is-invalid @enderror"
                                name="address" value="{{ old('address') }}">
                            @error('address')
                                <div class="invalid-feedback m-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    <p><b>Category (Penawaran/Perjanjian)</b></p>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <select class="form-select @error('kategori') is-invalid @enderror"
                                                aria-label="Default select example" name="kategori">
                                                <option value="">Open this select menu</option>
                                                <option value="Penawaran Produk"
                                                    {{ old('kategori') == 'Penawaran Produk' ? 'selected' : '' }}>
                                                    Penawaran Produk</option>
                                                <option value="Penawaran Jasa"
                                                    {{ old('kategori') == 'Penawaran Jasa' ? 'selected' : '' }}>
                                                    Penawaran Jasa</option>
                                                <option value="Perjanjian Kerjasama"
                                                    {{ old('kategori') == 'Perjanjian Kerjasama' ? 'selected' : '' }}>
                                                    Perjanjian Kerjasama</option>
                                                <option value="Kontrak Pekerjaan"
                                                    {{ old('kategori') == 'Kontrak Pekerjaan' ? 'selected' : '' }}>
                                                    Kontrak Pekerjaan</option>
                                                <option value="Perjanjian Sewa"
                                                    {{ old('kategori') == 'Perjanjian Sewa' ? 'selected' : '' }}>
                                                    Perjanjian Sewa</option>
                                                <option value="Perjanjian Lisensi"
                                                    {{ old('kategori') == 'Perjanjian Lisensi' ? 'selected' : '' }}>
                                                    Perjanjian Lisensi</option>
                                                <option value="Penawaran Proyek"
                                                    {{ old('kategori') == 'Penawaran Proyek' ? 'selected' : '' }}>
                                                    Penawaran Proyek</option>
                                                <option value="Perjanjian Distribusi"
                                                    {{ old('kategori') == 'Perjanjian Distribusi' ? 'selected' : '' }}>
                                                    Perjanjian Distribusi</option>
                                                <option value="Perjanjian Investasi"
                                                    {{ old('kategori') == 'Perjanjian Investasi' ? 'selected' : '' }}>
                                                    Perjanjian Investasi</option>
                                                <option value="MOU" {{ old('kategori') == 'MOU' ? 'selected' : '' }}>MOU
                                                    (Memorandum of Understanding)</option>
                                            </select>
                                            @error('address')
                                                <div class="invalid-feedback m-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    <p><b>Contact Number</b></p>
                                    <div class="row">
                                        <div class="col">
                                            <input type="number"
                                                class="form-control @error('contact_number') is-invalid @enderror"
                                                value="{{ old('contact_number') }}" name="contact_number">
                                            @error('contact_number')
                                                <div class="invalid-feedback m-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    <p><b>Mitra Details (Mitra Anda)</b></p>
                                    <div class="row">
                                        <div class="col">
                                            <textarea class="form-control @error('mitra_details') is-invalid @enderror" placeholder="" id="floatingTextarea2"
                                                style="height: 100px" name="mitra_details">{{ old('mitra_details') }}</textarea>
                                            @error('mitra_details')
                                                <div class="invalid-feedback m-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    <p><b>Start Time</b></p>
                                    <div class="row">
                                        <div class="col">
                                            <input type="date"
                                                class="form-control @error('start_time') is-invalid @enderror"
                                                value="{{ old('start_time') }}" name="start_time">
                                            @error('start_time')
                                                <div class="invalid-feedback m-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    <p><b>Duration (Month)</b></p>
                                    <div class="row">
                                        <div class="col">
                                            <input type="number"
                                                class="form-control @error('duration') is-invalid @enderror"
                                                min="0"value="{{ old('duration') }}" max="12" name="duration">
                                            @error('duration')
                                                <div class="invalid-feedback m-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col d-flex justify-content-end align-items-end">
                            <button type="submit" class="btn btn-primary w-25">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
