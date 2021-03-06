

@extends('layouts.main')

@include('components.index-nav')

@section('content')
    
<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
    
    <div class="container">

        @if (Session::has('message'))                                    
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
        @endif

        <div class="row align-items-center">
            <!-- Welcome Intro Start -->
            
            <div class="col-12 col-md-7 col-lg-6">
                
                <div class="welcome-intro">
                    
                    <h2 class="text-white">PIKO adalah perpustakaan digital untuk anak-anak berusia dibawah 12 tahun</h1>
                    <p class="text-white my-4">Menyediakan akses kepada buku-buku
                    berkualitas yang akan menemani anak-anak
                    Anda belajar dan bermain.</p>
                    <!-- Store Buttons -->
                    <div class="button-group store-buttons d-flex">                        
                        <a target="_blank" href="https://drive.google.com/file/d/1KOCCTan7vcJPSsRk6STa9bz47ItIOvzG/view?usp=sharing">
                            <img src="https://haipiko.com/assets/img/icon/google-play.png" alt="">
                        </a>
                        <!-- <a href="#">
                            <img src="assets/img/icon/app-store.png" alt="">
                        </a> -->
                    </div>
                    <span class="d-inline-block text-white fw-3 font-italic mt-3">*Minimum Viable Product Version</span>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-6">
                <!-- Welcome Thumb -->
                <div class="" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/welcome/banner-piko.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape-bottom">
        <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
            <title>sApp Shape</title>
            <desc>Created with Sketch</desc>
            <defs></defs>
            <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                    <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
                </g>
            </g>
        </svg>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Screenshots Area Start ***** -->
<section id="collections" class="section screenshots-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <!-- <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                        <i class="far fa-lightbulb text-primary mr-1"></i>
                        <span class="text-primary">Awesome</span>
                        Interface
                    </span> -->
                    <h2 class="text-capitalize">Koleksi Buku</h2>
                    <p class="d-none d-sm-block mt-4">Jelajahi minat dan bakat anak Anda dengan membaca buku yang memiliki gambar lucu dan menyenangkan. Kami akan terus menambah koleksi buku PIKO.</p>
                    <p class="d-block d-sm-none mt-4">Jelajahi minat dan bakat anak Anda dengan membaca buku yang memiliki gambar lucu dan menyenangkan. Kami akan terus menambah koleksi buku PIKO.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- App Screenshot Slider Area -->
                <div class="app-screenshots">
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                        <img src="{{ asset('assets/img/bookCovers/cover_0.png')}}" alt="">
                    </div>
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                        <img src="{{ asset('assets/img/bookCovers/cover_1.png')}}" alt="">
                    </div>
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                        <img src="{{ asset('assets/img/bookCovers/cover_2.png')}}" alt="">
                    </div>
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                        <img src="{{ asset('assets/img/bookCovers/cover_3.png')}}" alt="">
                    </div>
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                        <img src="{{ asset('assets/img/bookCovers/cover_4.png')}}" alt="">
                    </div>
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                        <img src="{{ asset('assets/img/bookCovers/cover_5.png')}}" alt="">
                    </div>
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                        <img src="{{ asset('assets/img/bookCovers/cover_more.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Screenshots Area End ***** -->    
        
<!-- ***** Advantages Area Start ***** -->
<section class="section service-area bg-gray overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <!-- Service Text -->
                <div class="service-text pt-4 pt-lg-0">
                    <h2 class="text-capitalize mb-4">Keunggulan Buku PIKO</h2>
                    <!-- Service List -->
                    <ul class="service-list">
                        <!-- Single Service -->
                        <li class="single-service media py-2">
                            <div class="service-icon pr-4">
                                <span><i>+</i></span>
                            </div>
                            <div class="service-text media-body">
                                <p><b>Access Books Everywhere and Everytime</b></p>
                                <p>Akses buku PIKO kapanpun dan dimanapun. </p>
                            </div>
                        </li>
                        <!-- Single Service -->
                        <li class="single-service media py-2">
                            <div class="service-icon pr-4">
                                <span><i>+</i></span>
                            </div>
                            <div class="service-text media-body">
                            <p><b>Full of Picture Books</b></p>
                            <p>PIKO menghadirkan buku berkualitas dengan gambar-gambar yang menarik dan edukatif.</p>
                            </div>
                        </li>
                        <!-- Single Service -->
                        <li class="single-service media py-2">
                            <div class="service-icon pr-4">
                                <span><i>+</i></span>
                            </div>
                            <div class="service-text media-body">
                            <p><b>Animation Books</b></p>
                            <p>PIKO memiliki buku beranimasi, sehingga buah hati dapat lebih tertarik dan interaktif ketika membaca PIKO.</p>
                            </div>
                        </li>
                        <!-- Single Service -->
                        <li class="single-service media py-2">
                            <div class="service-icon pr-4">
                                <span><i>+</i></span>
                            </div>
                            <div class="service-text media-body">
                            <p><b>Audio Books</b></p>
                            <p>PIKO dapat dinikmati oleh siapa saja dengan adanya Audio Book. Anak dengan kebutuhan khusus tetap dapat menikmati PIKO.</p>
                            </div>
                        </li>
                    </ul>
                    <!-- <a href="#" class="btn btn-bordered mt-4">Learn More</a> -->
                </div>
            </div>
            <div class="col-12 col-lg-4 order-1 order-lg-2 d-none d-lg-block">
                <!-- Service Thumb -->
                <div class="service-thumb mx-auto">
                    <img src="{{ asset('assets/img/features/mascot.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Advantages Area End ***** -->

<!-- ***** Screenshot Area Start ***** -->
<section id="screenshots" class="section screenshots-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <!-- <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                        <i class="far fa-lightbulb text-primary mr-1"></i>
                        <span class="text-primary">Awesome</span>
                        Interface
                    </span> -->
                    <h2 class="text-capitalize">3 Langkah Membaca PIKO</h2>
                    <p class="d-none d-sm-block mt-4">Pilih Koleksi Buku, Buka Buku yang ingin dibaca, Mari Membaca!</p>
                    <p class="d-block d-sm-none mt-4">Pilih Koleksi Buku, Buka Buku yang ingin dibaca, Mari Membaca!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- App Screenshot Slider Area -->
                <div class="app-screenshots">
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                        <img src="{{ asset('assets/img/screenshots/ss-1.png')}}" alt="">
                    </div>
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                    <img src="{{ asset('assets/img/screenshots/ss-2.png')}}" alt="">
                    </div>
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot">
                    <img src="{{ asset('assets/img/screenshots/ss-3.png')}}" alt="">
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Screenshots Area End ***** -->

<!-- ***** Creator Invitation Area Start ***** -->
<section id="creator" class="section download-area overlay-dark ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Download Text -->
                <div class="download-text text-center">
                    <h2 class="text-white">Hai Penulis dan Ilustrator, Ingin buku kalian masuk PIKO?</h2>
                    <p class="text-white my-3 d-none d-sm-block">Mari bersama-sama wujudkan mimpi meningkatkan literasi anak-anak di Indonesia.</p>
                    <p class="text-white my-3 d-block d-sm-none">Mari bersama-sama wujudkan mimpi meningkatkan literasi anak-anak di Indonesia.</p>
                    <!-- Store Buttons -->
                    <div class="button-group store-buttons d-flex justify-content-center">
                        <a href="{{ route('download.invitation') }}">
                            <img src="{{ asset('assets/img/icon/downloadInvitation.png')}}" alt="">
                        </a>
                        
                    </div>
                    <span class="d-inline-block text-white fw-3 font-italic mt-3">* Download Invitation to Know More About PIKO Creator.</span>
                    
                </div>
            </div>

            

            <div class="col-12 col-md-10 col-lg-7">
            <span class="d-inline-block text-white fw-3 font-italic mt-3"></span>
                <div class="subscribe-content text-center">                            
                    <!-- Subscribe Form -->
                    <form class="subscribe-form" method="POST" action="{{ route('join') }}">
                        @csrf
                        <div class="form-group">
                            <input required type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-lg btn-block">Join Creator!</button>
                        <span class="d-inline-block text-white fw-3 font-italic mt-3">* Dengan bergabung pada PIKO Early Adopters Program, Saya menyetujui untuk menaati <a target="_blank" class="link" href="{{ route('tos') }}">Syarat dan Ketentuan</a> yang berlaku.</span>
                    </form>
                </div>
            </div>

        </div>
    </div>
    
</section>
<!-- ***** Creator Invitation Area End ***** -->
        
@endsection

@section('scripts')
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

@endsection