@extends('layouts/layoutAdmin')

@section('isViewUserActive', 'active')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="p-4">
                <h1 class="h2">View User</h1>

                <form method="GET" action="{{ route('user-search-admin') }}" class="d-flex flex-row mb-3" required>
                    <div class="input-group">
                        <div class="border border-end-0 input-group-text bg-transparent">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="text" class="form-control border border-start-0"
                            aria-label="Text input with checkbox" placeholder="search user" name="search">
                    </div>
                    <button class="btn btn-sm btn-primary" type="submit">Search</button>
                </form>

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
