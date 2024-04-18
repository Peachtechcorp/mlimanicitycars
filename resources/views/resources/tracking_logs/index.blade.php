@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">

        </div>


        <div class="card my-1">
            <div class="card-header">
                Tracking Logs List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Auth By </th>
                        <th>Car Code</th>
                        <th>Car Status From</th>
                        <th>Car Status To</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Action</th>

                    </tr>
                    @forelse ($trackingLogs as $trackingLog)
                        <tr>
                            <td>{{ $trackingLog->users->name }}</td>
                            <td>{{ $trackingLog->cars->code }}</td>
                            <td>{{ $trackingLog->carFrom->status }}</td>
                            <td>{{ $trackingLog->carTo->status }}</td>
                            <td>{{ $trackingLog->remarks }}</td>
                            <td>{{ $trackingLog->created_at->format('d M Y - H:i:s') }}</td>
                            <td>
                                <form action="trackingLogs/{{ $trackingLog->id }}" method="post" class="ml-auto">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info alert-sm my-2">
                            <p>No transmissions, Add transmissions by pressing the green button</p>
                        </div>
                        {{ $trackingLog->links() }}
                    @endforelse
                </table>


            </div>
        </div>


    </div>
@endsection
