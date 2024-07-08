@extends('layouts/layoutAdmin')

@section('content')
    <div class="col-lg-9">
        <div class="p-4">
            <h1 class="h2">View User</h1>
            <form method="GET" action="{{ route('users-index') }}" class="d-flex flex-row mb-3">
                <input class="form-control me-4 rounded-pill" type="text" name="search" placeholder="Search User" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
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
                            <td class="body-medium-bold">{{ $user->name }}</td>
                            <td class="body-medium-medium">{{ $user->status }}</td>
                            <td class="body-medium-medium">{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('users-toggleBlock', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-{{ $user->status == 'Active' ? 'danger' : 'success' }}">
                                        {{ $user->status == 'Active' ? 'Block' : 'Unblock' }}
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
@endsection