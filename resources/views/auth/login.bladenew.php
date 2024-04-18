@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="login" class="custom-tab-content">
                <div class="p-8 md:p-20 shadow max-w-4xl mx-auto">
                    <div class="mx-2"><h4 class="font-semibold mb-5 text-center leading-none uppercase md:text-md" href="#login">login</h4></div>
                    <form action="#" method="post">
                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="text" name="user-name" placeholder="Username">
                        <input class="border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base" type="password" name="user-password" placeholder="Password">
                        <div class="button-box">
                            <div class="mb-4">
                                <input id="remember" type="checkbox">
                                <label for="remember" class="cursor-pointer">Remember me</label>
                                <span>Or</span>
                                <a href="#" class="inline-block mx-2 ">Forgot Password?</a>
                            </div>
                            <a href="#" class="inline-block leading-none uppercase text-white text-sm bg-dark px-5 py-4 transition-all hover:bg-orange">
                                <span>Login</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection