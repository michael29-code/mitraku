@extends('layouts.layoutAdmin')

@section('content')
<div class="container my-5 p-5 h-100">
    <div class="row">
        <h1 class="h2 mb-4">Manage Advertisement</h1>

        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card-body">
                    <div class="row">
                        <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                            <a href="{{ route('view_advertisement') }}">View Advertisement</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                            <a href="{{ route('add_advertisement') }}">Add Advertisement</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mx-5 my-2 py-2 border-bottom align-middle">
                            <a href="{{ route('delete_advertisement') }}">Delete Advertisement</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mx-5 my-2 py-2 ">
                            <a href="{{ route('update_advertisement') }}">Update Advertisement</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection