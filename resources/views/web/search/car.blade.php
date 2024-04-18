<div class="card border-dark my-2" onclick="window.location='/car/{{ $car->id }}'">
    <div class="card-img-top">
        <div class="car_list_item_slider owl-carousel">
            @foreach ($car->car_pictures as $picture)
                <div style="background-image:url('{{ $picture->link }}'); background-size:cover; background-position:center; background-repeat:no-repeat; width:100%; height: 200px;"></div>
            @endforeach
        </div>
    </div>
    <div class="card-body bg-dark border-bottom border-primary">
        <h5 class="card-title text-primary">{{ $car->brand->name }} {{ $car->modeli->name }} {{ $car->manufacture_year }} {{ $car->body->name }}</h5>
        <p class="card-text"> {{ $car->drive_unit->name }} Drive  | {{ $car->fuel->name }} | {{ $car->transmission->name }} 
        <br><div class="border-primary d-inline-block mr-2" style="height: 12px; width:12px; border-radius:50%; background-color: #{{ $car->color->code }}"></div> {{ $car->color->name }} </p>
        <h4 class="card-title border-right border-primary pr-2 text-right">{{ number_format($car->price,0,'',' ') }} {{ $car->currency->code }}</h4>
    </div>
</div>