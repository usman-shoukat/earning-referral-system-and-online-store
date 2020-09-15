
<x-webtoplinkbar/>
<x-webnavbar/>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
@endif
</div>

    <!-- Start Banner Area -->
        <section class="banner-area organic-breadcrumb">
            <div class="container" style="width: 100%;">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Order page</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#">Your Orders</a>

                        </nav>
                    </div>
                </div>
            </div>
        </section>
<br><br><br>


            <div class="container col" style="margin-left: 0px">
                <h2>Your Order List</h2>
               <br>
                <div class="table-responsive" style="margin-left: 10px">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="border-0">Username</th>
                        <th class="border-0">City</th>
                        <th class="border-0">Address</th>
                        <th class="border-0">Product Name</th>
                         <th class="border-0">Product Price</th>
                          <th class="border-0">Product Quantity</th>
                           <th class="border-0">Total Price</th>
                          <th class="border-0">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                       
                    @foreach ($getalladmin as $getalladmins)
                        <tr>
                             <td>{{$getalladmins->user->fname}}{{$getalladmins->user->lname}}</td>
                            <td>{{$getalladmins->user->city}}</td>
                            <td>{{$getalladmins->user->add1}} | {{$getalladmins->user->add2}}</td>
                             <td>{{$getalladmins->product->pro_title}}</td>
                            <td>${{$getalladmins->product->pro_price}}</td>
                              <td>{{$getalladmins->quantity}}</td>
                               <td>{{$getalladmins->total}}</td>
                            @if ($getalladmins->app == 1)
                                <td> <button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Approved</button></td>
                            @elseif($getalladmins->del == 1)
                                <td> <button class="btn-danger" style="margin-left: 0px;"  type="submit" name="submit">Cencel</button></td>
                                @else
                                 <td> <button class="btn-danger" style="margin-left: 0px;"  type="submit" name="submit">Pending</button></td>
                            @endif
                        </tr>
                    @endforeach

                    </tbody>
                </table>
              
                </div>
            </div>



<br><br>

        <x-webfooter/>
