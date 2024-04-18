@extends('layouts.web')
@section('content')
    @component('components.home.slider')
    @endcomponent

    {{-- @component('components.home.search-form')
        @endcomponent --}}
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
                                                <a href="car/{{ $car->id }}">
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
                                                                alt="{{ asset('images/featured-vehicles/v1.jpg') }}"
                                                                loading="lazy" width="432" height="480" />
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
                                                                <div><i class="bi bi-car-front-fill me-2">
                                                                    </i>{{ $car->body->name }}</div>
                                                            </div>

                                                        </div>
                                                        <hr />
                                                        <div class="flex justify-between px-4 py-5">
                                                            <div class="mr-3"><i
                                                                    class="bi bi-calendar-check-fill mr-2"></i>{{ $car->manufacture_year }}
                                                            </div>
                                                            <div class="mr-3">
                                                                <form action="{{ route('create.order') }}" method="POST">
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

    @component('components.home.hero')
    @endcomponent

    <div class="mt-5"></div>

    @foreach ($carCategories as $saleCategory)
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
                                                <a href="car/{{ $car->id }}">
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
                                                                <div><i class="bi bi-car-front-fill me-2">
                                                                    </i>{{ $car->body->name }}</div>
                                                            </div>

                                                        </div>
                                                        <hr />
                                                        <div class="flex justify-between px-4 py-5">
                                                            <div class="mr-3"><i
                                                                    class="bi bi-calendar-check-fill mr-2"></i>{{ $car->manufacture_year }}
                                                            </div>
                                                            <div class="mr-3">
                                                                <form action="{{ route('create.order') }}" method="POST">
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
