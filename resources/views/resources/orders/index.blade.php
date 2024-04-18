@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/orders/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>
        <div class="d-flex flex-column">

            <div class="card my-1">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>

                            <th>Customer</th>
                            <th> Car Code</th>
                            <th> Status</th>
                            <th>Date </th>
                            <th>Action</th>
                        </tr>
                        @forelse ($orders as $order)
                            <tr>

                                <td>
                                    <h5>{{ $order->users->name }}</h5>
                                </td>
                                <td> <b> {{ $order->cars->code }}</b></td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->date }}</td>
                                <td>
                                    <form action="/orders/{{ $order->id }}" method="post" class="ml-auto">
                                        @csrf
                                        @method('delete')
                                        <a href="/orders/{{ $order->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                                class="fas fa-edit"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-info alert-sm my-2">
                                <p>No Order, Add orders by pressing the green button</p>
                            </div>
                        @endforelse
                    </table>





                </div>
            </div>

        </div>
    </div>
@endsection
