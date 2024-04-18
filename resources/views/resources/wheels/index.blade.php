@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/wheels/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>
        <div class="d-flex flex-column">
            <div class="card my-1">
                <div class="card-body">

                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Available Cars</th>
                            <th>Action</th>

                        </tr>
                        @forelse ($wheels as $wheel)
                            <tr>
                                <td>
                                    <h5>{{ $wheel->name }}</h5>
                                </td>
                                <td> <small>{{ $wheel->cars()->count() }}</small></td>
                                <td>
                                    <form action="/wheels/{{ $wheel->id }}" method="post" class="ml-auto">
                                        @csrf
                                        @method('delete')
                                        <a href="/wheels/{{ $wheel->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                                class="fas fa-edit"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-info alert-sm my-2">
                                <p>No wheels, Add wheels by pressing the green button</p>
                            </div>
                        @endforelse

                    </table>




                </div>
            </div>

        </div>
    </div>
@endsection
