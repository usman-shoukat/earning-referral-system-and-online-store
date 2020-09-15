<x-webtoplinkbar/>
<x-webnavbar/>


<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1> {{$jazzid}} withdraw</h1>
                <nav class="d-flex align-items-center">
                    <a href="#">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Withdraw</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="login_form_inner">
                    @if ($jazzid == 'jazzcash')
                        <h3>Enter Information For {{$jazzid}} Withdraw </h3>
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                        @endif
                        <form class="row login_form" action="{{route('withraw.apply',['jazz'=> $jazzid])}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="JazzCash Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="int" class="form-control" id="name" name="phone_number" placeholder="JazzCash Phone_Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="amount" placeholder="Amount" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            @if(auth()->user()->amount >= 9)
                             <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Apply</button>
                            </div>
                            @else
                             <div class="col-md-12 form-group">
                                <button  value="submit" disabled class="primary-btn">Your Amount Is Less then 9$</button>
                            </div>
                            @endif
                           
                        </form>
                    @endif
                        @if ($jazzid == 'easypaisa')
                            <h3>Enter Information For {{$jazzid}} Withdraw </h3>
                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                            @endif
                            <form class="row login_form" action="{{route('withraw.apply',['jazz'=> $jazzid])}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Easypaisa Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="phone_number" placeholder="Easypaisa Phone_Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="amount" placeholder="Amount" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                </div>
                                 @if(auth()->user()->amount >= 9)
                             <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Apply</button>
                            </div>
                            @else
                             <div class="col-md-12 form-group">
                                <button  value="submit" disabled class="primary-btn">Your Amount Is Less then 9$</button>
                            </div>
                            @endif
                            </form>
                        @endif
                        @if ($jazzid == 'skrill')
                            <h3>Enter Information For {{$jazzid}} Withdraw </h3>
                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                            @endif
                            <form class="row login_form" action="{{route('withraw.apply',['jazz'=> $jazzid])}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Skrill Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="email" placeholder="skrill Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="amount" placeholder="Amount" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                </div>
                                 @if(auth()->user()->amount >= 9)
                             <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Apply</button>
                            </div>
                            @else
                             <div class="col-md-12 form-group">
                                <button  value="submit" disabled class="primary-btn">Your Amount Is Less then 9$</button>
                            </div>
                            @endif
                            </form>
                        @endif
                        @if ($jazzid == 'payoneer')
                            <h3>Enter Information For {{$jazzid}} Withdraw </h3>
                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                            @endif
                            <form class="row login_form" action="{{route('withraw.apply',['jazz'=> $jazzid])}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Payoneer Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="email" placeholder="Payoneer Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="amount" placeholder="Amount" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                                </div>
                                 @if(auth()->user()->amount >= 9)
                             <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Apply</button>
                            </div>
                            @else
                             <div class="col-md-12 form-group">
                                <button  value="submit" disabled class="primary-btn">Your Amount Is Less then 9$</button>
                            </div>
                            @endif
                            </form>
                        @endif


                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->






<br><br><br>
<x-webfooter/>
