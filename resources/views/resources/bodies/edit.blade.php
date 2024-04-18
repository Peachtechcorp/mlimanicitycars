@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Body Type</h3>
                    </div>
                    <div class="card-body">

                        <form action="/bodies/{{ $body->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">body Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $body->name }}">

                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="logo" class="control-label">body logo</label>
                                    @if ($body->logo)
                                        <img src="{{ $body->logo }}" alt="" width="100px" class="d-block" />
                                    @else
                                        <p>No logo currently</p>
                                    @endif
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
