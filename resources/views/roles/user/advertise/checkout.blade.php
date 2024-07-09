@extends('layouts/layout')

@section('content')
    <div class="row-lg-10 d-flex justify-content-center">
        <div class="col-md-6 payment-form my-5">
            <h1>Transaction Details</h1>

            <p><strong>User ID:</strong> {{ $transaction->user_id }}</p>
            <p><strong>Advertise ID:</strong> {{ $transaction->advertise_id }}</p>
            <p><strong>Gross Amount:</strong> {{ $transaction->gross_amount }}</p>
            <p><strong>Status:</strong> {{ $transaction->status }}</p>
            <p><strong>Created At:</strong> {{ $transaction->created_at }}</p>
            <p><strong>Updated At:</strong> {{ $transaction->updated_at }}</p>
            <button id="pay-button">Pay!</button>
            <pre><div id="result-json">JSON result will appear here after payment:<br></div></pre>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('<?= $transaction->snap_token ?>', {
                // Optional
                onSuccess: function(result) {
                    window.location.href = '{{ route('checkout-success', $transaction->id) }}';
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
@endsection
