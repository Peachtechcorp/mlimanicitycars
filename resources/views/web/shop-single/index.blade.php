@extends('layouts.single')
@section('content')
    @component('components.shop-single.hero')
    @endcomponent


<body class="font-poppins text-dark text-sm leading-loose">

    <!-- Header end -->


    <!-- Hero section start -->
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="index.html" class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a></li>
                            <li class="text-dark font-medium text-base uppercase mr-5">Airp Variable product</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Hero section end -->


    <div class="py-24">

        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div>
                    <div class="relative overflow-hidden">
                        <span class="font-semibold uppercase text-sm text-white inline-block py-1 px-2 leading-none absolute top-3  z-10 right-3 bg-orange">Sale</span>
                        <div class="gallery mb-6">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/images/single-product/lg/product1.webp" alt="product image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/single-product/lg/product2.webp" alt="product image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/single-product/lg/product3.webp" alt="product image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/single-product/lg/product4.webp" alt="product image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/single-product/lg/product5.webp" alt="product image">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="gallery-nav relative">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/single-product/sm/product1.webp" alt="product image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/single-product/sm/product2.webp" alt="product image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/single-product/sm/product3.webp" alt="product image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/single-product/sm/product4.webp" alt="product image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/single-product/sm/product5.webp" alt="product image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <!-- <div class="swiper-pagination"></div> -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-prev right-auto left-4  w-8 h-8 rounded-full  border border-solid border-gray-500 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange">
                                    <i class="ion-chevron-left"></i>
                                </div>
                                <div class="swiper-button-next left-auto right-4  w-8 h-8 rounded-full  border border-solid border-gray-500 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange">
                                    <i class="ion-chevron-right"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <h3 class="font-medium text-lg capitalize">{{ $car->brand->name }} - {{ $car->modeli->name }}</h3>
                    <h5 class="font-bold text-md leading-none text-orange my-3">{{ $car->currency->code }} {{ number_format($car->price, 2) }}</h5>
                    <div class="mb-3">Fuel Type:<span> {{ $car->fuel->name }}</span></div>
                    <div class="mb-3">Millage: <span> {{ $car->millage }}</span></div>
                    <div class="mb-3"><span>Car Type:</span> <span class="font-semibold">{{ $car->body->name }}</span></div>
                    <p class="mb-8">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

                    <div>


                        <div class="flex flex-wrap items-center mb-6">
                            <span class="mr-8">Contact Dealer:</span>
                            <form class="size-swatch" action="#">
                                <ul class="flex flex-wrap">
                                    <li class="mx-1">
                                        <div class="mb-0"><span>(+255) 677 841 111</span></div>
                                    </li>
                                </ul>
                            </form>
                        </div>


                        <div class="mb-8">
                            <div class="flex flex-wrap items-center mt-8">
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
            </div>
        </div>

    </div>


    <div class="pb-24">
        <div class="container">
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


    <!-- Product section start -->
    <section class="product-section pb-24">
        <div class="container">

            <div class="grid grid-rows-1 grid-flow-col gap-4">
                <div class="text-center mb-14">
                    <h2 class="font-playfair font-bold text-primary text-3xl md:text-4xl lg:text-xl mb-4">New Arrivals</h2>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <section class="relative -m-4">
                        <div class="product-carousel2 overflow-hidden p-4">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div class="relative overflow-hidden">
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                                <img class="w-full h-full" src="assets/images/products/drone/product1.webp" alt="product image" loading="lazy" width="432" height="480" />
                                                <!-- actions start -->

                                                <div class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="#modal-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" data-tippy-content="Quick View" aria-label="Quick View">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="whishlist.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Add to wishlist" aria-label="wishlist">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="compare.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Compare" aria-label="Compare">
                                                                <i class="icon-refresh"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <a href="#modal-addto-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" aria-label="add to cart" data-tippy-content="Add to cart">
                                                                <i class="icon-bag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- actions end -->


                                                <!-- variants start -->

                                                <div class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                    <ul class="flex flex-wrap items-center justify-center mb-3">
                                                        <li class="mx-1 leading-none"><button class="text-sm">sm</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">l</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">m</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">xl</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">xxl</button></li>
                                                    </ul>
                                                    <ul class="flex flex-wrap items-center justify-center">
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-orange" aria-label="colors"></button></li>
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-primary" aria-label="variants"></button></li>
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-indigo-600" aria-label="variants"></button></li>
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-dark" aria-label="variants"></button></li>
                                                    </ul>
                                                </div>

                                                <!-- variants end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all" href="#">Batin crofessor pampden</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3"><del class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00</h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div id="tab1" class="relative overflow-hidden">
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                                <img class="w-full h-full" src="assets/images/products/drone/product2.webp" alt="product image" loading="lazy" width="432" height="480" />

                                                <!-- actions start -->

                                                <div class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="#modal-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" data-tippy-content="Quick View" aria-label="Quick View">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="whishlist.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Add to wishlist" aria-label="Add to wishlist">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="compare.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Compare" aria-label="compare">
                                                                <i class="icon-refresh"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <a href="#modal-addto-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" data-tippy-content="Add to cart" aria-label="Add to cart">
                                                                <i class="icon-bag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- actions end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all" href="#">Esse quam nihil molestiae</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3"><del class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00</h4>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <img class="w-full h-full" src="assets/images/products/drone/product3.webp" alt="product image" loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="#modal-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" data-tippy-content="Quick View" aria-label="Quick View">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="whishlist.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Add to wishlist" aria-label="Add to wishlist">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                        <a href="compare.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Compare" aria-label="compare">
                                                            <i class="icon-refresh"></i>
                                                        </a>
                                                    </li>
                                                    <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                        <a href="#modal-addto-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" data-tippy-content="Add to cart" aria-label="Add to cart">
                                                            <i class="icon-bag"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->


                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all" href="#">Inisd deofessor smpden</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3"><del class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00</h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div class="relative overflow-hidden">
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                                <img class="w-full h-full" src="assets/images/products/drone/product4.webp" alt="product image" loading="lazy" width="432" height="480" />
                                                <!-- actions start -->

                                                <div class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="#modal-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" data-tippy-content="Quick View" aria-label="Quick View">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="whishlist.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Add to wishlist" aria-label="Add to wishlist">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="compare.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Compare" aria-label="compare">
                                                                <i class="icon-refresh"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <a href="#modal-addto-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" data-tippy-content="Add to cart" aria-label="Add to cart">
                                                                <i class="icon-bag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- actions end -->


                                                <!-- variants start -->

                                                <div class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                    <ul class="flex flex-wrap items-center justify-center mb-3">
                                                        <li class="mx-1 leading-none"><button class="text-sm">sm</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">l</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">m</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">xl</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">xxl</button></li>
                                                    </ul>
                                                    <ul class="flex flex-wrap items-center justify-center">
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-orange" aria-label="colors"></button></li>
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-primary" aria-label="variants"></button></li>
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-indigo-600" aria-label="variants"></button></li>
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-dark" aria-label="variants"></button></li>
                                                    </ul>
                                                </div>

                                                <!-- variants end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all" href="#">Nam libero tempore,</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3"><del class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00</h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->

                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide">
                                        <div class="border border-solid border-gray-300 transition-all hover:shadow-product group">
                                            <div class="relative overflow-hidden">
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                                <span class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                                <img class="w-full h-full" src="assets/images/products/drone/product5.webp" alt="product image" loading="lazy" width="432" height="480" />
                                                <!-- actions start -->

                                                <div class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul class="flex items-center justify-center bg-white shadow rounded-full h-0 transition-all group-hover:h-16 duration-500 overflow-hidden">
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="#modal-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" data-tippy-content="Quick View" aria-label="Quick View">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="whishlist.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Add to wishlist" aria-label="wishlist">
                                                                <i class="icon-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 md:py-5 md:pl-8">
                                                            <a href="compare.html" class="text-dark flex items-center justify-center text-md hover:text-orange" data-tippy-content="Compare" aria-label="Compare">
                                                                <i class="icon-refresh"></i>
                                                            </a>
                                                        </li>
                                                        <li class="py-4 pl-7 pr-7 md:py-5 md:pl-8 md:pr-8">
                                                            <a href="#modal-addto-cart" class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle" aria-label="add to cart" data-tippy-content="Add to cart">
                                                                <i class="icon-bag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- actions end -->


                                                <!-- variants start -->

                                                <div class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                    <ul class="flex flex-wrap items-center justify-center mb-3">
                                                        <li class="mx-1 leading-none"><button class="text-sm">sm</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">l</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">m</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">xl</button></li>
                                                        <li class="mx-1 leading-none"><button class="text-sm">xxl</button></li>
                                                    </ul>
                                                    <ul class="flex flex-wrap items-center justify-center">
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-orange" aria-label="colors"></button></li>
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-primary" aria-label="variants"></button></li>
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-indigo-600" aria-label="variants"></button></li>
                                                        <li class="mx-1 leading-none"><button class="w-4 h-4 rounded-full bg-dark" aria-label="variants"></button></li>
                                                    </ul>
                                                </div>

                                                <!-- variants end -->


                                                <!-- countdown start -->

                                                <div class="absolute w-full bottom-0 group-hover:opacity-0 group-hover:invisible transition-all">
                                                    <div class="countdown bg-dark item-1 flex flex-wrap justify-evenly p-2" data-countdown="2022/11/20" data-format="short">
                                                        <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                            <span class="countdown__time mr-1 text-base text-white font-500 daysLeft"></span>
                                                            <span class="countdown__text capitalize text-sm text-white font-light daysText"></span>
                                                        </div>
                                                        <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                            <span class="countdown__time mr-1 text-base text-white font-500 hoursLeft"></span>
                                                            <span class="countdown__text capitalize text-sm text-white font-light hoursText"></span>
                                                        </div>
                                                        <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                            <span class="countdown__time mr-1 text-base text-white font-500 minsLeft"></span>
                                                            <span class="countdown__text capitalize text-sm text-white font-light minsText"></span>
                                                        </div>
                                                        <div class="countdown__item flex flex-wrap items-baseline flex-col">
                                                            <span class="countdown__time mr-1 text-base text-white font-500 secsLeft"></span>
                                                            <span class="countdown__text capitalize text-sm text-white font-light secsText"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- countdown end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h3><a class="block text-base hover:text-orange transition-all" href="#">Catin uofessor eampden</a></h3>
                                                <h4 class="font-bold text-md leading-none text-orange mt-3"><del class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00</h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- swiper-slide end-->


                                </div>
                            </div>

                            <!-- Add Pagination -->

                            <!-- <div class="swiper-pagination"></div> -->

                            <!-- swiper navigation -->

                            <div class="swiper-buttons">
                                <div class="swiper-button-prev right-auto left-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange"></div>
                                <div class="swiper-button-next left-auto right-4  w-12 h-12 rounded-full bg-white border border-solid border-gray-400 text-sm text-dark opacity-100 transition-all hover:text-orange hover:border-orange"></div>
                            </div>
                        </div>
                    </section>




                </div>
            </div>

        </div>
    </section>
    <!-- Product section end -->



    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{ asset('js/vendor/modernizr-3.11.7.min.js')}}"></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('js/plugins/popper.min.js')}}"></script>
    <script src="{{ asset('js/plugins/tippy-bundle.umd.min.js')}}"></script>
    <script src="{{ asset('js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/plugins/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Activation JS -->
    <script src="{{ asset('js/main.js')}}"></script>



</body>
@endsection