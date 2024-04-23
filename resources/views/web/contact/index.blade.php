@extends('layouts.web')
@section('content')
    <!-- Hero section start -->
    <div class="py-9 bg-gray-light " style="background-image: url('{{ asset('images/banner/banner.jpg')}}')">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <h3><a class="block text-lg font-bold text-white text-center transition-all mb-2" href="/contact">CONTACT US</a></h3>
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="/" class="text-white font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a></li>
                            <li class="text-white font-medium text-base uppercase mr-5">Contact us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero section end -->

        <!-- contact us section start -->


        <div class="bg-white py-24">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4">
                    <div class="contact-info-area">
                        <h2 class="font-semibold text-dark text-4xl mb-14 capitalize">Contact Us</h2>
                        <div class="flex flex-wrap items-center mb-8">
                            <span class="text-dark text-4xl mr-5"><i class="icon-location-pin"></i></span>
                            <p class="flex-1">Mlimani City bus stop, opposite to Mlimani City Mall ,Sam Nujoma Road House No 64 - Dar Es salaam.</p>
                        </div>
                        <div class="flex flex-wrap items-center mb-8">
                            <span class="text-dark text-4xl mr-5"><i class="icon-envelope"></i></span>
                            <a href="mailto:info@mlimanicitycars.co.tz" class="flex-1">info@mlimanicitycars.co.tz / sales@mlimanicitycars.co.tz</a>
                        </div>
                        <div class="flex flex-wrap items-center">
                            <span class="text-dark text-4xl mr-5"><i class="icon-screen-smartphone"></i></span>
                            <a href="tel:01234567890" class="flex-1">(+255) 677 841 111 / (+255) 769 117 997</a>
                        </div>
                        
                        <div class="flex flex-wrap items-center mt-3">
                            <span class="text-dark text-4xl mr-5"><i class="icon-social-instagram"></i></span>
                            <a href="https://www.instagram.com/mlimanicity_cars_updates/" class="flex-1">mlimanicity_cars_updates</a>
                        </div>
                        
                    </div>
    
                    <div class="p-10 lg:p-14 shadow mt-14 lg:mt-0">
                        <form id="contact-form" method="get" action="#">
                            <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text" name="name" placeholder="Name">
                            <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="email" placeholder="Email" name="email">
                            <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text" placeholder="subject" name="subject">
                            <textarea class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 text-dark h-32 focus:outline-none text-base resize-none" name="massage"></textarea>
                            <button class="w-full leading-none uppercase text-white text-sm bg-dark px-5 py-5 transition-all hover:bg-dark" type="submit" aria-label="button">Send Message</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
    
        </div>
        <!-- contact us section end -->
    
    
        <!-- google map start -->
    
        <div class="container">
             <div class="flex flex-wrap items-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6641.44504481122!2d39.220712041851286!3d-6.7747718183040195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4f8443850633%3A0x599797a8ba3c053a!2sMlimani%20City%20Cars!5e0!3m2!1ssw!2stz!4v1682055447984!5m2!1ssw!2stz" width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
        </div>
    
        <!-- google map end -->


@endsection



