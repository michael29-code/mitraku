@extends('layouts.layoutAdmin')

@section('isViewMitraActive', 'active')

@section('content')
    @if (session()->has('blockSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('blockSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="p-4">
                <h1 class="h2">View Mitra</h1>
                <form action="{{ route('mitra-search-admin') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Mitra by Name" name="search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </form>
                @if (isset($searchTerm))
                    <h5>Search Results for "{{ $searchTerm }}"</h5>
                @endif

                <div class="table-user">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Overview</th>
                                <th>Year</th>
                                <th>Website</th>
                                <th>Category</th>
                                <th>Block / Unblock</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($mitras as $mitra)
                                <tr>
                                    <td class="body-medium-bold">{{ $mitra->mitraName }}</td>
                                    <td class="body-medium-medium">
                                        @if ($mitra->isBlocked)
                                            Blocked
                                        @else
                                            Not Blocked
                                        @endif
                                    </td>
                                    <td class="body-medium-medium">{{ $mitra->mitraOverview }}</td>
                                    <td class="body-medium-medium">{{ $mitra->mitraYear }}</td>
                                    <td class="body-medium-medium">{{ $mitra->mitraWebsite }}</td>
                                    <td class="body-medium-medium">{{ $mitra->mitraCategory }}</td>
                                    <td>
                                        <form action="{{ route('toggle-blocked-mitra', $mitra->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn btn-{{ $mitra->isBlocked == 1 ? 'primary' : 'danger' }}">
                                                {{ $mitra->isBlocked == 1 ? 'Unblock' : 'Block' }}
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
