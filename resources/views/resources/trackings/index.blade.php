@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <a href="/trackings/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>
        <div class="d-flex flex-column">
            <div class="card my-1">
                <div class="card-body">

                    <table class="table table-bordered">
                        <tr>
                            <th>Status</th>
                            <th>Status Code</th>
                            <th>Action</th>

                        </tr>
                        @forelse ($statuses as $trackingStatus)
                            <tr>
                                <td>
                                    <h5>{{ $trackingStatus->status }}</h5>
                                </td>
                                <td>
                                    {{ $trackingStatus->status_code }}
                                <td>
                                    <form action="/trackings/{{ $trackingStatus->id }}" method="post" class="ml-auto">
                                        @csrf
                                        @method('delete')
                                        <a href="/trackings/{{ $trackingStatus->id }}/edit"
                                            class="btn btn-sm btn-info rounded"><i class="fas fa-edit"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-info alert-sm my-2">
                                <p>No status, Add status by pressing the green button</p>
                            </div>
                        @endforelse

                    </table>




                </div>
            </div>

        </div>
    </div>
@endsection
