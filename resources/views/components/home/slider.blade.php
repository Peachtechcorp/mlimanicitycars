{{-- <div class="bg-image" style=" background-image: url('{{ asset('images/banner/banner.jpg')}}'); height: 570px; background-size: cover; background-position: center; background-repeat: no-repeat; position: relative;z-index: 1;">
</div> --}}

    <!-- Hero section start -->
    <section class="hero-section relative bg-sky-100 mb-5">
        <div class="hero-slider overflow-hidden">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- swiper-slide start -->
                    <div class="swiper-slide 2xl:h-screen lg:h-700px flex flex-wrap items-center px-4 md:px-10 2xl:px-24 py-20 lg:py-0  bg-no-repeat bg-left-bottom bg-sky-100 bg-cover" style="background-image: url('{{ asset('assets/images/hero/slide5.jpg')}}');">
                        <div class="flex flex-col md:flex-row items-center justify-between w-full">
                            <div class="md:flex-grow">
                                <div class="slider-content" >
                                    <span class="text-white text-lg font-normal block mb-3">#Mlimani City Cars</span>
                                    <h4 class="text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-7xl 2xl:text-7xl mb-3 inline-block xl:block">Verified Cars at the best prices</h4>
                                    <!--<h2 class="text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-8xl 2xl:text-9xl mb-7 inline-block xl:block">best prices</h2>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide end-->

                    <!-- swiper-slide start -->
                    <div class="swiper-slide 2xl:h-screen lg:h-700px flex flex-wrap items-center px-4 md:px-10 2xl:px-24 py-20 lg:py-0  bg-no-repeat bg-left-bottom bg-sky-100 bg-cover" style="background-image: url('{{ asset('assets/images/hero/slide6.jpg')}}');">
                        <div class="flex flex-col md:flex-row items-center justify-between w-full">
                            <div class="flex-grow">
                                <div class="slider-content">
                                    <span class="text-white text-lg font-normal block mb-3">#Best dealer in town</span>
                                    <h1 class="text-white font-bold text-3xl sm:text-4xl lg:text-5xl xl:text-7xl 2xl:text-7xl mb-3 inline-block xl:block">Japanes & European Cars</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- swiper-slide end-->
                </div>
            </div>

            <!-- Add Pagination -->
            {{-- <div class="swiper-pagination  md:mb-0"></div> --}}
            <!-- swiper navigation -->
            @component('components.home.search-form')
            @endcomponent
        </div>
    </section>



    <!-- Hero section end -->

