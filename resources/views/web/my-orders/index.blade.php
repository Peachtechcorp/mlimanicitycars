@extends('layouts.web')

@section('content')
    <!-- Hero section start -->
    <div class="py-9 bg-gray-light " style="background-image: url('{{ asset('images/banner/banner.jpg') }}')">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <h3><a class="block text-lg font-bold text-white text-center transition-all mb-2" href="#">MY -
                            ORDERS</a></h3>
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="/"
                                    class="text-white font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Home</a>
                            </li>
                            <li class="text-white font-medium text-base uppercase mr-5">my order</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero section end -->
    <div class="container">
        <!-- blog grid section start -->
        <div class="py-7">
            <div class="container">
                

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Car Name
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Order No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Order Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $order->cars->brand->name }} {{ $order->cars->modeli->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $order->order_code }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $order->status }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $order->date }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $order->cars->currency->code }} {{ number_format($order->cars->price, 2) }}
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div>


        <!-- blog grid section end -->
    </div>
    </div>
@endsection
