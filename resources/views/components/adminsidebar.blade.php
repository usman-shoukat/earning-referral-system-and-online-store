<div>
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="{{ route('dashboard') }}">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}"  aria-controls="submenu-1-2">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                        <li class="nav-divider">
                            Features
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Users Approval</a>
                            <div id="submenu-10" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('jazzcashusers')}}">Jazz Cash Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('easypaisauser')}}">Easy Paisa Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('payoneeruser')}}">Payoneer Users</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>Users Referrals </a>
                            <div id="submenu-6" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('userreferrals')}}">Referrals</a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Products</a>
                            <div id="submenu-7" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('addproduct')}}">Add Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('showproduct')}}">Product List</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Website Images</a>
                            <div id="submenu-8" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('addmainimg')}}">Front Main Image</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('showofferimg')}}">Make Offer</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Withdraws</a>
                            <div id="submenu-12" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('showjazzwith')}}">Jazz Cash Withdraw</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('showeasywith')}}">Easy Paisa Withdraw</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('showskrillwith')}}">Skrill Withdraw</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('showpaywith')}}">Payoneer Withdraw</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-22" aria-controls="submenu-11"><i class="fas fa-f fa-folder"></i>Blogs</a>
                            <div id="submenu-22" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('addblog')}}">Add Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('showblog')}}">Blogs List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                              <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-23" aria-controls="submenu-11"><i class="fas fa-f fa-folder"></i>Orders</a>
                            <div id="submenu-23" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('approvalorder')}}">Order Approval</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
