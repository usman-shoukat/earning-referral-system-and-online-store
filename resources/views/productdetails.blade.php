
<x-webtoplinkbar/>
<x-webnavbar/>

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
                <h1>Product Details Page</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single-product.html">product-details</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="col-md-12">
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
@endif

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
              <img  src="{{ asset('admin/'.$Offerimage->pro_img) }}"   alt="" title="">
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{$Offerimage->pro_title}}</h3>
                    <h2>${{$Offerimage->pro_price}}</h2>
                    <ul class="list">
                        <li><a class="active" href="#"><span>Category</span> : {{$Offerimage->pro_cat}}</a></li>
                        <li><a href="#"><span>Availibility</span> : In Stock</a></li>
                    </ul>
                    <p>{{$Offerimage->pro_dec}}.</p>
                    <div class="card_area d-flex align-items-center">
                        <a class="primary-btn" href="{{route('add.tobag',[$Offerimage->id])}}">Add to Bag</a>
                        <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                        <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->


<br><br><br>
<x-webfooter/>
