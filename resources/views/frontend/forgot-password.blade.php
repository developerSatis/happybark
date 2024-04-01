@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')


<!--breadcrumb start-->
<section class="theme-breadcrumb">
    <nav aria-label="breadcrumb">
        <div>
            <h2 class="text-center">FORGET PASSWORD</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FORGET PASSWORD</li>
            </ol>
        </div>
    </nav>
</section>
<!--breadcrumb end-->


<!--password  start-->
<section class="pwd-page section-b-space common-bg">
    <ul class="common-decor">
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="plus"></li>
        <li class="plus"></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2>Forget Your Password</h2>
                <form class="theme-form">
                    <div class="form-row justify-content-center">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="email" placeholder="Enter Your Email"
                                   required="">
                        </div><a href="javascript:void(0);" class="btn btn_dark forget-btn">Submit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--password ends-->


@endsection

@section('js')
@endsection