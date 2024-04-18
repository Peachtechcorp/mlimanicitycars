@extends('layouts.web')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 align-items-center">
            <img src="{{ asset('images/single-product/lg/c1.jpeg')}}" class="img-fluid" alt="...">
        </div>
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="p-5">
                <h2 class="h1-responsive font-weight-bold text-start my-3">BMW X6</h2>
                <div class="d-flex">
                    <div class="py-2 fw-bold text-muted flex-grow-1">Qty</div>
                    <div class="fw-bold">1</div>
                </div>
                <div class="d-flex">
                    <div class="py-2 fw-bold text-muted  flex-grow-1">Subtotal</div>
                    <div class=" fw-bold">TZS. 6,500,000</div>
                </div>
                <div class="d-flex">
                    <div class="py-2 fw-bold text-muted  flex-grow-1">Shipping</div>
                    <div class="fw-bold">Free</div>
                </div>
                <div class="d-flex">
                    <div class="py-2 fw-bold text-muted  flex-grow-1">Promo code</div>
                    <div class=" fw-bold">1x1G21</div>
                </div>
                <div class="d-flex">
                    <div class="py-2 fw-bold text-muted  flex-grow-1">Total</div>
                    <div class=" fs-4 fw-bold">TZS. 6,000,000</div>
                </div>
            </div>
            <div class="p-5 bg-gray">
                <h4 class="h1-responsive font-weight-bold text-start my-2 p-2 text-muted">Payment details</h4>
                <div class="">
                    <div class="row my-3">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" style="borde: none;" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                <img src="{{ asset('images/payments/tigo.png')}}" class="img-fluid" alt="...">                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                <img src="{{ asset('images/payments/voda.png')}}" class="img-fluid" alt="...">                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                <img src="{{ asset('images/payments/halopesa.png')}}" class="img-fluid" alt="...">                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                <img src="{{ asset('images/payments/airtel.png')}}" class="img-fluid" alt="...">                                </label>
                            </div>
                        </div>
                    </div>
                    <form id="contact-form" method="get" action="#">
                        <input class="border border-solid border-gray-300 w-full py-1 px-2 mb-3 placeholder-current text-dark h-12 focus:outline-none text-base" type="number" name="number" placeholder="+255">
                        <input class="border border-solid border-gray-300 w-full py-1 px-2 mb-3 placeholder-current text-dark h-12 focus:outline-none text-base" type="number" placeholder="Amount" name="price">
                        <button class="w-full leading-none uppercase text-white text-sm bg-dark px-5 py-3 transition-all hover:bg-orange" type="submit" aria-label="button">PURCHASE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection