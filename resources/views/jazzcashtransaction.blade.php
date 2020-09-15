
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
                        <h1>Jazzcash Withdraw page</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#">Jazzcash Withdraw</a>

                        </nav>
                    </div>
                </div>
            </div>
        </section>
<br><br><br>


            <div class="container col" style="margin-left: 0px">
                <h2>Your Jazzcash Withdraw</h2>
               <br>
                <div class="table-responsive" style="margin-left: 10px">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="border-0">Username</th>
                        <th class="border-0">Email</th>
                        <th class="border-0">Phone</th>
                        <th class="border-0">Amount</th>
                          <th class="border-0">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($getalladmin as $getalladmins)
                        <tr>
                             <td>{{$getalladmins->name}}</td>
                            <td>{{$getalladmins->email}}</td>
                            <td>{{$getalladmins->phone_number}}</td>
                            <td>${{$getalladmins->amount}}</td>
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
                {{$getalladmin->links()}}
                </div>
            </div>



<br><br>

        <x-webfooter/>
