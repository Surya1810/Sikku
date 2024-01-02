<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sikku | @yield('title')</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Archivo:400,500,600,700,900' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,500,600,700,900' rel='stylesheet'>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/6.5.1/css/all.min.css') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicons/safari-pinned-tab.svg') }}" color="#3f352c">
    <meta name="msapplication-TileColor" content="#131313">
    <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Our style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('css')
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md border-bottom fixed-top bg-white" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
            <a class="navbar-brand my-2" href="{{ route('home') }}"> <img src="{{ asset('assets/logo/logo.png') }}"
                    height="30" alt="Sikku" loading="lazy" /></a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Cara Kerja</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Portofolio</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Area Jangkauan</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas-footer">

                </div>
            </div>
            <div class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="btn btn-sikku-main px-4" href="{{ route('login') }}">Tanya Harga</a>
                </li>
            </div>
        </div>
    </nav>

    <main class="margin-top">

        @yield('content')


        <!-- Back to top button -->
        <button type="button" class="btn btn-floating btn-lg shadow-md rounded-circle d-none" id="btn-back-to-top"
            aria-label="Back to Top">
            <i class="fas fa-angle-up fa-2xl text-center" style="color: #fff"></i>
        </button>
        <!-- Whatsapp button -->
        <button type="button" class="btn btn-floating btn-lg border-0 shadow-md rounded-circle d-none" id="whatsapp"
            aria-label="Whatsapp">
            <a href="https://wa.me/6287810081994" target="_blank"><i class="fa-brands fa-whatsapp fa-2xl text-center"
                    style="color: #fff;margin-top: 10px;"></i></a>
        </button>
        <!-- Offcanvas button -->
        <button class="btn btn-floating btn-lg" type="button" id="offcanvas" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
            <i class="fas fa-angle-right fa-2xl" style="color: #fff"></i>
        </button>
        <button class="btn btn-floating btn-lg d-none d-md-block" type="button" id="offcanvas"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
            aria-label="Offcanvas">
            <i class="fas fa-angle-left fa-2xl" style="color: #fff"></i>
        </button>
    </main>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        //Back to Top Button
        let mybutton = document.getElementById("btn-back-to-top");
        let wabutton = document.getElementById("whatsapp");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.classList.remove("d-none");
                wabutton.classList.remove("d-none");
            } else {
                mybutton.classList.add("d-none");
                wabutton.classList.add("d-none");
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    @stack('scripts')

</body>

</html>
