@extends('layouts.web')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"><h4 class="text-primary">{{ $car->brand->name }} {{ $car->modeli->name }} {{ $car->body->name }} - {{ $car->manufacture_year }} </h4></div>
        </div>
    </div>
    <div class="loop_slider owl-carousel owl-theme my-2">
        @foreach ($car->car_pictures as $picture)
        <div style="background-image:url('{{ $picture->link }}');background-size:cover;background-repeat:no-repeat; background-position:center; height:200px; width:100%;">
        </div>
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            <div class="col lead">
                <div class="card border-dark">
                    <div class="card-header bg-dark"><h3 class="card-title">Specifications</h3></div>
                    <div class="card-body bg-dark">
                        <strong>Reference No: </strong> {{ $car->ref_no }}
                        <hr class="border-primary">
                        <strong>Chassis: </strong> {{ $car->chassis }}
                        <hr class="border-primary">
                        <strong>Millage: </strong> {{ $car->millage }}
                        <hr class="border-primary">
                        <strong>Engine CC: </strong> {{ $car->engine_cc }}
                        <hr class="border-primary">
                        <strong>Fuel: </strong> {{ $car->fuel->name }}
                        <hr class="border-primary">
                        <strong>Transmission: </strong> {{ $car->transmission->name }}
                        <hr class="border-primary">
                        <strong>Steering Wheel: </strong> {{ $car->wheel->name }}
                        <hr class="border-primary">
                        <strong>Color: </strong> {{ $car->color->name }}
                        <hr class="border-primary">
                        <strong>Class: </strong> {{ $car->class }}
                        <hr class="border-primary">
                        <strong>Seats: </strong> {{ $car->seats }}
                        <hr class="border-primary">
                        <strong>Doors: </strong> {{ $car->doors }}
                        <hr class="border-primary">
                        <strong>Dimensions: </strong> {{ $car->dimensions }}
                        <hr class="border-primary">
                        <strong>Meter cubic: </strong> {{ $car->meter_cubic }}
                        <hr class="border-primary">
                        <strong>Imported from: </strong> {{ $car->imported_from }}
                        <hr class="border-primary">
                        <strong>Registration Year: </strong> {{ $car->registration_year }}
                        <hr class="border-primary">
                        <strong>Manufacture Year: </strong> {{ $car->manufacture_year }}
                    </div>
                </div>
                <p>{{ $car->seller_comment }}</p>
            </div>
        </div>
    </div>
@endsection