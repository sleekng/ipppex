<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-light.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-regular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/sharp-solid.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.7.0.min.js') }}" defer></script>
    <script src="{{ asset('js/core.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>






    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/main.js') }}" defer></script>


    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }
    </style>
</head>


<body>
    <div class="font-sans text-gray-900 antialiased">


        <div
            class=" {{ request()->is('register') || request()->is('admin') || request()->is('login') ? 'hidden' : 'block' }}">
            @include('layouts.navbar')
        </div>


        {{ $slot }}
    </div>





    {{-- Include the pop-up only if it's the user's first visit --}}
    @if (session('visited_before') !== true)
        <!-- Main modal -->
        <div  id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="fixed hidden justify-center items-center top-0 left-0 right-0 z-50  w-screen p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-screen"
            style="  background-image:linear-gradient(to bottom, rgba(18, 16, 16, 0.734), rgba(18, 16, 16, 9)); background-position-y:center; background-repeat:no-repeat;background-size:cover">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg overflow-hidden shadow dark:bg-gray-700">
                    <form action="{{ route('subscribe.close') }}" method="POST">
                        @csrf

                        <button type="submit" type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </form>
                    <div>
                        <div>
                            <img class=" w-full" src="storage/img/slide/slilde7.jpg" alt="">
                        </div>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Subscribe to IPPPEX
                                newsletter</h3>
                            <form action="{{ route('subscribe') }}" method="post">
                                @csrf
                                <div
                                    class=" flex md:items-center md:flex-row flex-col space-y-2 md:space-y-0 md:space-x-2">
                                    <input
                                        class="focus-visible:outline-none border w-full border-[#D9D2D2] rounded-[12px] h-[48px] bg-transparent"
                                        type="email" name="email" placeholder="Enter your email address">
                                    <x-button type="submit">Subscribe</x-button>
                                </div>
                                @error('email')
                                    <div class="text-[10px] text-red-500">{{ $message }}</div>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <script>
                const containerModel = document.querySelector('#authentication-modal');


                const closeButton = document.getElementById("close");

            if ({{ request()->routeIs('home') }} == true) {
                
                setTimeout(() => {
                    containerModel.classList.add('flex');
                    containerModel.classList.remove('hidden');
                }, 10000);
            }

                closeButton.addEventListener('click', function() {
                    containerModel.classList.remove('flex');
                    containerModel.classList.add('hidden');
                })
            </script>
       
    @endif


    <script src="{{ asset('js/aos.js') }}"></script>

    <script>
        AOS.init({
            duration: 3000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



    <script>
        @if (session()->has('alert-success'))
            Toastify({
                text: "{{ session('alert-success') }}",
                duration: 10000,
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                    width: "400px"
                }
            }).showToast();
        @elseif (Session::has('alert-warning'))
            Toastify({
                text: "{{ Session::get('alert-warning') }}",
                duration: 10000,
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)"
                }
            }).showToast();
        @elseif (Session::has('alert-danger'))
            Toastify({
                text: "{{ Session::get('alert-danger') }}",
                duration: 10000,
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)"
                }
            }).showToast();
        @endif
    </script>

</body>

</html>
