
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
                        <h1>Referrals Category page</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#">Referral</a>

                        </nav>
                    </div>
                </div>
            </div>
        </section>
<br><br><br>


            <div class="container col" style="margin-left: 0px">
                <h2>Your Referrals</h2>
                <b>link =></b>  <b style="margin-left: 50px">dotjobpak.com/makereferral/{{auth()->user()->id}}</b><br><br>
                <div class="table-responsive" style="margin-left: 10px">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="border-0">Username</th>
                        <th class="border-0">Email</th>
                        <th class="border-0">Phone</th>
                        <th class="border-0">Profit</th>
                        <th class="border-0">Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($getalladmin as $getalladmins)
                        <tr>
                            <td>{{$getalladmins->user->name}}</td>
                            <td>{{$getalladmins->user->email}}</td>
                            <td>{{$getalladmins->user->phone}}</td>
                            <td>0.6$</td>
                            @if ($getalladmins->user->approval == 1)
                                <td> <button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Received</button></td>
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
