
<x-webtoplinkbar/>
<x-webnavbar/>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
@endif


    <!-- Start Banner Area -->
        <section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Blog Page</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="category.html">Blog</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section><br>
        <!-- End Banner Area -->

        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog_left_sidebar">
                            @foreach ($blog as $getalladmins)
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <ul class="blog_meta list">
                                            <li><a href="#">{{$getalladmins->artname}}<i class="lnr lnr-user"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="{{ asset('admin/blog/'.$getalladmins->imqge) }}"   class="img-fluid" width="100%;"  alt="" title="">
                                        <div class="blog_details">
                                            <a href="#">
                                                <h2>{{$getalladmins->title}}</h2>
                                            </a>
                                            <p>{{$getalladmins->shortdec}}.</p>
                                            <a href="{{route('viewmore',[$getalladmins->id])}}" class="white_bg_btn">View More</a>

                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--================Blog Area =================-->


            <br><br><br>
            <x-webfooter/>
