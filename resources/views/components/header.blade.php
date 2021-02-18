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
            <nav>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#collections">Collections</a>
                    </li>                            
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#screenshots">Screenshots</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#creator">Creator</a>
                    </li>                            
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- ***** Header End ***** -->