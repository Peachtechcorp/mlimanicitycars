@extends('layouts.web')
@section('content')
    @component('web.search.form', [
        'brands' => $brands,
        'bodies' => $bodies,
        'drive_units' => $drive_units,
        'fuels' => $fuels,
        'transmissions' => $transmissions,
        'colors' => $colors
    ])
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex">
                    <div id="toggle_filter" class="btn btn-primary"><i class="fa fa-filter"> Filter</i></div>
                    <div class="btn btn-primary ml-auto">Sort</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @forelse ($cars as $car)
                    @component('web.search.car', ['car' => $car])
                    @endcomponent
                @empty
                    <div class="text-center mt-5">
                        <i class="fas fa-exclamation fa-3x text-primary"></i>
                        <p class="lead">No cars found.</p>
                    </div>
                @endforelse
                {{ $cars->links() }}
            </div>
        </div>
    </div>
@endsection