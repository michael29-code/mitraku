@extends('layouts/layout')

@section('content')
{{-- {{ dd(Auth::user()->transactions->isEmpty()) }} --}}
    <div class="container my-5 full-height m-auto d-flex w-100 justify-content-start align-items-center flex-column">

        <div class="row w-100 d-flex justify-content-center">
            <div class="col-md-6 payment-form my-5">
                <h1>Transaction History</h1>

                @if ($transactions->isEmpty())
                    <p>No transactions found.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
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
                                    <td>{{ $transaction->user->username }}</td>
                                    <td>{{ $transaction->advertise->title }}</td>
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
        <div class="row">
            <div class="col d-flex justify-content-center"> {{-- Center the pagination links --}}
                {{ $transactions->links() }} </div>
        </div>
    </div>
@endsection
