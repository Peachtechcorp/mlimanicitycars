@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Model Code</h3>
                    </div>
                    <div class="card-body">

                        <form action="/model_codes/{{ $modelCode->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="modeli_id" class="control-label">Choose brand</label>
                                    <select name="modeli_id" class="form-control @error('modeli_id') is-invalid @enderror">
                                        <option value="">Choose...</option>
                                        @foreach ($models as $model)
                                            <option value="{{ $model->id }}"
                                                {{ $modelCode->modeli_id == $model->id ? 'selected' : '' }}>
                                                {{ $model->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('modeli_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name" class="control-label">Model code name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $modelCode->name }}">
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
