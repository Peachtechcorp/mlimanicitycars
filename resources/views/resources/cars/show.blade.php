@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        {{ $car->brand->name }} {{ $car->modeli->name }}
                    </div>
                    <div class="card-body">
                        <div id="car_pictures_slider" class="owl-carousel owl-theme my-2">
                            @foreach ($car->car_pictures as $picture)
                                <div
                                    style="background-image:url('{{ $picture->link }}');background-size:cover;background-repeat:no-repeat; background-position:center; height:150px; width:100%;">
                                    <form action="/cars/car_pictures/{{ $picture->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger m-2 border-circle"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex">
                            <img src="{{ $car->brand->logo }}" class="mr-2" alt="" height="45px">
                            <div>
                                <h5>{{ number_format($car->price, 2, '.', ' ') }} {{ $car->currency->code }}</h5>
                                <span>{{ $car->drive_unit->name }} drive {{ $car->body->name }}, {{ $car->fuel->name }} -
                                    {{ $car->transmission->name }} </span> <br>
                                <strong>Steering Wheel: </strong> <span>{{ $car->wheel->name }}</span>
                                <div class="rounded-circle border border-primary mb-2"
                                    style="height:20px;width:20px;background:#{{ $car->color->code }}"></div>
                            </div>
                        </div>
                        <div>

                            <table class="table table-bordered">
                                <tr>
                                    <td colspan="5">
                                        <form method="POST" action="{{ route('trackingInv.submit') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $car->tracking_status_id }}"
                                                name="from_status_id" />
                                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" />
                                            <input type="hidden" value="{{ $car->id }}" name="car_id" />
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Select
                                                    Status</label>
                                                <select class="form-select" name="to_status_id"
                                                    aria-label="Default select example">
                                                    @foreach ($trackingStatuses as $trackingStatus)
                                                        <option value="{{ $trackingStatus->id }}"
                                                            {{ $car->tracking_status_id == $trackingStatus->id ? 'selected' : '' }}>
                                                            {{ $trackingStatus->status }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Comment</label>
                                                <textarea class="form-control" name="remarks" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit"
                                                    class="btn btn-sm btn-success rounded form-control mr-2"><i
                                                        class="fas fa-save"></i></button>
                                            </div>
                                        </form>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Ref No: {{ $car->ref_no }}</td>
                                    <td>Chassis: {{ $car->chassis }}</td>
                                    <td>Class: {{ $car->class }}</td>
                                    <td>Millage: {{ $car->millage }}</td>
                                    <td>Engine: {{ $car->engine_cc }} cc</td>
                                </tr>
                                <tr>
                                    <td>Reg year: {{ $car->registration_year }}</td>
                                    <td>Manufacture: {{ $car->Manufacture_year }}</td>
                                    <td>Seats: {{ $car->seats }}</td>
                                    <td>Doors: {{ $car->doors }}</td>
                                    <td>Dimension: {{ $car->dimension }}</td>
                                </tr>
                                <tr>
                                    <td>Meter Cubic: {{ $car->meter_cubic }}</td>
                                    <td>Weight: {{ $car->weight }}</td>
                                    <td>Imported From: {{ $car->imported_from }}</td>
                                    <td>Customs Valuation: {{ $car->customs_valuation }}</td>
                                    <td>First User: {{ $car->first_user }}</td>
                                </tr>
                                <tr>
                                    <td>First Seller: {{ $car->first_seller }}</td>
                                    <td>Currency: {{ $car->currency->name }}</td>
                                    <td>Price: {{ $car->price }} {{ $car->currency->code }}</td>
                                    <td>Video: {{ $car->video }}</td>
                                    <td>Seller Comment <br> {{ $car->seller_comment }}</td>
                                </tr>


                            </table>
                        </div>


                        <form action="/cars/{{ $car->id }}" method="post" class="ml-auto">
                            @csrf
                            @method('delete')
                            <div class="d-flex mt-2">
                                <a href="/cars/{{ $car->id }}/edit"
                                    class="btn btn-sm btn-info rounded form-control mr-2"><i class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-sm btn-danger rounded form-control"><i
                                        class="fas fa-trash-alt"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
