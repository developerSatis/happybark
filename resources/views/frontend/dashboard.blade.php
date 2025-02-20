@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')


<!--breadcrumb start-->
<section class="theme-breadcrumb">
    <nav aria-label="breadcrumb">
        <div>
            <h2 class="text-center">DASHBORD</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">DASHBORD</li>
            </ol>
        </div>
    </nav>
</section>
<!--breadcrumb end-->


<!-- dashbord start -->
<section class="section-b-space common-bg">
    <ul class="common-decor">
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="plus"></li>
        <li class="plus"></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                                                                     aria-hidden="true"></i> back</span></div>
                    <div class="block-content common-card">
                        <ul>
                            <li class="active"><a href="javascript:void(0);">Account Info</a></li>
                            <li><a href="javascript:void(0);">Address Book</a></li>
                            <li><a href="javascript:void(0);">My Orders</a></li>
                            <li><a href="javascript:void(0);">My Wishlist</a></li>
                            <li><a href="javascript:void(0);">Newsletter</a></li>
                            <li><a href="javascript:void(0);">My Account</a></li>
                            <li><a href="javascript:void(0);">Change Password</a></li>
                            <li class="last"><a href="javascript:void(0);">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="dashboard-right">
                    <div class="dashboard common-card">
                        <div class="page-title">
                            <h2>My Dashboard</h2>
                        </div>
                        <div class="welcome-msg">
                            <p>Hello, MARK JECNO !</p>
                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent
                                account activity and update your account information. Select a link below to view or
                                edit information.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head">
                                <h2>Account Information</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Contact Information</h3><a href="javascript:void(0);">Edit</a>
                                        </div>
                                        <div class="box-content">
                                            <h6>MARK JECNO</h6>
                                            <h6>MARk-JECNO@gmail.com</h6>
                                            <h6><a href="javascript:void(0);">Change Password</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Newsletters</h3><a href="javascript:void(0);">Edit</a>
                                        </div>
                                        <div class="box-content">
                                            <p>You are currently not subscribed to any newsletter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="box">
                                    <div class="box-title">
                                        <h3>Address Book</h3><a href="javascript:void(0);">Manage Addresses</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6>Default Billing Address</h6>
                                            <address>You have not set a default billing address.<br><a href="javascript:void(0);">Edit
                                                Address</a></address>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>Default Shipping Address</h6>
                                            <address>You have not set a default shipping address.<br><a
                                                    href="javascript:void(0);">Edit Address</a></address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dashbord end -->


@endsection

@section('js')
@endsection