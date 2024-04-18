@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/bodies/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>


        <div class="card my-1">
            <div class="card-header">
                Car Body List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Available Cars</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($bodies as $body)
                        <tr>
                            <td><img src="{{ $body->logo }}" class="m-0" alt="" width="64px"></td>
                            <td>
                                <h5>{{ $body->name }}</h5>
                            </td>
                            <td> <small>{{ $body->cars()->count() }}</small></td>
                            <td>
                                <form action="/bodies/{{ $body->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')
                                    <a href="/bodies/{{ $body->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info alert-sm my-2">
                            <p>No body types, Add body types by pressing the green button</p>
                        </div>
                    @endforelse
                </table>

            </div>
        </div>


    </div>
@endsection
