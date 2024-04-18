@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Tracking Status</h3>
                    </div>
                    <div class="card-body">

                        <form action="/trackings" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Status Name</label>
                                    <input type="text" name="status"
                                        class="form-control @error('status') is-invalid @enderror"
                                        value="{{ old('status') }}">
                                </div>
                                @error('status')
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
