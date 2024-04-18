@extends('layouts.web')
@section('content')
    @component('components.shop-single.hero')
    @endcomponent

    <div class="py-24">
        <div class="container">
            <h3 class="font-medium text-3xl py-3 capitalize font-bold">{{ $car->brand->name }} - {{ $car->modeli->name }}
            </h3>
            <div class="flex flex-sm-column flex-md-row flex-xm-column gap-5">
                <div class="w-3/5 ">
                    <div class="relative overflow-hidden">
                        <div class="gallery mb-6">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        @foreach ($car->car_pictures as $picture)
                                            <img src="{{ $picture->link }}" alt="product image">
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class=" flex items-center -mx-4">
                            <div class="w-full md:w-1/4 px-4">
                                <div class="mr-4">
                                    <i class="bi bi-fuel-pump-fill mr-1"> </i>FUEL TYPE <br />
                                    <div class="ml-5">{{ $car->fuel->name }}</div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/4 px-4">
                                <div class="mr-4 "><i class="bi bi-binoculars-fill mr-1"></i>MILLAGE <br />
                                    <div class="ml-5">{{ $car->millage }}</div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/4 px-4">
                                <div><i class="bi bi-car-front-fill mr-2"></i>CAR TYPE <br />
                                    <div class="ml-5">{{ $car->body->name }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="w-2/5 ">
                    <div class="border border-solid border-gray-500 p-3 py-3 mb-2">
                        <div class="flex justify-between flex-row py-5">
                            {{-- <div class="mr-4">
                                <h1> {{ $car->brand->name }}
                                    {{ $car->modeli->name }}</h1>
                            </div> --}}
                            <button class="px-3 py-1 font-bold text-white text-2xl"
                                style="background-color: rgb(220 38 38);">
                                <h3 class="font-medium text-lg capitalize">{{ $car->currency->code }}
                                    {{ number_format($car->price, 2) }}</h3>
                            </button>
                        </div>
                    </div>
                    <div class="border border-solid border-gray-500 p-3">
                        <div class="text-center">
                            <div class="mr-4 ">
                                <h3> Contact dealer</h3>
                            </div>
                            <h3 class="font-medium text-lg  capitalize">(+255) 654 303 353</h3>
                            <h6 class="mb-8">There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some form, by injected humour, or randomised words
                                which don't look even slightly believable. .</h6>
                        </div>
                        <div class="flex items-center mb-8">
                            <form action="{{ route('create.order') }}" method="POST">
                                <input type="hidden" name="date" value={{ date('Y-m-d') }} />
                                @csrf
                                @auth
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="customer_id">
                                    <input type="hidden" value="{{ $car->id }}" name="car_id">

                                @endauth

                                <button type="submit"
                                    class="w-full inline-block align-middle bg-dark leading-none py-5 px-5 md:px-8 text-sm text-white transition-all hover:bg-dark uppercase font-semibold hover:text-white">Place
                                    Order</button>

                            </form>
                        </div>
                    </div>
                    
                </div> 
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8 shadow-xl">
                <h3 class="mt-3 text-md font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    FEATURES & OPTIONS
                </h3>
                <div
                    class="mx-auto  grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                    <article class="flex max-w-xl flex-col items-start justify-between mr-2">
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <ul>
                                <li><strong>Confort</strong> </li>
                                <li>AC</li>
                                <li>Cruise Control</li>

                            </ul>
                        </div>
                    </article>
                    <article class="flex max-w-xl flex-col items-start justify-between mr-2">
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <ul>
                                <li><strong>Seats No: {{ $car->seats }}</strong> </li>
                                <li>Bucket Seats</li>
                                <li>Leather Interior</li>
                                <li>Doors: {{ $car->doors }}</li>

                            </ul>
                        </div>
                    </article>
                    <article class="flex max-w-xl flex-col items-start justify-between mr-2">
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <ul>
                                <li><strong>More</strong> </li>
                                <li>Reg year: {{ $car->registration_year }}</li>
                                <li>Manufacture: {{ $car->Manufacture_year }}</li>
                                <li>Meter Cubic: {{ $car->meter_cubic }}</li>
                                <li>Weight: {{ $car->weight }}</li>
                                <li>Imported From: {{ $car->imported_from }}</li>
                            </ul>
                        </div>
                    </article>
                    <!-- More posts... -->
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8 card shadow-xl">
                <h4 class="mt-3 text-md font-semibold leading-6 text-gray-600 group-hover:text-gray-600">
                    TECHNICAL
                </h4>
                <div
                    class="mx-auto  grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article class="flex max-w-xl flex-col items-start justify-between mr-2">
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <ul>
                                <li><strong>Engine</strong> </li>
                                <li>Chassis: {{ $car->chassis }}</li>
                                <li>Millage: {{ $car->millage }}</li>
                                <li>Engine: {{ $car->engine_cc }} cc</li>

                            </ul>
                        </div>
                    </article>
                    <article class="flex max-w-xl flex-col items-start justify-between mr-2">
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <ul>
                                <li><strong>Perfomance</strong> </li>
                                <li>Top track speed (173mph)</li>
                                <li>0 - 60 Mph (4.8s)</li>
                            </ul>
                        </div>
                    </article>
                    <article class="flex max-w-xl flex-col items-start justify-between mr-2">
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <ul>
                                <li><strong>Transmission</strong> </li>
                                <li>Type ({{ $car->transmission->name }})</li>

                            </ul>
                        </div>
                    </article>
                    <!-- More posts... -->
                </div>
            </div>

        </div>
    </div>

    </div>


    @foreach ($saleCategories as $saleCategory)
        <section class="product-section pt-2 bg-light">
            <div class="container">

                <div class="grid grid-rows-1 grid-flow-col gap-4">
                    <div class="text-center mb-5">
                        <h2 class="font-bold text-3xl md:text-4xl lg:text-xl">{{ $saleCategory->name }}</h2>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <section class="relative -m-4">
                            <div class="product-carousel2 overflow-hidden p-4">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- swiper-slide start -->
                                        @foreach ($saleCategory->cars as $car)
                                            <div class="swiper-slide">
                                                <a href="{{ route('car', ['car' => $car->id]) }}">
                                                    <div
                                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                                        <div id="tab1" class="relative overflow-hidden">
                                                            <span
                                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">{{ $car->availability_status }}</span>
                                                            <button
                                                                class="px-3 py-2 font-bold text-white absolute bottom-0 right-0"
                                                                style="background-color: rgb(220 38 38);">{{ $car->currency->code }}
                                                                {{ number_format($car->price, 2) }}</button>
                                                            <img class="w-full h-full"
                                                                src="{{ $car->car_pictures->count() ? $car->car_pictures[0]->link : asset('images/featured-vehicles/v1.jpg') }}"
                                                                alt="product image" loading="lazy" width="432"
                                                                height="480" />
                                                        </div>

                                                        <div class="py-5 px-4">
                                                            <h4 class="font-bold text-md leading-none my-3">
                                                                {{ $car->brand->name }} {{ $car->modeli->name }} </h4>
                                                            <div class="flex flex-row">
                                                                <div><i class="bi bi-geo-alt-fill me-1 mb-3 mr-2"></i>Dar Es
                                                                    Salaam,
                                                                    TZ
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-row">
                                                                <div class="mr-4"><i class="bi bi-fuel-pump-fill mr-1">
                                                                    </i>{{ $car->fuel->name }}
                                                                </div>
                                                                <div class="mr-4"><i class="bi bi-binoculars-fill mr-1">
                                                                    </i>{{ $car->millage }}
                                                                </div>
                                                                <div><i class="bi bi-car-front-fill me-2"> </i>SUV</div>
                                                            </div>

                                                        </div>
                                                        <hr />
                                                        <div class="flex justify-between px-4 py-5">
                                                            <div class="mr-3"><i
                                                                    class="bi bi-calendar-check-fill mr-2"></i>{{ $car->manufacture_year }}
                                                            </div>
                                                            <div class="mr-3">
                                                                <form action="{{ route('create.order') }}"
                                                                    method="POST">
                                                                    <input type="hidden" name="date"
                                                                        value={{ date('Y-m-d') }} />
                                                                    @csrf
                                                                    @auth
                                                                        <input type="hidden" value="{{ Auth::user()->id }}"
                                                                            name="customer_id">
                                                                        <input type="hidden" value="{{ $car->id }}"
                                                                            name="car_id">
                                                                    @endauth
                                                                    <button type="submit"
                                                                        class="inline-block align-middle bg-dark leading-none py-2 px-2 md:px-3 text-sm text-white transition-all hover:bg-dark uppercase hover:text-white">Place
                                                                        Order</button>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        @endforeach




                                    </div>
                                </div>

                                <!-- Add Pagination -->

                                <!-- <div class="swiper-pagination"></div> -->

                                <!-- swiper navigation -->

                                <div class="swiper-buttons">
                                    <div
                                        class="swiper-button-prev right-auto left-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 ">
                                    </div>
                                    <div
                                        class="swiper-button-next left-auto right-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 ">
                                    </div>
                                </div>
                            </div>
                        </section>




                    </div>
                </div>

            </div>
        </section>
    @endforeach
@endsection







{{-- @extends('layouts.web')
@section('content')
   <div class="">

    @component('components.shop-single.banner')
    @endcomponent

    @component('components.shop-single.car-details')
    @endcomponent

   </div>

 @endsection --}}
