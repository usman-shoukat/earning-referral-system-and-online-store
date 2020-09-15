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
                <h1>Shopping Cart</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Cart</a>
                    
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
</div>
        <div class="col-md-12">
            @if(\Illuminate\Support\Facades\Session::has('delete'))
                <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
        @endif
        </div>
<!--================Cart Area =================-->

<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($totalbusinesscount as $getalladmins)
                    <tr>
                        <td>
                            <div class="media">
                                <div class="d-flex">
                                    {{$getalladmins->carttitle}}
                                </div>
                            </div>
                        </td>
                        <td>
                            ${{$getalladmins->price}}
                        </td>
                        <td>
                            <div class="product_count">
                                <form method="post" action="{{route('updatecart',[$getalladmins->id])}}">
                                    @csrf
                <input type="text" name="quantity" id="sst" maxlength="12" value="{{$getalladmins->pro_quantity}}" title="Quantity:"

                            </div>
                        </td>
                        <td>
                            <h5> {{$getalladmins->price * $getalladmins->pro_quantity }}</h5>
                        </td>
                        <td>
                            <button class="" style="background: transparent; border: none; cursor: pointer;"  type="submit" name="submit">
                                <i class="fa fa-check" aria-hidden="true"></i> Update</button>
                        </td>
                        </form>
                        <td>
                            <button class="" style="background: transparent; border: none;  "  type="submit" name="submit">
                                <a style="color: black;" href="{{route('delcart',[$getalladmins->id])}}">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></button>
                        </td>

                    </tr>
                    @endforeach
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <h5>Subtotal</h5>
                        </td>
                        <td>
                            <h5>{{$totalbusiness}}</h5>
                        </td>
                    </tr>

                    <tr class="out_button_area">
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="checkout_btn_inner d-flex align-items-center">

                                <a class="gray_btn" href="{{route('home')}}">Continue Shopping</a>

                                <a class="primary-btn" href="{{route('checkout')}}">Proceed to checkout</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>




<br><br><br>
<x-webfooter/>
