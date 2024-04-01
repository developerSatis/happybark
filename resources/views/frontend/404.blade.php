@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')


<!--breadcrumb start-->
<section class="theme-breadcrumb">
    <nav aria-label="breadcrumb">
        <div >
            <h2 class="text-center">404 PAGE</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">404 PAGE</li>
            </ol>
        </div>
    </nav>
</section>
<!--breadcrumb end-->


<!-- section start -->
<section class="p-0 animation-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="error-section">
                    <div class="error-contain">
                        <h1>404</h1>
                        <h2>page not found</h2>
                        <a href="index.html" class="btn btn_dark ">BACK TO HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-animation">
        <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor1">
        <img src="../assets/images/plus.png" alt="" class="img-fluid decor8">
        <img src="../assets/images/plus.png" alt="" class="img-fluid decor6">
    </div>
</section>
<!-- Section ends -->


@endsection

@section('js')
@endsection