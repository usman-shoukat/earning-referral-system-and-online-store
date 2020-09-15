
<div>
    <!DOCTYPE html>
    <html lang="zxx" class="no-js">

    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="CodePixar">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>GotJobPak</title>

        <!--
            CSS
            ============================================= -->
        <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    </head>

    <body>

</div>


<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>
<!-- End Header Area -->

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login/Register</h1>

            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<section class="login_box_area section_gap">

    <!--================withdraw Box Area =================-->
    <section class="tracking_box_area ">
<h2 style="margin-left:10%;"><b>Your Registered Progress</b></h2><br><br>
<div class="container">
            <div class=" col">

                <div class="container" style="margin-left: 50px">
                    <div class="row">
                        <div class="col-md-4"><img src="{{ asset('assets/img/JazzCash-logo.jpg') }}" width="200px" data-toggle="modal" data-target="#jazzModal"></div>
                        <div class="col-md-4"><img src="{{ asset('assets/img/paisa.png') }}" width="200px" data-toggle="modal" data-target="#paisaModal" ></div>
                        <div class="col-md-4"><img src="{{ asset('assets/img/Logo-Payoneer.jpg') }}" width="200px" data-toggle="modal" data-target="#payoneerModal"></div>
                    </div>
                </div>

            </div>
    </section><br><br>
    <!--================End withdraw Box Area =================-->
    <!--<========================jazzmodal================>-->
    <div class="modal fade" id="jazzModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Jazzcash Register Form</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
<div class="column" style="
        
            
            text-align: center;
            background-color: white;
            height: 120px; 
            width:50%;
            margin-left:20%;
            line-height: 30px; 
            border: solid 1px white ;
            box-shadow: 5px 10px 8px 0px #888888;
            ">
    <b>My Jazzcash Information:</b>
                    <h4>usmanshoukat</h4>
                    <h4>03067207897</h4>
                    <h4>Amount: <b>5$</b></h4>
  </div>

                    <form class="row login_form" method="POST" action="{{ route('store',['ref'=> $re]) }}" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="Username" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-md-12 form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email"  required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"  required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation"  required autocomplete="new-password">

                        </div>

                        <div class="col-md-12 form-group">
                            <input type="text"class="form-control @error('password') is-invalid @enderror" name="phone" required  placeholder="Phone-number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phone'">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input id="password-confirm"  class="form-control" name="platform" readonly  value="jazzcash">

                        </div>
                         <div class="col-md-12 form-group">
                            <b>Enter Your Jazzcash Transactions Id:</b><br>
                            <p>Please Recheck Your Transactions Id Because Its Important  </p><br>
                              <input id="password-confirm" placeholder="Transactions Id"  type="text" name="image" class="form-control"  >
                           

                        </div>
                         <label class="container">
                            <input type="checkbox"> Recheck Transactions Id
  
  <span class="checkmark"></span>
</label><br><br>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Register</button>

                        </div>

                    </form>
                </div>



            </div>
        </div>
    </div>
    <!--<========================jazzmodal================>-->
    <!--<========================EasyPaisa================>-->
    <div class="modal fade" id="paisaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>EasyPaisa Register Form</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

<div class="column" style="
        
            
            text-align: center;
            background-color: white;
            height: 120px; 
            width:50%;
            margin-left:20%;
            line-height: 30px; 
            border: solid 1px white ;
            box-shadow: 5px 10px 8px 0px #888888;
            ">
    <b>My EasyPaisa Information:</b>
                    <h4>usmanshoukat</h4>
                    <h4>03067207897</h4>
                    <h4>Amount: <b>5$</b></h4>
  </div>
                    <form class="row login_form" method="POST" action="{{ route('store',['ref'=> $re]) }}" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="Username" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-md-12 form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email"  required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"  required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation"  required autocomplete="new-password">

                        </div>

                        <div class="col-md-12 form-group">
                            <input type="text"class="form-control @error('password') is-invalid @enderror" name="phone" required  placeholder="Phone-number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phone'">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input id="password-confirm"  class="form-control" name="platform" readonly  value="EasyPaisa">

                        </div>
                       <div class="col-md-12 form-group">
                        <b>Enter Your Easypaisa Transactions Id:</b><br>
                            <p>Please Recheck Your Transactions Id Because Its Important  </p><br>
                              <input id="password-confirm" placeholder="Transactions Id"  type="text" name="image" class="form-control"  >
                        </div>
                         <label class="container">
                            <input type="checkbox"> Recheck Transactions Id
  
  <span class="checkmark"></span>
</label><br><br>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Register</button>

                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--<========================EasyPaisa================>-->

    <!--<========================payoneer================>-->
    <div class="modal fade" id="payoneerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Payoneer</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="column" style="
        
            
            text-align: center;
            background-color: white;
            height: 120px; 
            width:60%;
            margin-left:20%;
            line-height: 30px; 
            border: solid 1px white ;
            box-shadow: 5px 10px 8px 0px #888888;
            ">
    <b>My Payoneer Information:</b>
                    <h4>zain.haider420@gmail.com</h4>
                    <h4>Amount: <b>5$</b></h4>
  </div>
          
                    <form class="row login_form" method="POST" action="{{ route('store',['ref'=> $re]) }}" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="Username" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-md-12 form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email"  required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"  required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation"  required autocomplete="new-password">

                        </div>

                        <div class="col-md-12 form-group">
                            <input type="text"class="form-control @error('password') is-invalid @enderror" name="phone" required  placeholder="Phone-number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phone'">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input id="password-confirm"  class="form-control" name="platform" readonly  value="Payoneer">

                        </div>
                        <div class="col-md-12 form-group">
                        <b>Enter Your Payoneer Transactions Id:</b><br>
                            <p>Please Recheck Your Transactions Id Because Its Important  </p><br>
                              <input id="password-confirm" placeholder="Transactions Id"  type="text" name="image" class="form-control"  >
                        </div>
                
                        <label class="container">
                            <input type="checkbox"> Recheck Transactions Id
  
  <span class="checkmark"></span>
</label><br><br>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Register</button>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--<========================Payoneer================>-->



</section>
<!--================End Login Box Area =================-->

<div>
<!-- start footer Area -->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                       WELLCOME to "GOT JOB PAKISTAN"
WE ARE PRIVATE WEBSITE FOR SHOPPING
If you've any questions regarding web site or you're facing vany difficulties
We have very professional support who may help You with lots of questions.
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6></h6>
                    <p></p>
                    <div class="" id="mc_embed_signup">

                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="form-inline">

                            <div class="d-flex flex-row">


                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <!-- <div class="col-lg-4 col-md-4">
                                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                        </div>  -->
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="img/i1.jpg" alt=""></li>
                        <li><img src="img/i2.jpg" alt=""></li>
                        <li><img src="img/i3.jpg" alt=""></li>
                        <li><img src="img/i4.jpg" alt=""></li>
                        <li><img src="img/i5.jpg" alt=""></li>
                        <li><img src="img/i6.jpg" alt=""></li>
                        <li><img src="img/i7.jpg" alt=""></li>
                        <li><img src="img/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="https://www.facebook.com/105953037925468"><i class="fa fa-facebook"></i></a>
                        <a href="https://instagram.com/gotjobpak?igshid=1bm73g3oiu2f7"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/GotjobPk"><i class="fa fa-twitter"></i></a>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://xzoomtech.com" target="_blank">XzoomTech</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/nouislider.min.js')}}"></script>
<script src="{{asset('assets/js/countdown.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{asset('assets/js/gmaps.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
