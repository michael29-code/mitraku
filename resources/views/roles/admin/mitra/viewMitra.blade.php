@extends('layouts/layoutAdmin')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="p-4">
                <h1 class="h2">View Admin</h1>
                <form method="GET" action="{{ route('user-search') }}" class="d-flex flex-row mb-3">
                    <input class="form-control me-4 rounded-pill" type="text" name="search" placeholder="Search User"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
                {{-- <div class="d-flex flex-row mb-3">
                <input class="form-control me-4 rounded-pill" type="text" placeholder="Search User">
                <button class="btn btn-primary" type="button">Search</button>
            </div> --}}

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
                                            <button class="btn btn-{{ $mitra->isBlocked == 0 ? 'primary' : 'danger' }}">
                                                {{ $mitra->isBlocked == 0 ? 'Unblock' : 'Block' }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No Mitra Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
