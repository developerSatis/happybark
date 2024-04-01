@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')


<!--breadcrumb start-->
<section class="theme-breadcrumb">
    <nav aria-label="breadcrumb">
        <div>
            <h2 class="text-center">search</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">search</li>
            </ol>
        </div>
    </nav>
</section>
<!--breadcrumb end-->


<!--search  start-->
<section class="pt-0 animation-section">
    <div class="container">
        <div class="search-block">
            <div class="row section-b-space">
                <div class="col-lg-8 offset-lg-2 section-t-space">
                    <form class="form-header">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                                  placeholder="Search Products......">                           
                            <span class="input-group-text" id="basic-addon2">
                              <button class="btn btn_dark"><i class="fa fa-search"></i>Search</button>
                            </span>
                        </div>                      
                    </form>
                </div>
            </div>
            <div class="row search-product prodcut_left_margin">
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product_box ">
                        <div class="product_image">
                            <img class="card-img-top img-fluid" src="../assets/images/photo-gallery/1.jpg"
                                 alt="Card image cap">
                            <ul class="product_icon">
                                <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a></li>
                                <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body product_contain">
                            <a href="javascript:void(0);"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                            <h6 class="rate text-center">
                                <del>$100.00</del> $80.00
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product_box ">
                        <div class="product_image">
                            <img class="card-img-top img-fluid" src="../assets/images/photo-gallery/3.jpg"
                                 alt="Card image cap">
                            <ul class="product_icon">
                                <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a></li>
                                <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body product_contain">
                            <a href="javascript:void(0);"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                            <h6 class="rate text-center">
                                <del>$100.00</del> $80.00
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product_box">
                        <div class="product_image">
                            <img class="card-img-top img-fluid" src="../assets/images/photo-gallery/4.jpg"
                                 alt="Card image cap">
                            <ul class="product_icon">
                                <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a></li>
                                <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body product_contain">
                            <a href="javascript:void(0);"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                            <h6 class="rate text-center">
                                <del>$100.00</del> $80.00
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product_box">
                        <div class="product_image">
                            <img class="card-img-top img-fluid" src="../assets/images/photo-gallery/5.jpg"
                                 alt="Card image cap">
                            <ul class="product_icon">
                                <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a></li>
                                <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body product_contain">
                            <a href="javascript:void(0);"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                            <h6 class="rate text-center">
                                <del>$100.00</del> $80.00
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product_box">
                        <div class="product_image">
                            <img class="card-img-top img-fluid" src="../assets/images/photo-gallery/1.jpg"
                                 alt="Card image cap">
                            <ul class="product_icon">
                                <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a></li>
                                <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body product_contain">
                            <a href="javascript:void(0);"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                            <h6 class="rate text-center">
                                <del>$100.00</del> $80.00
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product_box">
                        <div class="product_image">
                            <img class="card-img-top img-fluid" src="../assets/images/photo-gallery/3.jpg"
                                 alt="Card image cap">
                            <ul class="product_icon">
                                <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a></li>
                                <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li> <a href="javascript:void(0);"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body product_contain">
                            <a href="javascript:void(0);"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                            <h6 class="rate text-center">
                                <del>$100.00</del> $80.00
                            </h6>
                        </div>
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
<!-- search  end -->


@endsection

@section('js')
@endsection