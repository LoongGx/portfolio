<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Portfolio') }}</title>

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fa5.min.css') }}">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>
    <!-- Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="relative bg-center bg-cover bg-no-repeat bg-fixed" style="background-image: url('{{ asset('img/bg/sunset_bg.jpg') }}')">
    <!--Nav-->
    <nav id="header" class="fixed w-full top-0 bg-gray-900">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">

            <!-- PortFolio -->
            <div class="pl-4 flex items-center">
                <button type="button" id="portfolioHome" class="no-underline hover:no-underline font-bold text-2xl lg:text-3xl text-gray-200 hover:text-white focus:outline-none">PORTFOLIO</button>
            </div>
            
            <!-- Burger Menu -->
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-200 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            
            <!-- Menu List -->
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-transparent lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block font-bold no-underline py-2 px-4 cursor-pointer text-gray-200 hover:text-white" id="aboutMe">About Me</a>
                    </li>
                    
                    <li class="mr-3">
                        <a class="inline-block font-bold no-underline text-gray-200 hover:text-white hover:text-underline py-2 px-4 cursor-pointer" id="myExp">My Experience</a>
                    </li>

                    <li class="mr-3">
                        <a class="inline-block font-bold no-underline text-gray-200 hover:text-white hover:text-underline py-2 px-4" href="{{ route('home') }}" id="mySkill">My Project</a>
                    </li>
                    
                    <li class="mr-3">
                        <a class="inline-block font-bold no-underline text-gray-200 hover:text-white hover:text-underline py-2 px-4" href="#" id="mySkill">My Skill</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
<script>
const navToggle = document.getElementById("nav-toggle");
const navContent = document.getElementById("nav-content");
const portfolioHome = document.getElementById("portfolioHome");

portfolioHome.addEventListener("click", function(){
    window.scrollTo({top: 0, behavior: 'smooth'});
});

navToggle.addEventListener("click", function(){
    navContent.classList.toggle("hidden");
});
</script>
@yield('scripts')
</html>