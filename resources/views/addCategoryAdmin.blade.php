@extends('layouts.layoutAdmin')

@section('content')
    <div class="container my-5">
        <div class="row shadow bg-body-tertiary rounded">
            <div class="col">
                <div class="card border border-0">
                    <div class="card-body py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h4>Add Category</h4>
                                    <br>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3">
                                <input class="form-control me-4 rounded-pill" type="text" placeholder="Category's Name">
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
@endsection
