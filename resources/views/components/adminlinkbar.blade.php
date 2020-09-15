
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/circular-std/style.css')}}" >
        <link rel="stylesheet" href="{{asset('admin/assets/libs/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/charts/chartist-bundle/chartist.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/charts/morris-bundle/morris.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/charts/c3charts/c3.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <title>GotJobPak-Admin Dashboard</title>
<style>

    #floating-button{
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background: #db4437;
        position: fixed;
        bottom: 30px;
        right: 30px;
        cursor: pointer;
        box-shadow: 0px 2px 5px #666;
    }

    .plus{
        color: white;
        position: absolute;
        top: 0;
        display: block;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        padding: 0;
        margin: 0;
        line-height: 55px;
        font-size: 38px;
        font-family: 'Roboto';
        font-weight: 300;
        animation: plus-out 0.3s;
        transition: all 0.3s;
    }

    #container-floating{
        position: fixed;
        width: 70px;
        height: 70px;
        bottom: 30px;
        right: 30px;
        z-index: 50px;
    }

    #container-floating:hover{
        height: 400px;
        width: 90px;
        padding: 30px;
    }

    #container-floating:hover .plus{
        animation: plus-in 0.15s linear;
        animation-fill-mode: forwards;
    }

    .edit{
        position: absolute;
        top: 0;
        display: block;
        bottom: 0;
        left: 0;
        display: block;
        right: 0;
        padding: 0;
        opacity: 0;
        margin: auto;
        line-height: 65px;
        transform: rotateZ(-70deg);
        transition: all 0.3s;
        animation: edit-out 0.3s;
    }

    #container-floating:hover .edit{
        animation: edit-in 0.2s;
        animation-delay: 0.1s;
        animation-fill-mode: forwards;
    }

    @keyframes edit-in{
        from {opacity: 0; transform: rotateZ(-70deg);}
        to {opacity: 1; transform: rotateZ(0deg);}
    }

    @keyframes edit-out{
        from {opacity: 1; transform: rotateZ(0deg);}
        to {opacity: 0; transform: rotateZ(-70deg);}
    }

    @keyframes plus-in{
        from {opacity: 1; transform: rotateZ(0deg);}
        to {opacity: 0; transform: rotateZ(180deg);}
    }

    @keyframes plus-out{
        from {opacity: 0; transform: rotateZ(180deg);}
        to {opacity: 1; transform: rotateZ(0deg);}
    }

    .nds{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        position: fixed;
        z-index: 300;
        transform:  scale(0);
        cursor: pointer;
    }

    .nd1{
        background: #d3a411;
        right: 40px;
        bottom: 120px;
        animation-delay: 0.2s;
        animation: bounce-out-nds 0.3s linear;
        animation-fill-mode:  forwards;
    }

    .nd3{
        background: #3c80f6;
        right: 40px;
        bottom: 180px;
        animation-delay: 0.15s;
        animation: bounce-out-nds 0.15s linear;
        animation-fill-mode:  forwards;
    }

    .nd4{
        background: #ba68c8;
        right: 40px;
        bottom: 240px;
        animation-delay: 0.1s;
        animation: bounce-out-nds 0.1s linear;
        animation-fill-mode:  forwards;
    }

    .nd5{
        background-image: url('https://lh3.googleusercontent.com/-X-aQXHatDQY/Uy86XLOyEdI/AAAAAAAAAF0/TBEZvkCnLVE/w140-h140-p/fb3a11ae-1fb4-4c31-b2b9-bf0cfa835c27');
        background-size: 100%;
        right: 40px;
        bottom: 300px;
        animation-delay: 0.08s;
        animation: bounce-out-nds 0.1s linear;
        animation-fill-mode:  forwards;
    }

    @keyframes bounce-nds{
        from {opacity: 0;}
        to {opacity: 1; transform: scale(1);}
    }

    @keyframes bounce-out-nds{
        from {opacity: 1; transform: scale(1);}
        to {opacity: 0; transform: scale(0);}
    }

    #container-floating:hover .nds{

        animation: bounce-nds 0.1s linear;
        animation-fill-mode:  forwards;
    }

    #container-floating:hover .nd3{
        animation-delay: 0.08s;
    }
    #container-floating:hover .nd4{
        animation-delay: 0.15s;
    }
    #container-floating:hover .nd5{
        animation-delay: 0.2s;
    }

    .letter{
        font-size: 23px;
        font-family: 'Roboto';
        color: white;
        position: absolute;
        left: 0;
        right: 0;
        margin: 0;
        top: 0;
        bottom: 0;
        text-align: center;
        line-height: 40px;
    }

    .reminder{
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        top: 0;
        bottom: 0;
        line-height: 40px;
    }

    .profile{
        border-radius: 50%;
        width: 40px;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        right: 20px;
    }
</style>
    </head>

    <body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->

        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">GotJobPak</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">




                </div>
            </nav>
        </div>


