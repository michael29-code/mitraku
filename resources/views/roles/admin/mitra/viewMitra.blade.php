@extends('layouts.layoutAdmin')

@section('isViewMitraActive', 'active')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
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
                            aria-label="Text input with checkbox" placeholder="Search Mitra by Name" name="search">
                    </div>
                    <button class="btn btn-sm btn-primary" type="submit">Search</button>
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
