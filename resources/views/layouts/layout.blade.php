<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSRF Tokken --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script> --}}
    <title>
        @yield('title')
    </title>
</head>

<body>
    <nav class="flex items-center justify-between flex-wrap bg-[#706e6eb2] lg:bg-[#a0c8d8bd] md:p-6 p-2 w-full fixed z-50">
        <a href={{ route('home') }} class="flex items-center flex-shrink-0 text-white">
            <img src={{ asset('images/logo.jpeg') }} width="45px" alt="logo">
            <span class="font-semibold md:text-2xl text-md tracking-tight ml-2">McLab</span>
            {{-- Makhdoom Clinical Labortary --}}
        </a>
        <div class="block lg:hidden">
            <button id="hamburger" onclick="hidden_navbar()"
                class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-[#ccc1c1] hover:border-white group">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
                <svg class="hidden w-3 h-3" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 15 15"
                    fill="currentColor">
                    <path
                        d="M2.64,1.27L7.5,6.13l4.84-4.84C12.5114,1.1076,12.7497,1.0029,13,1c0.5523,0,1,0.4477,1,1
                    c0.0047,0.2478-0.093,0.4866-0.27,0.66L8.84,7.5l4.89,4.89c0.1648,0.1612,0.2615,0.3796,0.27,0.61c0,0.5523-0.4477,1-1,1
                    c-0.2577,0.0107-0.508-0.0873-0.69-0.27L7.5,8.87l-4.85,4.85C2.4793,13.8963,2.2453,13.9971,2,14c-0.5523,0-1-0.4477-1-1
                    c-0.0047-0.2478,0.093-0.4866,0.27-0.66L6.16,7.5L1.27,2.61C1.1052,2.4488,1.0085,2.2304,1,2c0-0.5523,0.4477-1,1-1
                    C2.2404,1.0029,2.4701,1.0998,2.64,1.27z">
                    </path>
                </svg>
            </button>
        </div>
        {{-- flex-grow --}}
        <div id="hidden_navbar"
            class="w-full lg:flex fixed top-[94px] lg:z-0 z-50 bg-[#706e6eb2] left-0 px-3 lg:relative lg:flex-col lg:items-center lg:justify-center lg:w-auto lg:top-0 lg:bg-transparent lg:px-0">
            <div class="text-2xl lg:flex-grow lg:py-0 pt-2 pb-6">
                <a href={{ route('home') }} id="nav_home"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-400 hover:underline mr-16">
                    Home
                </a>
                <a href={{ route('patients') }} id="nav_patients"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-[#635757] hover:underline mr-16">
                    Patients
                </a>
                <a href={{ route('n_patients') }} id="nav_n_patients"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-[#635757] hover:underline mr-16">
                    New Patients
                </a>
                <a href={{ route('settings') }} id="nav_settings"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-[#635757] hover:underline">
                    Settings
                </a>
            </div>
            {{-- <div>
                <a href="#"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-[#ccc1c1] hover:bg-white mt-4 lg:mt-0">Download</a>
            </div> --}}
        </div>
        <div class="w-full block lg:flex lg:items-center lg:w-auto">

        </div>
    </nav>

    <div class="flex flex-col justify-center items-center w-full h-full pt-[95px]">
        @yield('content')
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
</body>

</html>
