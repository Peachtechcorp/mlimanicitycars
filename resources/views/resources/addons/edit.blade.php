@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit addon</h3>
                    </div>
                    <div class="card-body">

                        <form action="/addons/{{ $addon->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Addon name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $addon->name }}">
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
