@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/modelis/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>


        <div class="card my-1">
            <div class="card-header">
                Model List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Available Cars</th>
                        <th></th>
                    </tr>
                    @forelse ($modelis as $modeli)
                        <tr>
                            <td>
                                <h5>{{ $modeli->brand->name }}</h5>
                            </td>
                            <td>
                                <h5> {{ $modeli->name }}</h5>
                            </td>
                            <td> <small>{{ $modeli->cars()->count() }}</small></td>
                            <td>
                                <form action="/modelis/{{ $modeli->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')
                                    <a href="/modelis/{{ $modeli->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info alert-sm my-2">
                            <p>No models, Add models by pressing the green button</p>
                        </div>
                    @endforelse
                </table>

            </div>
        </div>


    </div>
@endsection
