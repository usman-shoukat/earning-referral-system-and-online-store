{{--<-------toplinkcomponent-------->--}}
<x-toplinks/>
{{--<-------toplinkcomponent-------->--}}

<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="assets/img/logo.png" alt=""></a>
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

        <div class="container">
            <div class=" col">

                <div class="container" style="margin-left: 50px">
                    <div class="row">
                        <div class="col-md-4"><img src="assets/img/JazzCash-logo.jpg" width="200px" data-toggle="modal" data-target="#jazzModal"></div>
                        <div class="col-md-4"><img src="assets/img/paisa.png" width="200px" data-toggle="modal" data-target="#paisaModal" ></div>
                        <div class="col-md-4"><img src="assets/img/Logo-Payoneer.jpg" width="200px" data-toggle="modal" data-target="#payoneerModal"></div>
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

                    <b>My Jazzcash Information:</b>
                    <h4>usmanshoukat</h4>
                    <h4>03067207897</h4>
                    <h4>Amount: <b>5$</b></h4>

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
                            <b>Upload Of Your Jazzcash Transactions Id:</b><br>
                            <input type="text" name="image" id="fileToUpload">

                        </div>
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


                    <b>My EasyPaisa Information:</b>
                    <h4>usmanshoukat</h4>
                    <h4>03067207897</h4>
                    <h4>Amount: <b>5$</b></h4>
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
                            <b>Upload Of Your EasyPaisa Transactions Id:</b><br>
                            <input type="text" name="image" id="fileToUpload">

                        </div>
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

                    <b>My Payoneer Information:</b>
                    <h4>zain.haider420@gmail.com</h4>
                    <h4>Amount: <b>5$</b></h4>
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
                            <b>Upload Of Your Payoneer Transactions Id:</b><br>
                            <input type="text" name="image" id="fileToUpload">

                        </div>
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

{{--<-----------------footercomponents--------->--}}
<x-footer/>
{{--<-----------------footercomponents--------->--}}

