
<x-webtoplinkbar/>
<x-webnavbar/>
<style>
    .column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
</style>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Wallet</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Wallet</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<!--================assets Box Area =================-->
<section class="tracking_box_area section_gap">

<div class="row">
  <div class="column" style="
        
            
            text-align: center;
            background-color: white;
            height: 100px; 
            line-height: 30px; 
            border: solid 1px white ;
            box-shadow: 5px 10px 8px 0px #888888;
            ">
    <h3><b>Total Referral</b> : {{$getallref}}</h3>
  </div>
  <div class="column" style="
        
            
            text-align: center;
            background-color: white;
            height: 100px; 
            line-height: 30px; 
            border: solid 1px white ;
            box-shadow: 5px 10px 8px 0px #888888;
            ">
 <h3><b>Total Balance</b> : ${{$totalbusinesscount->amount}}</h3>
  </div>
  <div class="column" style="
        
              
            text-align: center;
            background-color: white;
            height: 100px; 
            line-height: 30px; 
            border: solid 1px white ;
            box-shadow: 5px 10px 8px 0px #888888;
            ">
    <h3><b>Widthdraw-Able</b> : ${{$totalbusinesscount->amount}}</h3>
            </div>
  </div>
</div>
    <div class="container" style="">
      
           
          
        </div>
    </div>
</section>
<!--================End assets Box Area =================-->
<!--================withdraw Box Area =================-->
<section class="tracking_box_area ">

    <div class="container">
        <div class="col-lg-12 col-md-12">
            <div class="main-content-label mg-b-5">
                <h1>Apply For Withdraw Details</h1>
            </div><br>
            <div class="container" style="margin-left: 0px">
                <div class="row">

                    <?php $re = 'jazzcash' ?>
                    <div class="col"><a href="{{route('withrawapply',['jazz'=> $re])}}"><img src="assets/img/JazzCash-logo.jpg" width="200px"></a></div>
                        <?php $ree = 'easypaisa' ?>
                        <div class="col"><a href="{{route('withrawapply',['jazz'=> $ree])}}"><img src="assets/img/paisa.png" width="200px" ></a></div>
<br><br>
                        <?php $reee = 'skrill' ?>
                        <div class="col"><a href="{{route('withrawapply',['jazz'=> $reee])}}"><img src="assets/img/Skrill.png" width="200px"></a></div>
                        <?php $rer = 'payoneer' ?>
                        <div class="col"><a href="{{route('withrawapply',['jazz'=> $rer])}}"><img src="assets/img/Logo-Payoneer.jpg" width="200px"></a></div>

                    </div>
            </div>

        </div>
</section><br><br>
<!--================End withdraw Box Area =================-->
<br><br>
<x-webfooter/>
