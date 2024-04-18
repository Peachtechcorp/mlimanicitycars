@extends('layouts.web')
@section('content')
    <!-- Hero section start -->
    <div class="py-9 bg-gray-light " style="background-image: url('{{ asset('images/banner/banner.jpg')}}')">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <h3><a class="block text-lg font-bold text-white text-center transition-all mb-2" href="#">SUCCESS</a></h3>
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="/" class="text-white font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a></li>
                            <li class="text-white font-medium text-base uppercase mr-5">Succes</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="py-24">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-5">
                <div class="md:col-start-4 md:col-span-6 col-span-12 text-center mx-auto">
                    <h2 class="font-medium text-lg">Congratulatios</h2>
                    <p class="my-4">Your order was placed successifully. Our Sales department will contact you soon</p>
                    <a class="bg-black inline-block leading-none py-4 px-5 md:px-8 font-medium text-sm text-white transition-all hover:bg-orange capitalize" href="index.html">Back to home page</a>
                </div>
            </div>
        </div>
    </div>

@endsection



