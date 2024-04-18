@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/fuels/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>


        <div class="card my-1">
            <div class="card-header">
                Fuel List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Available Cars</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($fuels as $fuel)
                        <tr>
                            <td>
                                <h5>{{ $fuel->name }}</h5>
                            </td>
                            <td><small>{{ $fuel->cars()->count() }}</small></td>
                            <td>
                                <form action="/fuels/{{ $fuel->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')
                                    <a href="/fuels/{{ $fuel->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info alert-sm my-2">
                            <p>No fuels, Add fuels by pressing the green button</p>
                        </div>
                    @endforelse
                </table>

            </div>
        </div>


    </div>
@endsection
