@extends('layouts.web')

@section('content')
    <!-- Hero section start -->
    <div class="py-9 bg-gray-light " style="background-image: url('{{ asset('images/banner/banner.jpg') }}')">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <h3><a class="block text-lg font-bold text-white text-center transition-all mb-2" href="#">SHOP</a>
                    </h3>
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="/"
                                    class="text-white font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a>
                            </li>
                            <li class="text-white font-medium text-base uppercase mr-5">shop left sidebar</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero section end -->
    <!-- blog grid section start -->

    <div class="py-24">
        <div class="container">
            <div class="flex flex-wrap flex-col lg:flex-row -mx-4">
                <div class="lg:w-1/4 px-4 order-last lg:order-first mt-8 lg:mt-0">
                    <div>
                        {{-- <div class="mb-12">
                            <h4 class="font-medium text-md lg:text-lg text-dark capitalize mb-10">Search</h4>
                            <div class="pro-sidebar-search mb-50 mt-25">
                                <form class="border border-solid border-gray-300" action="#" method="get">
                                    <div class="relative">
                                        <input
                                            class="w-full h-12 text-sm py-4 pl-4 pr-16 bg-white text-dark placeholder-current focus:outline-none"
                                            type="search" name="search" placeholder="Search our store">
                                        <button
                                            class="w-12 h-full absolute top-0 right-0 flex items-center justify-center text-dark text-md border-l border-solid border-gray-300"
                                            type="submit"><i class="icon-magnifier"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}


                        <div class="mb-12 border border-solid border-gray-300 p-3 mb-2">
                            <div class="mb-2">
                                <h4 class="font-medium text-dark mb-2">FILTER BY BRANDS</h4>
                                <hr />
                            </div>
                            <ul>
                                @foreach ($brands as $brand)
                                    <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">

                                        <label
                                            class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">
                                            <a href="{{ route('brand', ['brand' => $brand->id]) }}">
                                                {{ $brand->name }}</a> </label>
                                        <a href="#"
                                            class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-sm hover:text-white
                                        hover:bg-orange transition-all">{{ $brand->cars()->count() }}</a>
                                    </li>
                                @endforeach



                            </ul>
                        </div>

                        <div class="mb-12 border border-solid border-gray-300 p-3 mb-2">
                            <div class="mb-2">
                                <h4 class="font-medium  text-dark capitalize mb-2">BODY</h4>
                                <hr />
                            </div>

                            <ul>
                                @foreach ($bodies as $body)
                                    <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">
                                        <label
                                            class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">
                                            <a href="{{ route('body', ['body' => $body->id]) }}">
                                                {{ $body->name }}</a> </label>
                                        <a href="#"
                                            class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-sm hover:text-white
                                        hover:bg-orange transition-all">{{ $body->cars()->count() }}</a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>

                        {{-- <div class="mb-12 border border-solid border-gray-300 p-3 mb-2">
                            <div class="mb-2">
                                <h4 class="font-medium  text-dark capitalize mb-2">FILTER BY COLOR</h4>
                                <hr />
                            </div>
                            <ul>
                                @foreach ($colors as $color)
                                    <li class="mb-5 flex justify-between items-center transition-all hover:text-orange">

                                        <label
                                            class="relative cursor-pointer before:empty before:inline-block before:w-5 before:h-5 before:bg-white before:border-2 before:border-solid before:border-gray-300 before:rounded before:mr-4 align-middle flex items-center">
                                            <a href="{{ route('color', ['color' => $color->id]) }}">{{ $color->name }}<a />
                                        </label>
                                    </li>
                                @endforeach


                            </ul>
                        </div> --}}
                    </div>

                </div>

                <div id="shoptab" class="flex-1">
                    <div class="flex flex-wrap justify-between items-center px-4">
                        <div class="mb-12">
                            <h4 class="font-medium text-md lg:text-lg text-dark capitalize mb-5">Search</h4>
                            <div class="pro-sidebar-search mb-50 mt-25">
                                <form class="border border-solid border-gray-300" action="#" method="get">
                                    <div class="relative">
                                        <input
                                            class="w-full h-12 text-sm py-4 pl-4 pr-16 bg-white text-dark placeholder-current focus:outline-none"
                                            type="search" name="search" placeholder="Search our store">
                                        <button
                                            class="w-12 h-full absolute top-0 right-0 flex items-center justify-center text-dark text-md border-l border-solid border-gray-300"
                                            type="submit"><i class="icon-magnifier"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="shop-select flex mr-12">
                                <label for="SortBy mr-2">Sort by :</label>
                                <select id="SortBy" class="px-2 bg-transparent border border-solid border-gray-500">
                                    <option value="manual">Featured</option>
                                    <option value="best-selling">Best Selling</option>
                                    <option value="title-ascending">Alphabetically, A-Z</option>
                                    <option value="title-descending">Alphabetically, Z-A</option>
                                    <option value="price-ascending">Price, low to high</option>
                                    <option value="price-descending">Price, high to low</option>
                                    <option value="created-descending">Date, new to old</option>
                                    <option value="created-ascending">Date, old to new</option>
                                </select>
                            </div>
                            <p class="my-2 sm:my-0">Showing 1 - 9 of 9 result</p>
                        </div>
                        <div>
                            <span>Show :</span>
                            <select class="bg-transparent border border-solid border-gray-500">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="shop-tab-content active">
                            <div class="flex flex-wrap -mb-7 -px-4">


                                @forelse ($cars as $car)
                                    <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7">
                                        <div
                                            class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div id="tab1" class="relative overflow-hidden">
                                                <span
                                                    class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">{{ $car->availability_status }}</span>
                                                <button class="px-3 py-2 font-bold text-white absolute bottom-0 right-0"
                                                    style="background-color: rgb(220 38 38);">{{ $car->currency->code }}
                                                    {{ number_format($car->price, 2) }}</button>
                                                <img class="w-full h-full"
                                                    src="{{ $car->car_pictures->count() ? $car->car_pictures[0]->link : asset('images/featured-vehicles/v1.jpg') }} "
                                                    alt="product image" loading="lazy" width="432" height="480" />
                                            </div>

                                            <div class="py-5 px-4">
                                                <h4 class="font-bold text-md leading-none my-1">
                                                    <a href="car/{{ $car->id }}"> {{ $car->brand->name }}
                                                        {{ $car->modeli->name }}</a>
                                                </h4>
                                                <div class="flex flex-row">
                                                    <div><i class="bi bi-geo-alt-fill me-1 mb-3 mr-2"></i>Dar Es Salaam, TZ
                                                    </div>
                                                </div>
                                                <div class="flex flex-row">
                                                    <div class="mr-4"><i class="bi bi-fuel-pump-fill mr-1">
                                                        </i>{{ $car->fuel->name }}
                                                    </div>
                                                    <div class="mr-4"><i class="bi bi-binoculars-fill mr-1">
                                                        </i>{{ $car->millage }}
                                                    </div>
                                                    <div><i class="bi bi-car-front-fill me-2"> </i>{{ $car->body->name }}
                                                    </div>
                                                </div>

                                            </div>
                                            <hr />
                                            <div class="flex justify-between px-4 py-5">
                                                <div class="mr-3"><i
                                                        class="bi bi-calendar-check-fill mr-2"></i>{{ $car->manufacture_year }}
                                                </div>
                                                <div class="mr-3">
                                                    <form action="{{ route('create.order') }}" method="POST">
                                                        <input type="hidden" name="date" value={{ date('Y-m-d') }} />
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
                                    </div>
                                @empty
                                    <div class="w-full md:w-1/2 xl:w-1/3 px-4 mb-7"> nothing was found</div>
                                @endforelse
                            </div>




                        </div>
                    </div>

                    <div class="mt-12">
                        <ul class="pagination flex flex-wrap items-center justify-center">


                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow leading-none transition-all"
                                    href="#">{{ $cars->links() }}</a>
                            </li>


                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog grid section end -->
@endsection
