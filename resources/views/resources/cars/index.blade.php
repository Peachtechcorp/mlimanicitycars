@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">

            <a href="/cars/create" class="btn btn-sm btn-success rounded ml-auto"><i class="fas fa-plus"></i> Add</a>
        </div>
        <div class="d-flex flex-column">
            @forelse ($cars as $car)
                <div class="card my-1">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column justify-content-center mx-2">
                                <div class="d-flex">
                                    <img src="{{ $car->car_pictures->count() ? $car->car_pictures[0]->link : '3' }} "
                                        alt="" width="100px" />
                                    <div class="mx-2">
                                        <img src="{{ $car->brand->logo }}" alt="" height="14px">
                                        <h6>{{ $car->brand->name }}</h6>
                                        <h5>{{ $car->modeli->name }}</h5>

                                    </div>
                                </div>
                                <small>Available Cars: 9</small>
                            </div>
                            <form action="/cars/{{ $car->id }}" method="post" class="ml-auto">
                                @csrf
                                @method('delete')
                                <a href="/cars/{{ $car->id }}" class="btn btn-sm btn-primary rounded"><i
                                        class="fas fa-eye"></i></a>
                                <a href="/cars/{{ $car->id }}/edit" class="btn btn-sm btn-info rounded"><i
                                        class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-sm btn-danger rounded"><i
                                        class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info alert-sm my-2">
                    <p>No cars, Add cars by pressing the green button</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
