@extends('layouts/layout')
@section('title', "Checkout Page")

@section('content')
    {{-- {{ dd(session()->all()) }} --}}

    <div class="container my-5 full-height m-auto d-flex w-100 justify-content-start align-items-center flex-column">
        <div class="row w-100 d-flex justify-content-center">
            <div class="col-md-6 payment-form my-5">
                <h1>Transaction Details</h1>
                @php
                    $user = \App\Models\User::find(session()->get('transaction')['user_id']);
                    $advertisement = \App\Models\Advertisement::find(session()->get('transaction')['advertise_id']);

                @endphp
                <p><strong>User:</strong> {{ $user->username }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Address:</strong> {{ $user->address }}</p>
                <p><strong>Advertise</strong> {{ $advertisement->title }}</p>
                <p><strong>Gross Amount:</strong> ${{ $advertisement->price }}</p>
                <p><strong>Description</strong> {{ $advertisement->description }}</p>
                <p><strong>Period</strong> {{ $advertisement->period }} Month</p>
                <p><strong>Start At</strong> {{ session()->get('transaction')['starts_at'] }}</p>
                <p><strong>End At</strong> {{ session()->get('transaction')['ends_at'] }}</p>
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

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    {{-- <script type="text/javascript">
        document.getElementById('pay-button').addEventListener('click', handlePay);

        function handlePay() {
            // Disable the button to prevent multiple attempts
            // document.getElementById('pay-button').disabled = true;
            // document.getElementById('pay-button').classList.add('disabled-button');

            // Midtrans Snap payment process
            snap.pay('<?= session()->get('transaction')['snap_token'] ?>', {
                onSuccess: function(result) {

                    $transaction = \App\ Models\ Transaction::create([
                        'user_id' => session() - > get('transaction')['user_id'],
                        'advertise_id' => session() - > get('transaction')['advertise_id'],
                        'gross_amount' => session() - > get('transaction')['gross_amount'],
                        'starts_at' => session() - > get('transaction')['starts_at'],
                        'ends_at' => session() - > get('transaction')['ends_at'],
                        'status' => 'active',
                    ]);
                    session() - > forget('transactions');

                    window.location.href = '{{ route('checkout-success') }}';
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
    </script> --}}
    <script type="text/javascript">
        document.getElementById('pay-button').addEventListener('click', handlePay);

        function handlePay() {
            // Disable the button to prevent multiple attempts
            document.getElementById('pay-button').disabled = true;
            document.getElementById('pay-button').classList.add('disabled-button');

            // Midtrans Snap payment process
            snap.pay('{{ session()->get('transaction')['snap_token'] }}', {
                onSuccess: function(result) {
                    // Make an AJAX request to store the transaction after successful payment
                    fetch('{{ route('transaction.store') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                user_id: '{{ session()->get('transaction')['user_id'] }}',
                                advertise_id: '{{ session()->get('transaction')['advertise_id'] }}',
                                gross_amount: '{{ session()->get('transaction')['gross_amount'] }}',
                                starts_at: '{{ session()->get('transaction')['starts_at'] }}',
                                ends_at: '{{ session()->get('transaction')['ends_at'] }}',
                                status: 'active',
                                transaction_result: result
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                sessionStorage.removeItem('transactions');
                                window.location.href = '{{ route('checkout-success') }}';
                            } else {
                                // Handle error
                                alert('Transaction could not be saved. Please contact support.');
                                document.getElementById('pay-button').disabled = false;
                                document.getElementById('pay-button').classList.remove('disabled-button');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            document.getElementById('pay-button').disabled = false;
                            document.getElementById('pay-button').classList.remove('disabled-button');
                        });
                },
                onPending: function(result) {
                    // Optional handling for pending payments
                    console.log('Pending:', result);
                },
                onError: function(result) {
                    // Optional handling for errors
                    console.log('Error:', result);
                    alert('Payment failed. Please try again.');
                    document.getElementById('pay-button').disabled = false;
                    document.getElementById('pay-button').classList.remove('disabled-button');
                }
            });
        }
    </script>
@endsection
