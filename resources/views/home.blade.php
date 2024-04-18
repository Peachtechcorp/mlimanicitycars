@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="row p-3">
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Manage Wheels
                            </div>
                            <div class="card-body">
                                <a href="/wheels" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Payments
                            </div>
                            <div class="card-body">
                                <a href="/payments" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Sell Cars
                            </div>
                            <div class="card-body">
                                <a href="/cars" class="href btn btn-lg btn-secondary form-control my-1">View</a>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Manage Brands
                            </div>
                            <div class="card-body">
                                <a href="/brands" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Manage Models
                            </div>
                            <div class="card-body">
                                <a href="/modelis" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Manage Bodies
                            </div>
                            <div class="card-body">
                                <a href="/bodies" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="row p-3">
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Model Codes
                            </div>
                            <div class="card-body">
                                <a href="/model_codes" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Manage Fuels
                            </div>
                            <div class="card-body">
                                <a href="/fuels" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Transmission
                            </div>
                            <div class="card-body">
                                <a href="/transmissions" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Manage Wheels
                            </div>
                            <div class="card-body">
                                <a href="/wheels" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Drive Units
                            </div>
                            <div class="card-body">
                                <a href="/drive_units" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Manage Colors
                            </div>
                            <div class="card-body">
                                <a href="/colors" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Currencies
                            </div>
                            <div class="card-body">
                                <a href="/currencies" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Manage Addons
                            </div>
                            <div class="card-body">
                                <a href="/addons" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Sale Categories
                            </div>
                            <div class="card-body">
                                <a href="/sale_categories" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                orders
                            </div>
                            <div class="card-body">
                                <a href="/orders" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                PaymentMethod
                            </div>
                            <div class="card-body">
                                <a href="/paymentMethods" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Tracking Status
                            </div>
                            <div class="card-body">
                                <a href="/trackings" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Tracking logs
                            </div>
                            <div class="card-body">
                                <a href="/trackingLogs" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-header">
                                Payments
                            </div>
                            <div class="card-body">
                                <a href="/payments" class="href btn btn-lg btn-secondary form-control my-1">View</a>
                            </div>
                        </div>

                    </div>

                </div>














            </div>
        </div>
    </div>
@endsection
