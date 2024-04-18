@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/drive_units/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>


        <div class="card my-1">
            <div class="card-header">
                Driver Unit List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Available Cars</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($drive_units as $drive_unit)
                        <tr>
                            <td>
                                <h5>{{ $drive_unit->name }}</h5>
                            </td>
                            <td> <small> {{ $drive_unit->cars()->count() }}</small></td>
                            <td>
                                <form action="/drive_units/{{ $drive_unit->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')
                                    <a href="/drive_units/{{ $drive_unit->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info alert-sm my-2">
                            <p>No drive units, Add drive units by pressing the green button</p>
                        </div>
                    @endforelse
                </table>



            </div>
        </div>


    </div>
@endsection
