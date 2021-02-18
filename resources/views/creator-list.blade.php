<!doctype html>
<html class="no-js" lang="en">

@include('components.head')

<body class="homepage-3">
    <!--====== Preloader Area Start ======-->
    <div class="preloader-main">
        <div class="preloader-wapper">
            <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                <defs>
                    <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                    </filter>
                </defs>
                <g filter="url(#goo)">
                    <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
                    <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
                </g>
            </svg>
            <div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </div>

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">
        
        @include('components.header')
        

        <!-- ***** Service Area Start ***** -->
        <section class="section service-area bg-inherit overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <!-- Service Text -->
                        <div class="service-text pt-4 pt-lg-0 px-0 px-lg-4">
                            <h2 class="text-capitalize mb-4">Signed Up - Creator Emails</h2>
                            <!-- Service List -->
                            <ul class="service-list style-two">
                                
                                @foreach ($users as $user)
                                <li class="single-service py-2">
                                    <div class="service-text">
                                        <p>{{$user->email}}</p>
                                        <p>{{$user->created_at}}</p>
                                    </div>                                        
                                </li>                                
                                @endforeach
                            </ul>
                            <a href="{{route('creator.list')}}" class="btn btn-bordered mt-4">Refresh</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2 d-none d-md-block">
                        <!-- Service Thumb -->
                        <div class="service-thumb mx-auto">
                            <img src="{{ asset('assets/img/welcome/banner-piko.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        

        <!--====== Footer Area Start ======-->
        <footer class="footer-area">
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left">&copy; Copyrights 2021 Teknologi Kreatif Indonesia.</div>
                                <!-- Copyright Right -->
                                <div class="copyright-right">Made with <i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->
    </div>
    
    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery/jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('assets/js/plugins/plugins.min.js')}}"></script>

    <!-- Active js -->
    <script src="{{ asset('assets/js/active.js')}}"></script>
</body>

</html>