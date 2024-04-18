<header id="sticky-header">
    <div class="px-4 py-2 md:px-10 2xl:px-24">
        <div class="flex flex-wrap items-center justify-between">
            <div class="hidden lg:block">
                <a href="#offcanvas-mobile-menu-desk"
                    class="offcanvas-toggle text-primary text-md hover:text-orange transition-all">
                    <i class="icon-menu"></i></a>
            </div>
            <div>
                <div class="logo"><a href="/"><img src="{{ asset('images/logo1.png') }}" alt="logo"
                            loading="lazy" width="220" height="120" /></a></div>
            </div>
            <div>
                <ul class="flex items-center justify-end">
                    <li class="ml-6 hidden lg:block">
                        <button class="search-toggle text-right text-primary text-md hover:text-orange transition-all"
                            aria-label="icon-settings">
                            <i class="icon-magnifier"></i>
                        </button>
                    </li>
                    <li id="toggle-menu" class="ml-6 hidden lg:block relative">
                        <button class="text-primary text-md hover:text-orange transition-all toggle-menu"
                            aria-label="icon-settings">
                            <i class="icon-settings"></i>
                        </button>
                        <div id="settings-card"
                            class="bg-white absolute right-0 px-8 py-5 shadow w-80 opacity-0 invisible transition-all duration-300 ease-in-out z-20">

                            <h4
                                class="text-md text-dark font-normal capitalize tracking-wide pb-5 border-b border-solid border-gray-600 mb-5">
                                Account</h4>
                            <ul>
                                @if (Route::has('login'))
                                    @auth
                                        <li class="my-4"><a href="#"
                                                class="text-base text-dark hover:text-orange transition-all font-light capitalize tracking-wide">{{ Auth::user()->name }}</a>
                                        </li>
                                        <li class="my-4"><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                class="text-base text-dark hover:text-orange transition-all font-light capitalize tracking-wide">Login
                                                out</a>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    @else
                                        <li class="my-4"><a href="/login"
                                                class="text-base text-dark hover:text-orange transition-all font-light capitalize tracking-wide">Login</a>
                                        </li>
                                        <li class="mt-4"><a href="/register"
                                                class="text-base text-dark hover:text-orange transition-all font-light capitalize tracking-wide">Create
                                                Account</a></li>
                                    @endauth
                                @endif
                            </ul>
                        </div>


                    </li>
                    <li class="ml-6 lg:hidden">
                        <a href="#offcanvas-mobile-menu"
                            class="offcanvas-toggle text-primary text-md hover:text-orange transition-all"><i
                                class="icon-menu"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</header>

<div
    class="search-form fixed top-0 left-0 w-full bg-black opacity-95 min-h-screen items-center justify-center py-8 px-10 transform  transition-transform translate-x-full ease-in-out duration-500 hidden lg:flex z-50">
    <button class="search-close absolute left-1/2 text-white text-xl top-12 translate-y-1/2"
        aria-label="close icon"><span class="icon-close"></span></button>
    <form class="relative xl:w-1/3 lg:w-1/2" action="#" method="get">
        <input
            class="text-md font-normal border-b border-solid border-gray-600 bg-transparent h-14 w-full focus:outline-none pr-14 text-white"
            type="search" name="search" placeholder="Search our store" />
        <button class="absolute right-0 top-3 text-white text-md font-normal" type="submit"
            aria-label="submit button"><i class="icon-magnifier"></i></button>
    </form>
</div>
<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu"
    class="offcanvas left-auto right-0  transform translate-x-translate-x-full-120 fixed font-normal text-sm top-0 z-50 h-screen w-72 sm:w-80 lg:w-96 transition-all ease-in-out duration-300 bg-white">

    <div class="px-8 py-12 h-5/6 overflow-y-auto">

        <!-- search form start -->

        <form class="pb-10 mb-10 border-b border-solid border-gray-600" action="#" method="get">
            <div class="relative">
                <input
                    class="w-full h-12 text-sm py-4 pl-4 pr-16 bg-gray-light text-dark placeholder-current focus:outline-none"
                    type="search" name="search" placeholder="Search our store">
                <button
                    class="w-12 h-full absolute top-0 right-0 flex items-center justify-center text-dark text-md border-l border-solid border-gray-600"
                    type="submit" aria-label="button"><i class="icon-magnifier"></i></button>
            </div>
        </form>

        <!-- search form end -->

        <!-- close button start -->
        <button
            class="offcanvas-close bg-dark group transition-all hover:text-orange text-white w-10 h-10 flex items-center justify-center absolute -left-10 top-0"
            aria-label="offcanvas"><i class="icon-close transition-all transform group-hover:rotate-90"></i></button>
        <!-- close button end -->

        <!-- offcanvas-menu start -->


        <nav class="offcanvas-menu pb-10 mb-10 border-b border-solid border-gray-600">
            <ul>
                <li class="relative block"><a href="/"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Home</a></li>
                <li class="relative block"><a href="/about"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">About Us</a></li>
                <li class="relative block"><a href="/shop"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Shop</a></li>
                <li class="relative block"><a href="/contact"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Contact Us</a>
                </li>
                <li class="relative block"><a href="/order"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">My Order</a>
                </li>
            </ul>
        </nav>
        <!-- offcanvas-menu end -->


        <nav>
            <ul>
                @if (Route::has('login'))
                    @auth
                        <li class="my-4"><a href="#"
                                class="text-base text-dark hover:text-orange transition-all font-light capitalize tracking-wide">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="my-4"><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"
                                class="text-base text-dark hover:text-orange transition-all font-light capitalize tracking-wide">Login
                                out</a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="my-4"><a href="/login"
                                class="text-base text-dark hover:text-orange transition-all font-light capitalize tracking-wide">Login</a>
                        </li>
                        <li class="mt-4"><a href="/register"
                                class="text-base text-dark hover:text-orange transition-all font-light capitalize tracking-wide">Create
                                Account</a></li>
                    @endauth
                @endif
            </ul>
        </nav>

    </div>
</div>
<!-- offcanvas-mobile-menu end -->

<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu-desk"
    class="offcanvas left-0 right-auto  transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen w-80 transition-all ease-in-out duration-300 bg-white">

    <div class="px-8 py-12 h-5/6 overflow-y-auto">

        <!-- search form start -->

        <div class="logo pt-24 mb-12"><a href="/"><img src="{{ asset('images/logo1.png') }}" alt="logo"
                    loading="lazy" width="125" height="45" /></a></div>
        <!-- search form end -->

        <!-- close button start -->
        <button class="offcanvas-close text-black absolute right-4 top-4 text-md hover:text-orange transition-all"><i
                class="icon-close"></i></button>
        <!-- close button end -->

        <!-- offcanvas-menu start -->

        <nav class="offcanvas-menu pb-10">
            <ul>
                <li class="relative block"><a href="/"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Home</a></li>
                <li class="relative block"><a href="/about"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">About Us</a></li>
                <li class="relative block"><a href="/shop"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Shop</a></li>
                <li class="relative block"><a href="/contact"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">Contact Us</a>
                </li>
                <li class="relative block"><a href="/order"
                        class="relative block capitalize font-normal text-base my-2 py-1 font-roboto">My order</a>
                </li>
            </ul>
        </nav>
        <!-- offcanvas-menu end -->


        <div class="flex flex-wrap items-center justify-start">
            <a href="#"
                class="text-md text-facebook hover:text-dark mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i
                    class="icon-social-facebook"></i></a>
            <a href="#"
                class="text-md text-twitter hover:text-dark mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i
                    class="icon-social-twitter"></i></a>
            <a href="#"
                class="text-md text-dribbble hover:text-dark mr-10 leading-none transition relative before:absolute before:top-1/2  before:-translate-y-1/2 before:left-7 before:empty before:bg-gray-900 before:w-4 before:h-1px"><i
                    class="icon-social-instagram"></i></a>
        </div>
    </div>
</div>
<!-- offcanvas-mobile-menu end -->


<!-- Header end -->
