
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
        </section>
        <!-- End Banner Area -->

        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img src="{{ asset('admin/blog/'.$getalladmins->imqge) }}"  class="img-fluid"  alt="" title="">
                                </div>
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <ul class="blog_meta list">
                                        <li><a href="#">{{$getalladmins->artname}}<i class="lnr lnr-user"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2>{{$getalladmins->title}}</h2>
                                <p class="excert">
                                    {{$getalladmins->dec}}.
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    {{$getalladmins->qoute}}.
                                </div>

                            </div>
                        </div>

                </div>
            </div>
        </section>
        <!--================Blog Area =================-->











    <br><br><br>
<x-webfooter/>
