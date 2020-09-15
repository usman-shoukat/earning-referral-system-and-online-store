{{--<-------toplinkcomponent-------->--}}
<x-toplinks/>
{{--<-------toplinkcomponent-------->--}}

<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="assets/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Login</a></li>
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

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="assets/img/login.jpg" alt="">
                    <div class="hover" style="">
                        <h1><b>Welcome To </b></h1><br>
                        <h1> <p>GotJobPak</p></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Log in to enter</h3>
                    <form class="row login_form" method="POST" action="{{ route('login') }}" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="email" ">
                            <div class="col-md-12">
                                @if(\Illuminate\Support\Facades\Session::has('sucess'))
                                    <div class="alert alert-danger">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            <div class="col-md-12">
                                @if(\Illuminate\Support\Facades\Session::has('error'))
                                    <div class="alert alert-danger">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="f-option2" class="form-check-label" for="remember">Keep me logged in</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Log In</button>
                            @if (Route::has('password.request'))
                                <a  href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <b><a  href="{{ route('registered') }}">
                                    {{ __('Register') }}
                                </a></b>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

{{--<-----------------footercomponents--------->--}}
<x-footer/>
{{--<-----------------footercomponents--------->--}}
