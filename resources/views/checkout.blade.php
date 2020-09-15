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
                <h1>Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single-product.html">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->


<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="returning_customer">
           
           
        </div>
       
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="{{route('checkout.save')}}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" placeholder="First name" id="first" name="fname">
                          
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" placeholder="Last name" id="last" name="lname">
                           
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" placeholder="Phone number" id="number" name="number">
                            
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" placeholder="Email Address" id="email" name="email">
                           
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" placeholder="Address line 01" id="add1" name="add1">
                            
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" placeholder="Address line 02" id="add2" name="add2">
                         
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" placeholder="Town/City" id="city" name="city">
                          
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" placeholder="Postcode/ZIP" id="zip" name="zip" placeholder="Postcode/ZIP">
                        </div>
                       
                  <button type="submit" class="primary-btn" >Confirm Order</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>

                        <ul class="list">
                            <li><a href="#">Product <span>Total</span></a></li>
                             @foreach ($totalbusinesscount as $getalladmins)
                            <li><a href="#">{{$getalladmins->carttitle}}<span class="middle">x 0{{$getalladmins->pro_quantity}}</span> <span class="last">$ {{$getalladmins->price}}</span></a></li>
                             @endforeach
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>${{$totalbusiness}}</span></a></li>
                            <li><a href="#">Shipping <span>Flat rate: $1.14</span></a></li>
                            <li><a href="#">Free Shipping<span>Free In Faisalabad</span></a></li>
<br>
                            <li><a href="#">Total <span>${{$totalbusiness - 1.14}}</span></a></li>
                        </ul>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->












<br><br><br>
<x-webfooter/>
