@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Brand</h3>
                    </div>
                    <div class="card-body">

                        <form action="/brands" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Brand Name</label>
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
                                    <label for="logo" class="control-label">Brand logo</label>
                                    <input type="file" name="logo"
                                        class="form-control @error('logo') is-invalid @enderror"
                                        value="{{ old('logo') }}">

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
