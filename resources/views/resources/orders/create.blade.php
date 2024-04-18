@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Order</h3>
                    </div>
                    <div class="card-body">

                        <form action="/orders" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="date" value={{ date('Y-m-d') }} />
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Select Customer</label>
                                    <select name="customer_id" class="form-control">
                                        <option value="">Select customer</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ old('customer_id') == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}</option>
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
                                    <label class="control-label">Select Car</label>
                                    <select name="car_id" class="form-control">
                                        <option value="">Select car</option>
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}"
                                                {{ old('car_id') == $car->id ? 'selected' : '' }}>
                                                {{ $car->code }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('logo')
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
