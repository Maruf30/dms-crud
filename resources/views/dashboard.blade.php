@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="bg-primary text-center p-2 text-white mt-2 rounded">Dashboard</h3>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{url('/customerSearch') }}">
                                <h5 class="text-center">Customer Search</h5>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">MRP Table</h5>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">Model Table</h5>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">Total Categories</h5>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">Total Categories</h5>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">Total Categories</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection