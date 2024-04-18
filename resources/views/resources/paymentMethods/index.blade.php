@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/paymentMethods/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>


        <div class="card my-1">
            <div class="card-header">
                Payment Method List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($paymentMethods as $paymentMethod)
                        <tr>
                            <td>
                                <h5>{{ $paymentMethod->name }}</h5>
                            </td>
                            <td>
                                <form action="/paymentMethods/{{ $paymentMethod->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')
                                    <a href="/paymentMethods/{{ $paymentMethod->id }}/edit"
                                        class="btn btn-sm btn-info rounded"><i class="fas fa-edit"></i></a>
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
