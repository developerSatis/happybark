@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')

<!--breadcrumb start-->
<section class="theme-breadcrumb">
    <nav aria-label="breadcrumb">
        <div>
            <h2 class="text-center">profile</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">profile</li>
            </ol>
        </div>
    </nav>
</section>
<!--breadcrumb end-->

<!-- personal deatail section start -->
<div class="contact-page register-page section-t-space common-bg">

    <ul class="common-decor">
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="plus"></li>
        <li class="plus"></li>
    </ul>

    <div class="container auth-page">
        <div class="row">
            <div class="col-sm-12">
                <h3>PERSONAL DETAIL</h3>

                <div class="theme-card">
                    <form class="theme-form">
                        <div >
                            <div class="row">
                                <div class="col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                       required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" placeholder="Enter Your Last name" required="">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                <label for="review">Phone number</label>
                                <input type="text" class="form-control" id="review" placeholder="Enter your number"
                                       required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required="">
                            </div>
                            </div>
                            <div class="col-md-12">
                                <label for="review">Write Your Message</label>
                            <textarea class="form-control mb-0" placeholder="Write Your Message"
                                      id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- personal deatail section ends -->

<!-- address section start -->
<section class="contact-page register-page auth-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Shipping address</h3>
                <div class="theme-card">
                    <form class="theme-form">
                        <div>
                            <div class="row">
                                 <div class="col-md-6">
                                <label for="name">flat / plot</label>
                                <input type="text" class="form-control" id="home-ploat" placeholder="company name"
                                       required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="name">Address *</label>
                                    <input type="text" class="form-control" id="address-two" placeholder="Address"
                                           required="">
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                    <label for="email">Zip Code *</label>
                                    <input type="text" class="form-control" id="zip-code" placeholder="zip-code"
                                           required="">
                                </div>
                                <div class="col-md-6 select_input">
                                    <label for="review">Country *</label>
                                    <select class="form-control" size="1">
                                        <option value="India">India</option>
                                        <option value="UAE">UAE</option>
                                        <option value="U.K">U.K</option>
                                        <option value="US">US</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <label for="review">City *</label>
                                <input type="text" class="form-control" id="city" placeholder="City" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Region/State *</label>
                                <input type="text" class="form-control" id="region-state" placeholder="Region/state"
                                       required="">
                            </div>    
                            </div>
                            
                            
                            <div class="col-md-12">
                                <button class="btn btn-sm btn_dark" type="submit">Save setting</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- address section ends -->

@endsection

@section('js')
@endsection