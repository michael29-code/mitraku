@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5 p-5 h-100">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body py-5">
                        <div class="row my-3">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-1 text-end">
                                    </div>
                                    <div class="col">
                                        <h4>Update Category</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col"> </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <div class="row my-3 mx-5">
                                    <div class="col">
                                        <h6><b>Choose category's name</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3 mx-5">
                                    <div class="col">
                                        <h6><b>New category's name</b></h6>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-secondary me-md-2" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="button">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
