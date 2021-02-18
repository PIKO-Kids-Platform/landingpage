
@extends('layouts.main')

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
                                <li class="d-inline-block p-2">By <a href="#">Anna Swford</a></li>
                                <li class="d-inline-block p-2"><a href="#">05 Feb, 2018</a></li>
                                <li class="d-inline-block p-2"><a href="#">2 Comments</a></li>
                            </ul>
                            <!-- Blog Share -->
                            <div class="blog-share ml-auto d-none d-sm-block">
                                <!-- Social Icons -->
                                <div class="social-icons d-flex justify-content-center">
                                    <a class="bg-white facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="bg-white twitter" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="bg-white google-plus" href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Details -->
                        <div class="blog-details">
                            <h3 class="blog-title py-2 py-sm-3"><a href="#">How to promote your product with this awesome landing page</a></h3>
                            <p class="d-none d-sm-block">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                            <p class="d-block d-sm-none">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                            <blockquote class="blockquote px-4 py-3 my-3 ml-4">
                                <p class="d-none d-sm-block">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>
                                <p class="d-block d-sm-none">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            </blockquote>
                            <p class="d-none d-sm-block">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            <p class="d-block d-sm-none">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33.</p>
                        </div>
                    </div>
                    <!-- Blog Comments -->
                    <div class="blog-comments">
                        <!-- Admin -->
                        <div class="admin media py-3">
                            <!-- Admin Thumb -->
                            <div class="admin-thumb avatar-lg">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatar/avatar-1.png')}}" alt="">
                            </div>
                            <!-- Admin Content -->
                            <div class="admin-content media-body pl-3 pl-sm-4">
                                <h4 class="admin-name mb-2"><a href="#">Anna Swford</a></h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </div>
                        
                    </div>
                    
                </article>
            </div>
            <div class="col-12 col-lg-3">
                <aside class="sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget">
                        <!-- Search Widget -->
                        <div class="widget-content search-widget">
                            <form action="#">
                                <input type="text" placeholder="Enter your keywords">
                            </form>
                        </div>
                    </div>
                    <!-- Single Widget -->
                    <div class="single-widget">
                        <!-- Category Widget -->
                        <div class="accordions widget catagory-widget" id="cat-accordion">
                            <div class="single-accordion blog-accordion">
                                <h5>
                                    <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion1">Categories
                                    </a>
                                </h5>
                                <!-- Category Widget Content -->
                                <div id="accordion1" class="accordion-content widget-content collapse show" data-parent="#cat-accordion">
                                    <!-- Category Widget Items -->
                                    <ul class="widget-items">
                                        <li><a href="#" class="d-flex p-3"><span>Web Design</span><span class="ml-auto">(14)</span></a></li>
                                        <li><a href="#" class="d-flex p-3"><span>App Landing</span><span class="ml-auto">(32)</span></a></li>
                                        <li><a href="#" class="d-flex active p-3"><span>Wordpress</span><span class="ml-auto">(27)</span></a></li>
                                        <li><a href="#" class="d-flex p-3"><span>UI Design</span><span class="ml-auto">(18)</span></a></li>
                                        <li><a href="#" class="d-flex p-3"><span>Bootstrap</span><span class="ml-auto">(15)</span></a></li>
                                        <li><a href="#" class="d-flex p-3"><span>Web Template</span><span class="ml-auto">(29)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget -->
                    <div class="single-widget">
                        <!-- Post Widget -->
                        <div class="accordions widget post-widget" id="post-accordion">
                            <div class="single-accordion">
                                <h5>
                                    <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion2">Popular Post
                                    </a>
                                </h5>
                                <!-- Post Widget Content -->
                                <div id="accordion2" class="accordion-content widget-content collapse show" data-parent="#post-accordion">
                                    <!-- Post Widget Items -->
                                    <ul class="widget-items">
                                        <li>
                                            <a href="#" class="single-post align-items-center align-items-lg-start media p-3">
                                                <!-- Post Thumb -->
                                                <div class="post-thumb avatar-md">
                                                    <img class="align-self-center" src="{{ asset('assets/img/avatar/avatar-1.png')}}" alt="">
                                                </div>
                                                <div class="post-content media-body pl-3">
                                                    <p class="post-date mb-2">05 Feb, 2018</p>
                                                    <h6>Promote Your Apps With sApp</h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="single-post align-items-center align-items-lg-start media p-3">
                                                <!-- Post Thumb -->
                                                <div class="post-thumb avatar-md">
                                                    <img class="align-self-center" src="{{ asset('assets/img/avatar/avatar-2.png')}}" alt="">
                                                </div>
                                                <div class="post-content media-body pl-3">
                                                    <p class="post-date mb-2">09 Apr, 2018</p>
                                                    <h6>Sell Your Product Like Never Before</h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="single-post align-items-center align-items-lg-start media p-3">
                                                <!-- Post Thumb -->
                                                <div class="post-thumb avatar-md">
                                                    <img class="align-self-center" src="{{ asset('assets/img/avatar/avatar-3.png')}}" alt="">
                                                </div>
                                                <div class="post-content media-body pl-3">
                                                    <p class="post-date mb-2">13 Jul, 2018</p>
                                                    <h6>Built For Passionate People</h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="single-post align-items-center align-items-lg-start media p-3">
                                                <!-- Post Thumb -->
                                                <div class="post-thumb avatar-md">
                                                    <img class="align-self-center" src="{{ asset('assets/img/avatar/avatar-4.png')}}" alt="">
                                                </div>
                                                <div class="post-content media-body pl-3">
                                                    <p class="post-date mb-2">03 Oct, 2018</p>
                                                    <h6>Get Unlimited Offers &amp; Plans</h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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