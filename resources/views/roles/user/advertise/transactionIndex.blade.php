@extends('layouts/layout')

@section('content')
    <div class="row-lg-10 d-flex justify-content-center">
        <div class="col-md-6 payment-form my-5">
            <h1>Transaction History</h1>

            @if ($transactions->isEmpty())
                <p>No transactions found.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Advertise ID</th>
                            <th>Gross Amount</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->user_id }}</td>
                                <td>{{ $transaction->advertise_id }}</td>
                                <td>{{ $transaction->gross_amount }}</td>
                                <td>{{ $transaction->status }}</td>
                                <td>{{ $transaction->created_at }}</td>
                                <td>{{ $transaction->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
