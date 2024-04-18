@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/currencies/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>


        <div class="card my-1">
            <div class="card-header">
                Currency List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Rate</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($currencies as $currency)
                        <tr>
                            <td>
                                <h5>{{ $currency->name }} @if ($currency->unicode)
                                        ({{ $currency->unicode }})
                                    @endif
                                </h5>
                            </td>
                            <td>
                                <b>{{ $currency->code }}</b>
                            </td>
                            <td>
                                <h6>
                                    {{ number_format($currency->rate, 2, '.', ',') }}
                                </h6>
                            </td>
                            <td>
                                <form action="/currencies/{{ $currency->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')
                                    <a href="/currencies/{{ $currency->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info alert-sm my-2">
                            <p>No currencies, Add currencies by pressing the green button</p>
                        </div>
                    @endforelse
                </table>

            </div>
        </div>


    </div>
@endsection
