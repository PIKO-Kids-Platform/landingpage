
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
                    <h3 class="text-white">Blog</h3>
                    
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
                <div class="row">     
                    @foreach ($articles as $article)
                    <div class="col-12 col-md-6" style="padding-bottom: 30px">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a><img src="{{ URL::to($article->img_url) }}" alt=""></a>
                                                                
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content p-4">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a>{{$article->user->name}}</a></li>
                                    <li><a>{{ Carbon\Carbon::parse($article->created_at)->format('d F Y')}}</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="{{route('blog.detail.show', $article->id)}}">{{$article->title}}</a></h3>
                                <p>
                                    {{ \Illuminate\Support\Str::limit($article->body, 100, $end=' ...') }}
                                </p>
                                <a href="{{route('blog.detail.show', $article->id)}}" class="blog-btn mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach               
                    
                                                        
                    
                </div>
                
                <!-- Pagination -->                                                
                <!-- module pagination begin -->
                <div class="row">
                    <div class="col-12">
                        <div class="pagination justify-content-center">
                            {{ $articles->links('components.pagination') }}        
                        </div>
                    </div>
                </div>
                <div>
                    <br>
                </div>
                
                <!-- module pagination end -->                        
                
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

