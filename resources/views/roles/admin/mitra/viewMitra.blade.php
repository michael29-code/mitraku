@extends('layouts.layoutAdmin')

@section('isViewMitraActive', 'active')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="p-4">
                <h1 class="h2">View Mitra</h1>
                <form method="GET" action="{{ route('mitra-search-admin') }}" class="d-flex flex-row mb-3" required>
                    <div class="input-group">
                        <div class="border border-end-0 input-group-text bg-transparent">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="text" class="form-control border border-start-0"
                            aria-label="Text input with checkbox" placeholder="search mitra" name="search">
                    </div>
                    <button class="btn btn-sm btn-primary" type="submit">Search</button>
                </form>

                <div class="table-user">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Overview</th>
                            <th>Year</th>
                            <th>Website</th>
                            <th>Category</th>
                            <th>Status</th> <!-- Add new column header -->
                            <th>Block / Unblock</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse ($mitras as $mitra)
                            {{ dd($mitra) }}
                            <tr>
                                <td class="body-medium-bold">{{ $mitra->mitraName }}</td>
                                <td class="body-medium-medium">{{ $mitra->mitraOverview }}</td>
                                <td class="body-medium-medium">{{ $mitra->mitraYear }}</td>
                                <td class="body-medium-medium">{{ $mitra->mitraWebsite }}</td>
                                <td class="body-medium-medium">{{ $mitra->mitraCategory }}</td>
                                <td class="body-medium-medium">{{ $mitra->status }}</td>
                                <td>
                                    <form action="{{ route('toggle-blocked-mitra', $mitra->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-{{ $mitra->isBlocked ? 'danger' : 'primary' }}">
                                            {{ $mitra->isBlocked ? 'Unblock' : 'Block' }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No Mitra Found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
