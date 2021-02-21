
@extends('layouts.main')

@include('components.blog-nav')

@section('content')
<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-area bg-overlay d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                    <h3 class="text-white">Blog Details</h3>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Blog Area Start ***** -->
<section id="blog" class="section blog-area ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <!-- Single Blog Details -->
                <article class="single-blog-details">
                    <!-- Blog Thumb -->
                    <div class="blog-thumb">
                        <a href="#"><img src="{{ asset('assets/img/blog/blog-7.jpg')}}" alt=""></a>
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content sApp-blog">
                        <!-- Meta Info -->
                        <div class="meta-info d-flex flex-wrap align-items-center py-2">
                            <ul>
                                <li class="d-inline-block p-2">By <a >{{$article->user->name}}</a></li>
                                <li class="d-inline-block p-2"><a >{{ Carbon\Carbon::parse($article->created_at)->format('d F Y')}}</a></li>                                
                            </ul>
                            
                        </div>
                        <!-- Blog Details -->
                        <div class="blog-details">
                            <h3 class="blog-title py-2 py-sm-3"><a>{{$article->title}}</a></h3>
                            {!! $article->body !!}
                            {{-- 
                                <p class="d-none d-sm-block">{{$article->body}}</p>                            
                                <p class="d-block d-sm-none">{{$article->body}}</p>                             
                            --}}                            
                        </div>
                    </div>
                    
                    
                </article>
                
            </div>
            <div class="col-12 col-lg-3">
                <aside class="sidebar">
                                        
                    <!-- Single Widget -->
                    <div class="single-widget">
                        <!-- Tags Widget -->
                        <div class="accordions widget tags-widget" id="tags-accordion">
                            <div class="single-accordion blog-accordion">
                                <h5>
                                    <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion3">Popular Tags
                                    </a>
                                </h5>
                                <!-- Tags Widget Content -->
                                <div id="accordion3" class="accordion-content widget-content collapse show" data-parent="#tags-accordion">
                                    <!-- Tags Widget Items -->
                                    <div class="widget-content tags-widget-items pt-2">
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">sApp</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Bootstrap</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">IOS</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Android</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Landing Page</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Business</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Fashion</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Media</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Lifestyle</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Wordpress</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Web Design</a>
                                        <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Mobile App</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- ***** Blog Area End ***** -->
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