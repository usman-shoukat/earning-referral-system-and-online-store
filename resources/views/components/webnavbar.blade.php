
<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{route('home')}}"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{route('sitereferrals')}}" class="nav-link"  role="button" aria-haspopup="true"
                               aria-expanded="false">Referrals</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{route('wallet')}}" class="nav-link " role="button" aria-haspopup="true"
                               aria-expanded="false">Wallet</a>

                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{route('blog')}}" class="nav-link" role="button" aria-haspopup="true"
                               aria-expanded="false">Blog</a>

                        </li>
                        <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Withdraw Transaction</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{route('jazzcashtransaction')}}">Jazzcash</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('easypaisatransaction')}}">Easypaisa</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('skrilltransaction')}}">Skrill</a></li>
                                     <li class="nav-item"><a class="nav-link" href="{{route('payoneertransaction')}}">Payoneer</a></li>
                                </ul>
                            </li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{route('cartproduct')}}" class="nav-link" role="button" aria-haspopup="true"
                               aria-expanded="false">Cart</a>

                        </li>
                           <li class="nav-item submenu dropdown">
                            <a href="{{route('order.get')}}" class="nav-link" role="button" aria-haspopup="true"
                               aria-expanded="false">Orders</a>

                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="cart">
                                <span ><i class="fa fa-sign-out" aria-hidden="true"></i></span></a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                                       </ul>

            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- End Header Area -->
