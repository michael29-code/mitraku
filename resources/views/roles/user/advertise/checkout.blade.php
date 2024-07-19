@extends('layouts/layout')

@section('content')
    <div class="container my-5 full-height m-auto d-flex w-100 justify-content-start align-items-center flex-column">
        <div class="row w-100 d-flex justify-content-center">
            <div class="col-md-6 payment-form my-5">
                <h1>Transaction Details</h1>

                <p><strong>User ID:</strong> {{ $transaction->user_id }}</p>
                <p><strong>Advertise ID:</strong> {{ $transaction->advertise_id }}</p>
                <p><strong>Gross Amount:</strong> {{ $transaction->gross_amount }}</p>
                <p><strong>Status:</strong> {{ $transaction->status }}</p>
                <p><strong>Created At:</strong> {{ $transaction->created_at }}</p>
                <p><strong>Updated At:</strong> {{ $transaction->updated_at }}</p>
                <button id="pay-button" class="btn btn-primary w-100">Pay!</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('', {
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
    </script> --}}
    {{-- <script type="text/javascript">
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
    </script> --}}

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').addEventListener('click', handlePay);

        function handlePay() {
            // Disable the button to prevent multiple attempts
            // document.getElementById('pay-button').disabled = true;
            // document.getElementById('pay-button').classList.add('disabled-button');

            // Midtrans Snap payment process
            snap.pay('<?= $transaction->snap_token ?>', {
                onSuccess: function(result) {
                    window.location.href = '{{ route('checkout-success', $transaction->id) }}';
                },
                // onPending: function(result) {
                //     document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                // },
                // onError: function(result) {
                //     document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                //     // Re-enable the button if payment fails
                //     document.getElementById('pay-button').disabled = false;
                //     document.getElementById('pay-button').classList.remove('disabled-button');
                // }
            });
        }
    </script>
@endsection
