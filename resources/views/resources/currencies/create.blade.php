@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Add currency</h3>
                    </div>
                    <div class="card-body">

                        <form action="/currencies" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">currency Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="code" class="control-label">currency code</label>
                                    <input type="text" name="code"
                                        class="form-control @error('code') is-invalid @enderror"
                                        value="{{ old('code') }}">
                                </div>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="unicode" class="control-label">currency unicode</label>
                                    <input type="text" name="unicode"
                                        class="form-control @error('unicode') is-invalid @enderror"
                                        value="{{ old('unicode') }}">
                                </div>

                                @error('unicode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="rate" class="control-label">currency rate</label>
                                    <input type="number" step="0.00000001" name="rate"
                                        class="form-control @error('rate') is-invalid @enderror"
                                        value="{{ old('rate') }}">
                                </div>

                                @error('rate')
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
