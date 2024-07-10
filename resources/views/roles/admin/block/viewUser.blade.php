@extends('layouts/layoutAdmin')

@section('isViewUserActive', 'active')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="p-4">
                <h1 class="h2">View User</h1>
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
                                <th>User</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>Block / Unblock</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td class="body-medium-bold">{{ $user->username }}</td>
                                    <td class="body-medium-medium">
                                        @if ($user->isBlocked)
                                            Blocked
                                        @else
                                            Not Blocked
                                        @endif
                                    </td>
                                    <td class="body-medium-medium">{{ $user->email }}</td>
                                    <td>
                                        <form action="{{ route('toggle-blocked-user', $user->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn btn-{{ $user->isBlocked == 0 ? 'primary' : 'danger' }}">
                                                {{ $user->isBlocked == 0 ? 'Unblock' : 'Block' }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No users found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
