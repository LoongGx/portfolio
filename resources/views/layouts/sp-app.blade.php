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
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    @yield('styles')
    <!-- Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="relative bg-center bg-cover bg-no-repeat bg-fixed" style="background-image: url('{{ asset('img/bg/sunset_bg.jpg') }}')">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('personal:portfolio.index') }}">PORTFOLIO</a>

            <!-- Burger Menu -->
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-200 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" target="__blank">My Projects</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</body>
<!-- JavaScript Bundle with Popper -->
<script>
const navToggle = document.getElementById("nav-toggle");
const navbarContent = document.getElementById("navbarContent");

navToggle.addEventListener("click", function(){
    navbarContent.classList.toggle("collapse");
});

</script>
@yield('scripts')
</html>