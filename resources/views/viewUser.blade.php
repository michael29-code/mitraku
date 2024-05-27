@extends('layouts/layoutAdmin')

@section('content')
    <div class="col-lg-9">
        <div class="p-4">
            <h1 class="h2">View User</h1>
            <div class="d-flex flex-row mb-3">
                <input class="form-control me-4 rounded-pill" type="text" placeholder="Search User">
                <button class="btn btn-primary" type="button">Search</button>
            </div>

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
                        @for($i=0; $i<20; $i++)
                        <tr>
                            <td class="body-medium-bold">Caroline Natalia Amran</td>
                            <td class="body-medium-medium">Active</td>
                            <td class="body-medium-medium">carolinenataliamran97@gmail.com</td>
                            <td>
                                <button class="btn btn-danger">Block</button>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection