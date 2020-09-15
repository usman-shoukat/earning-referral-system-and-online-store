
<x-webtoplinkbar/>
<x-webnavbar/>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
@endif

<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">

                <!-- single-slide -->
                <div class="row single-slide align-items-center d-flex">
                    <div class="col-lg-5 col-md-6">
                        <div class="banner-content">
                            <h1>{{$Mainimage->title}}</h1>
                            <p>{{$Mainimage->dec}}.</p>

                        </div>
                    </div>
                    <div class="col-lg-6" style="margin-left:90px;">
                        <div class="banner-img">
                            <img class="img-fluid"  src="{{ asset('admin/mainimg/'.$Mainimage->image) }}" style="border-radius: 10%;" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- start product Area -->
<br><br><br>
<section class="">
    <!-- single product slide -->
    <div class="col-md-12">
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
        @endif
    </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest Products</h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                @foreach ($getalladmin as $getalladmins)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <td><img class="img-fluid"  src="{{ asset('admin/'.$getalladmins->pro_img) }}" width="100px" alt="" title=""></td>
                            <div class="product-details">
                                <a href="{{$getalladmins->id}}"><h6>{{$getalladmins->pro_title}}</h6></a>
                                <div class="price">
                                    <h6>${{$getalladmins->pro_price}}</h6>

                                </div>
                                <div class="prd-bottom">
                                    <a href="{{route('add.bag',[$getalladmins->id])}}" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">compare</p>
                                    </a>
                                    <a href="{{route('productdetails',[$getalladmins->id])}}" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</section>


        <!-- Start exclusive deal Area -->
<section class="exclusive-deal-area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding exclusive-left">
                <div class="row clock_sec clockdiv" id="">
                    <div class="col-lg-12">
                        <h1>Exclusive Hot Deal Ends Soon!</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="row clock-wrap">
                            <div class="col clockinner1 clockinner">
                                <h1 class="days" id="demo">1</h1>
                                <span class="smalltext">Days</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="hours" id="demohr">2</h1>
                                <span class="smalltext">Hours</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="minutes" id="demomin">4</h1>
                                <span class="smalltext">Mins</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="seconds" id="demosec">59</h1>
                                <span class="smalltext">Secs</span>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    // Set the date we're counting down to

                    var countDownDate = new Date("{{$Offerimage->date}}").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                        // Get today's date and time
                        var now = new Date().getTime();

                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;

                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Output the result in an element with id="demo"
                        document.getElementById("demo").innerHTML = days  ;
                        document.getElementById("demohr").innerHTML = hours  ;
                        document.getElementById("demomin").innerHTML = minutes  ;
                        document.getElementById("demosec").innerHTML = seconds  ;

                        // If the count down is over, write some text
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("demo").innerHTML = "noth";
                        }

                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("demohr").innerHTML = "ing";
                        }
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("demomin").innerHTML = "off";
                        }
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("demosec").innerHTML = "ers";
                        }

                    }, 1000);
                </script>

            </div>
            <div class="col-lg-6 no-padding exclusive-right">


                <img class="img-fluid" src="{{ asset('admin/offerimg/'.$Offerimage->image) }}"  alt="" title="">
                <div class="product-details">
                    <div class="price">

                    </div>
                    <h4>{{$Offerimage->title}}</h4>

                </div>

                <!-- single exclusive carousel -->

            </div>
        </div>
    </div>
</section>
<br><br><br>
<x-webfooter/>
