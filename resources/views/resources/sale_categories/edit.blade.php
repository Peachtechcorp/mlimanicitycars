@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit sale category</h3>
                    </div>
                    <div class="card-body">

                        <form action="/sale_categories/{{ $saleCategory->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Sale Category name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $saleCategory->name }}">
                                </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="icon" class="control-label">Fa icon class name</label>
                                    <input type="text" name="icon"
                                        class="form-control @error('icon') is-invalid @enderror"
                                        value="{{ $saleCategory->icon }}">
                                </div>

                                @error('icon')
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
