@extends('layouts.web')
@section('content')

    <!-- Hero section start -->
    <div class="py-9 bg-gray-light " style="background-image: url('{{ asset('images/banner/banner.jpg')}}')">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <h3><a class="block text-lg font-bold text-white text-center transition-all mb-2" href="#">ABOUT US</a></h3>
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="/" class="text-white font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a></li>
                            <li class="text-white font-medium text-base uppercase mr-5">about us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero section end -->

        <!-- about us section start -->
        <div class="py-20 bg-white">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">
                    <div class="flex flex-wrap items-center mb-10 lg:mb-0">
                        <img src="{{ asset('assets/images/drone/drone4.png')}}" alt="images">
                    </div>
                    <div>
                        <div class="mb-10">
                            <h3 class="font-bold uppercase text-3xl md:text-4xl mb-5 text-dark">ABOUT <span class="">US</span></h3>
                            <p>Mlimani City Cars offers top-tier services to customers across the income spectrum and has a significant market share of the top-selling affordable brands, as well as a number of luxury brands.
                                 We operate in the franchised motor retail market, representing a number of international vehicle brands.</p>
                        </div>
                        <div class="mb-10">
                            <h4 class="font-semibold uppercase text-md mb-4 text-dark">OUR BRANDS</h4>
                            <p>Japanese & European Cars</p>
                              <p>We  <strong>BUY</strong>, <strong>SELL</strong> , <strong>IMPORT</strong> Verified cars at the best prices.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold uppercase text-md mb-4 text-dark">WHY CHOOSE US</h4>
                            <p>A unique local network, A dynamic customer-centric organisation, Unstinting commitment to customer service, The highest international standards, Sustained investment, Skilled, conscientious employees.</p>
       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us section end -->


@endsection