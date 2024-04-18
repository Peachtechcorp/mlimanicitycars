@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/model_codes/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>


        <div class="card my-1">
            <div class="card-header">
                Model Code List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Model</th>
                        <th>Code</th>
                        <th>Available Cars</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($model_codes as $code)
                        <tr>
                            <td>
                                <h5>{{ $code->modeli->name }}</h5>
                            </td>
                            <td>
                                <h5> {{ $code->name }}</h5>
                            </td>
                            <td> <small>0</small></td>
                            <td>
                                <form action="/model_codes/{{ $code->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')
                                    <a href="/model_codes/{{ $code->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info alert-sm my-2">
                            <p>No model codess, Add model codes by pressing the green button</p>
                        </div>
                    @endforelse
                </table>

            </div>
        </div>


    </div>
@endsection
