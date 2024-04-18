@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/payments/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>


        <div class="card my-1">
            <div class="card-header">
                Payments List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Order Code</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($payments as $payment)
                        <tr>
                            <td>
                                <h5>{{ $payment->id }}</h5>
                            </td>
                            <td>
                                <h4>{{ $payment->order_id }}</h4>
                            </td>
                            <td>{{ $payment->total_amount }}</td>
                            <td>{{ $payment->status }}</td>
                            <td>{{ $payment->date }}</td>

                            <td>
                                <form action="/payments/{{ $payment->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')
                                    <a href="/payments/{{ $payment->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info alert-sm my-2">
                            <p>No Data</p>
                        </div>
                    @endforelse
                </table>

            </div>
        </div>


    </div>
@endsection
