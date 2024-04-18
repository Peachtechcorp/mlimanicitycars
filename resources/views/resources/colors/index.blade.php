@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/colors/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>


        <div class="card my-1">
            <div class="card-header">
                Color List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Color Code</th>
                        <th>Name</th>
                        <th>Available Cars</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($colors as $color)
                        <tr>
                            <td>
                                <div class="border border-primary mb-2"
                                    style="height:40px;width:90px;background:#{{ $color->code }}"></div>
                            </td>
                            <td>
                                <h5>{{ $color->name }}</h5>
                            </td>
                            <td>
                                <small> {{ $color->cars()->count() }}</small>
                            </td>
                            <td>
                                <form action="/colors/{{ $color->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')
                                    <a href="/colors/{{ $color->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info alert-sm my-2">
                            <p>No colors, Add colors by pressing the green button</p>
                        </div>
                    @endforelse
                </table>


            </div>
        </div>


    </div>
@endsection
