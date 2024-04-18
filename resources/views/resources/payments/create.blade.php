@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Payment</h3>
                    </div>
                    <div class="card-body">

                        <form action="/payments/store" method="POST" enctype="multipart/form-data">

                            @csrf


                            <input type="hidden" name="create_by" value={{ auth()->user()->id }} />
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Date Due</label>
                                    <input type="date" class="form-control" name="date" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Select Order</label>
                                    <select class="form-control" name="order_id">
                                        @foreach ($orders as $order)
                                            <option value={{ $order->id }}>{{ $order->order_code }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Payment Method</label>
                                    <select class="form-control" name="payment_method_id">
                                        <option> Select Payment Method</option>
                                        @foreach ($paymentMethods as $paymentMethod)
                                            <option value={{ $paymentMethod->id }}>{{ $paymentMethod->name }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Amount</label>
                                    <input type="number" name="total_amount"
                                        class="form-control @error('total_amount') is-invalid @enderror"
                                        value="{{ old('total_amount') }}">

                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Comment</label>
                                    <textarea name="references" class="form-control" cols="20" rows="10"></textarea>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
