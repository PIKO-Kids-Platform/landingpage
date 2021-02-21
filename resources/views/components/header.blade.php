<!-- ***** Header Start ***** -->
<header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
    <div class="container position-relative">
        <a class="navbar-brand" href="{{ route("index") }}">
            <img class="navbar-brand-regular" src="{{ asset('assets/img/logo/logo-white.png')}}" alt="brand-logo">
            <img class="navbar-brand-sticky" src="{{ asset('assets/img/logo/logo.png')}}" alt="sticky brand-logo">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-inner">
            <!--  Mobile Menu Toggler -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            @yield('nav')
            
        </div>
    </div>
</header>
<!-- ***** Header End ***** -->