@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')


    <!--slider start-->
    <!-- <div class="home-slider">
        <div class="main_section home1 animation-section ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="main_section_contain">
                        <div>
                            <h1 class="new">new</h1>
                            <h1>SURPRISING HAIR COLOR</h1>
                            <p>YOU'LL WANT TO WEAR THIS SPRING</p>
                            <button class="btn_dark mb-0">READ MORE</button>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
            <div class="decor-animation">
            <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor1">
            <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor2">
            <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor3">
            <img src="../assets/images/plus.png" alt="" class="img-fluid decor5">
            <img src="../assets/images/plus.png" alt="" class="img-fluid decor12">
            <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor7">
            <img src="../assets/images/plus.png" alt="" class="img-fluid decor8">
            <img src="../assets/images/effect.png" alt="" class="img-fluid decor9">
            <img src="../assets/images/effect1.png" alt="" class="img-fluid decor11">
        </div>
        </div>
        <div class="main_section home1 animation-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="main_section_contain">
                            <div>
                            <h1 class="new">new</h1>
                            <h1>SURPRISING HAIR COLOR</h1>
                            <p>YOU'LL WANT TO WEAR THIS SPRING</p>
                            <button class="btn_dark">READ MORE</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
           <div class="decor-animation">
            <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor1">
            <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor2">
            <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor3">
            <img src="../assets/images/plus.png" alt="" class="img-fluid decor5">
            <img src="../assets/images/plus.png" alt="" class="img-fluid decor12">
            <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor7">
            <img src="../assets/images/plus.png" alt="" class="img-fluid decor8">
            <img src="../assets/images/effect.png" alt="" class="img-fluid decor9">
            <img src="../assets/images/effect1.png" alt="" class="img-fluid decor11">
        </div>
        </div>
    </div> -->
    <!--slider end-->

    <!--slider Start-->
    <section class="p-0">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
                @foreach ($banner as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/banner/'.$banner->photo) }}" class="d-block w-100"
                        alt="..." style="height: 500px;">
                </div>
                @endforeach
               
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!--slider End-->




    <!-- Brand start -->
    <section class="new_arrival_section animation-section service-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title_second text-center">
                        <div>
                            <h5 class="mb-0">Brands</h5>
                            <h2>Our Brands</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row product-row" id="more_brands">
                @foreach ($brand as $brand)
                    
                <div class="col-lg-2 col-sm-6">
                    <div class="product_box">
                        <div class="product_image">
                            <a href="{{url('/product-details')}}">
                                <img class="card-img-top img-fluid"
                                src="{{  asset('storage/brand/'.$brand->image) }}"
                                style="height: 220px;" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body product_contain">
                            <a href="javascript:void(0);">
                                <h6 class="card-title text-center">{{$brand->name ?? ""}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                
                @endforeach

            </div>
            <div class="text-center my-3">
                <a href="javaScript:void(0)"><button class="btn_dark" id="view-more-btn">VIEW MORE</button></a>
            </div>
        </div>
        <div class="decor-animation">
            <!-- <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor1"> -->
            <img src="{{asset('frontend/assets/images/plus.png')}}" alt="" class="img-fluid decor4">
            <img src="{{asset('frontend/assets/images/plus.png')}}" alt="" class="img-fluid decor6">
            <!-- <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor7"> -->
        </div>
    </section>
    <!-- Brand end -->



    

    <!-- Product start-->
    <section class="product_section animation-section">
        <div class="container">
            <div class="title_second text-center">
                <h5 class="mb-0">Categories</h5>
                <h2>Categories</h2>
            </div>
           
            <div id="tab-1" class="tab-content current">
                <div>
                    <div class="row product-row">
                        @foreach ($category as $categories)
                            <div class="col-lg-3 col-sm-6">
                                <div class="product_box">
                                    <div class="product_image">
                                        <a href="{{url('/item-details')}}">
                                            <img class="card-img-top img-fluid"
                                                src="{{asset('storage/category/'.$categories->icon)}}" style="height: 220px;"
                                                alt="Card image cap">
                                        </a>
                                        <ul class="product_icon">
                                            <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                        class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a></li>
                                            <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                    href="javascript:void(0)"><i class="fa fa-eye"
                                                        aria-hidden="true"></i>
                                                </a></li>
                                            <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li> <a href="compare.html"><i class="fa fa-exchange"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body product_contain">
                                        <a href="javascript:void(0);">
                                            <h6 class="card-title text-center">{{$categories->name ??""}}</h6>
                                        </a>
                                        {{-- <h6 class="rate text-center">
                                            <del>$100.00</del> $80.00
                                        </h6> --}}
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                    
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-content">
                <div>
                    <div class="row product-row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/breed3.jpg')}}" style="height: 220px;"
                                            alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Labrador</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/breed1.jpg')}}" style="height: 220px;"
                                            alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/breed1.jpg')}}" style="height: 220px;"
                                            alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/breed2.jpg')}}" style="height: 220px;"
                                            alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/breed1.jpg')}}" style="height: 220px;"
                                            alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/breed1.jpg')}}" style="height: 220px;"
                                            alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/breed1.jpg')}}" style="height: 220px;"
                                            alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/breed1.jpg')}}" style="height: 220px;"
                                            alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-content">
                <div>
                    <div class="row product-row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/9.jpg')}}" alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/6.jpg')}}" alt="Card image cap">
                                    </a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/7.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/8.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/10.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/2.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/3.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/4.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-4" class="tab-content">
                <div>
                    <div class="row product-row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/4.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/9.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/6.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/7.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('assets/images/photo-gallery/10.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/2.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/3.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid"
                                            src="{{asset('frontend/assets/images/photo-gallery/8.jpg')}}" alt="Card image cap"></a>
                                    <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye"
                                                    aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a></li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>$100.00</del> $80.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div id="tab-5" class="tab-content">
            <div>
                <div class="row product-row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid" src="../assets/images/photo-gallery/8.jpg"
                                                                   alt="Card image cap"></a>
                                <ul class="product_icon">
                                    <li onclick="openCart()"> <a href="javascript:void(0)"><i class="fa fa-shopping-cart"
                                                                                              aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                                         aria-hidden="true"></i></a></li>
                                    <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);"><h6 class="card-title text-center">Royal</h6></a>
                                <h6 class="rate text-center">
                                    <del>$100.00</del> $80.00
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid" src="../assets/images/photo-gallery/4.jpg"
                                                                   alt="Card image cap"></a>
                                <ul class="product_icon">
                                    <li onclick="openCart()"> <a href="javascript:void(0)"><i class="fa fa-shopping-cart"
                                                                                              aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                                         aria-hidden="true"></i></a></li>
                                    <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);"><h6 class="card-title text-center">Royal</h6></a>
                                <h6 class="rate text-center">
                                    <del>$100.00</del> $80.00
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid" src="../assets/images/photo-gallery/9.jpg"
                                                                   alt="Card image cap"></a>
                                <ul class="product_icon">
                                    <li onclick="openCart()"> <a href="javascript:void(0)"><i class="fa fa-shopping-cart"
                                                                                              aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                                         aria-hidden="true"></i></a></li>
                                    <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);"><h6 class="card-title text-center">Royal</h6></a>
                                <h6 class="rate text-center">
                                    <del>$100.00</del> $80.00
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid" src="../assets/images/photo-gallery/6.jpg"
                                                                   alt="Card image cap"></a>
                                <ul class="product_icon">
                                    <li onclick="openCart()"> <a href="javascript:void(0)"><i class="fa fa-shopping-cart"
                                                                                              aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                                         aria-hidden="true"></i></a></li>
                                    <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);"><h6 class="card-title text-center">Royal</h6></a>
                                <h6 class="rate text-center">
                                    <del>$100.00</del> $80.00
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid" src="../assets/images/photo-gallery/3.jpg"
                                                                   alt="Card image cap"></a>
                                <ul class="product_icon">
                                    <li onclick="openCart()"> <a href="javascript:void(0)"><i class="fa fa-shopping-cart"
                                                                                              aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                                         aria-hidden="true"></i></a></li>
                                    <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);"><h6 class="card-title text-center">Royal</h6></a>
                                <h6 class="rate text-center">
                                    <del>$100.00</del> $80.00
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid" src="../assets/images/photo-gallery/10.jpg"
                                                                   alt="Card image cap"></a>
                                <ul class="product_icon">
                                    <li onclick="openCart()"> <a href="javascript:void(0)"><i class="fa fa-shopping-cart"
                                                                                              aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                                         aria-hidden="true"></i></a></li>
                                    <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);"><h6 class="card-title text-center">Royal</h6></a>
                                <h6 class="rate text-center">
                                    <del>$100.00</del> $80.00
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid" src="../assets/images/photo-gallery/2.jpg"
                                                                   alt="Card image cap"></a>
                                <ul class="product_icon">
                                    <li onclick="openCart()"> <a href="javascript:void(0)"><i class="fa fa-shopping-cart"
                                                                                              aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                                         aria-hidden="true"></i></a></li>
                                    <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);"><h6 class="card-title text-center">Royal</h6></a>
                                <h6 class="rate text-center">
                                    <del>$100.00</del> $80.00
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}"><img class="card-img-top img-fluid" src="../assets/images/photo-gallery/7.jpg"
                                                                   alt="Card image cap"></a>
                                <ul class="product_icon">
                                    <li onclick="openCart()"> <a href="javascript:void(0)"><i class="fa fa-shopping-cart"
                                                                                              aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a data-bs-toggle="modal" data-bs-target="#quick-view" href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                    </a></li>
                                    <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                                         aria-hidden="true"></i></a></li>
                                    <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);"><h6 class="card-title text-center">Royal</h6></a>
                                <h6 class="rate text-center">
                                    <del>$100.00</del> $80.00
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        </div>
        <div class="decor-animation">
            <!-- <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor2">
        <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor3"> -->
            <img src="{{asset('frontend/assets/images/plus.png')}}" alt="" class="img-fluid decor4">
            <img src="{{asset('frontend/assets/images/plus.png')}}" alt="" class="img-fluid decor6">
            <!-- <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor7"> -->
        </div>
    </section>
    <!-- Product end-->

    <!--offer start-->
    <section style="background-color: #f6f6f6">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('frontend/assets/images/photo-gallery/offer-banner.webp')}}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('frontend/assets/images/photo-gallery/offer-banner2.webp')}}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('frontend/assets/images/photo-gallery/offer-banner3.webp')}}" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
        </div>
    </section>
    <!--offer end-->



    <!-- Feature start-->
    <!-- <section class="feature-section animation-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title text-center">
                    <h5>Latest Cosmetics</h5>
                    <h3 class="text-center">Dolor sit amet, consectetuer</h3>
                </div>
            </div>
            <div class="col-md-5 position-relative">
                <div class="feature-box box">
                    <div class="media features features-rtl">
                        <div class="media-body">
                            <h4 class="mt-0">hair comb</h4>
                            <p>Lorem Ips is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                        <img class="align-self-start ms-3 img-fluid feature-icon"
                             src="../assets/images/cosmetic/1.png" alt="Generic placeholder image">
                    </div>
                    <div class="media features features-rtl">
                        <div class="media-body">
                            <h4 class="mt-0">scissors</h4>
                            <p>Lorem Ips is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                        <img class="align-self-start ms-3 img-fluid feature-icon"
                             src="../assets/images/cosmetic/3.png" alt="Generic placeholder image">
                    </div>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="bottle-image">
                    <img class="img-fluid" src="../assets/images/cosmetic/Layer-192.png" alt="avatar">
                </div>
            </div>
            <div class="col-md-5">
                <div class="feature-box">
                    <div class="media features">
                        <img class="align-self-start me-3 img-fluid" src="../assets/images/cosmetic/2.png"
                             alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0">hair dryer</h4>
                            <p>Lorem Ips is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                    <div class="media features">
                        <img class="align-self-start me-3 img-fluid" src="../assets/images/cosmetic/4.png"
                             alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0">hair straigther</h4>
                            <p class="last-para">Lorem Ips is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-animation">
        <img src="../assets/images/plus.png" alt="" class="img-fluid decor4">
        <img src="../assets/images/plus.png" alt="" class="img-fluid decor5">
        <img src="../assets/images/effect.png" alt="" class="img-fluid decor9">
    </div>
</section> -->
    <!-- Feature end-->


    <!-- New-Arrivals start -->
    <section class="new_arrival_section animation-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title_second text-center">
                        <div>
                            <h5 class="mb-0">Breed</h5>
                            <h2>Choose Breed</h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12"> -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}">
                                    <img class="card-img-top img-fluid"
                                        src="{{asset('frontend/assets/images/photo-gallery/breed1.jpg')}}" alt="Card image cap"
                                        style="height: 220px;"></a>
                                <!-- <div class="img-lable">
                                    <h6>NEW</h6>
                                </div> -->
                                <!-- <ul class="product_icon">
                                    <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a></li>
                                    <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                            href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </a></li>
                                    <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);">
                                    <h6 class="card-title text-center">Golden Retriever</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}">
                                    <img class="card-img-top img-fluid"
                                        src="{{asset('frontend/assets/images/photo-gallery/breed2.jpg')}}" alt="Card image cap"
                                        style="height: 220px;"></a>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);">
                                    <h6 class="card-title text-center">German Shepherd</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}">
                                    <img class="card-img-top img-fluid"
                                        src="{{asset('frontend/assets/images/photo-gallery/breed3.jpg')}}" alt="Card image cap"
                                        style="height: 220px;"></a>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);">
                                    <h6 class="card-title text-center">Labrador</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}">
                                    <img class="card-img-top img-fluid"
                                        src="{{asset('frontend/assets/images/photo-gallery/breed4.jpg')}}" style="height: 220px;"
                                        alt="Card image cap"></a>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);">
                                    <h6 class="card-title text-center">Pug</h6>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}">
                                    <img class="card-img-top img-fluid"
                                        src="{{asset('frontend/assets/images/photo-gallery/breed2.jpg')}}" alt="Card image cap"
                                        style="height: 220px;"></a>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);">
                                    <h6 class="card-title text-center">German Shepherd</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}">
                                    <img class="card-img-top img-fluid"
                                        src="{{asset('frontend/assets/images/photo-gallery/breed1.jpg')}}" alt="Card image cap"
                                        style="height: 220px;"></a>

                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);">
                                    <h6 class="card-title text-center">Golden Retriever</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}">
                                    <img class="card-img-top img-fluid"
                                        src="{{asset('frontend/assets/images/photo-gallery/breed4.jpg')}}" alt="Card image cap"
                                        style="height: 220px;"></a>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);">
                                    <h6 class="card-title text-center">Pug</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="{{url('/item-details')}}">
                                    <img class="card-img-top img-fluid"
                                        src="{{asset('frontend/assets/images/photo-gallery/breed3.jpg')}}" alt="Card image cap"
                                        style="height: 220px;"></a>
                            </div>
                            <div class="card-body product_contain">
                                <a href="javascript:void(0);">
                                    <h6 class="card-title text-center">Labrador</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="decor-animation">
            <!-- <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor1"> -->
            <img src="{{asset('frontend/assets/images/plus.png')}}" alt="" class="img-fluid decor4">
            <img src="{{asset('frontend/assets/images/plus.png')}}" alt="" class="img-fluid decor6">
            <!-- <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor7"> -->
        </div>
    </section>
    <!-- New-Arrivals start -->


    <!-- Testimonial start-->
    <!-- <section class="testimonial_section animation-section">
    <div class="container">
        <div class="testimonial theme-arrow ">
            <div>
                <div class="space">
                    <div class="row">
                        <div class="col-lg-2 offset-lg-2 col-12 text-center">
                            <div class="test_image">
                                <img class="img-fluid shade" src="../assets/images/testimonial/1.jpg" alt="avtar">
                                <div class="chat_icon">
                                    <img class="img-fluid" src="../assets/images/testimonial/chat_icon.png"
                                         alt="chat_icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="comment_box">
                                <div class="space">
                                    <p class="comment">
                                        "When you innovate, you make mistakes.It is best to admit them
                                        quickly, &amp; get on
                                        with improving your other innovations."
                                    </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <h6 class="mb-0 ps-4">JOHN DANEL</h6>
                                        <p class="mb-0 ps-4 reg">UI DESIGNER</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="space">
                    <div class="row">
                        <div class="col-lg-2 offset-lg-2 col-12 text-center">
                            <div class="test_image">
                                <img class="img-fluid shade" src="../assets/images/testimonial/2.jpg" alt="avtar">
                                <div class="chat_icon">
                                    <img class="img-fluid" src="../assets/images/testimonial/chat_icon.png"
                                         alt="chat_icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="comment_box">
                                <div class="space">
                                    <p class="comment">
                                        "When you innovate, you make mistakes.It is best to admit them
                                        quickly, &amp; get on
                                        with improving your other innovations."
                                    </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <h6 class="mb-0 ps-4">JOHN DANEL</h6>
                                        <p class="mb-0 ps-4 reg">UI DESIGNER</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="space">
                    <div class="row">
                        <div class="col-lg-2 offset-lg-2 col-12 text-center">
                            <div class="test_image">
                                <img class="img-fluid shade" src="../assets/images/testimonial/3.jpg" alt="avtar">
                                <div class="chat_icon">
                                    <img class="img-fluid" src="../assets/images/testimonial/chat_icon.png"
                                         alt="chat_icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="comment_box">
                                <div class="space">
                                    <p class="comment">
                                        "When you innovate, you make mistakes.It is best to admit them
                                        quickly, &amp; get on
                                        with improving your other innovations."
                                    </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <h6 class="mb-0 ps-4">JOHN DANEL</h6>
                                        <p class="mb-0 ps-4 reg">UI DESIGNER</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="space">
                    <div class="row">
                        <div class="col-lg-2 offset-lg-2 col-12 text-center">
                            <div class="test_image">
                                <img class="img-fluid shade" src="../assets/images/testimonial/2.jpg" alt="avtar">
                                <div class="chat_icon">
                                    <img class="img-fluid" src="../assets/images/testimonial/chat_icon.png"
                                         alt="chat_icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="comment_box">
                                <div class="space">
                                    <p class="comment">
                                        "When you innovate, you make mistakes.It is best to admit them
                                        quickly, &amp; get on
                                        with improving your other innovations."
                                    </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <h6 class="mb-0 ps-4">JOHN DANEL</h6>
                                        <p class="mb-0 ps-4 reg">UI DESIGNER</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-animation">
        <img src="../assets/images/plus.png" alt="" class="img-fluid decor4">
    </div>
</section> -->
    <!-- Testimonial end-->




        <!-- About-us start -->
        <section class="about-us-section animation-section bg_color" style="background-color: #f6f6f6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title_second text-center">
                            <div>
                                <h5 class="mb-0">Product</h5>
                                <h2>Products</h2>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12"> -->
                    <div class="row">
                        @foreach ($products as $key => $product)
                        <div class="col-lg-3 col-sm-6 my-2">
                            <div class="product_box bg_color">
                                <div class="product_image">
                                    <a href="{{url('/item-details/'.$product->id)}}">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset('storage/product/thumbnail/'.$product->thumbnail)}}" alt="Card image cap"
                                            style="height: 220px;"></a>
                                    <!-- <div class="img-lable">
                                        <h6>NEW</h6>
                                    </div> -->
                                 <ul class="product_icon">
                                        <li onclick="openCart()"> <a href="javascript:void(0)"><i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a data-bs-toggle="modal" data-bs-target="#quick-view"
                                                href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </a></li>
                                        <li> <a href="javascript:void(0)"><i class="fa fa-heart-o"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="compare.html"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                        </li>
                                    </ul> 
                                </div>
                                <div class="card-body product_contain bg_color">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">{{$product->name}}</h6>
                                    </a>
                                    <h6 class="rate text-center">
                                        <del>${{$product->unit_price}}</del> ${{$product->purchase_price}}
                                    </h6>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-us end-->

    <!-- Blog start-->
    <section class="blog_section animation-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title_second text-center">
                        <div>
                            <h5 class="mb-0">Blogs</h5>
                            <h2>Blog articles</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="blog">
                        <div class="card">
                            <div class="card_image">
                                <a href="{{url('/blog')}}"><img class="card-img-top img-fluid"
                                        src="{{ asset('frontend/assets/images/blog/blog1.jpg') }}"
                                        alt="Card image cap" style="height: 220px;"></a>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0);">
                                    <h5 class="card-title">Lorem Ipsum dummy</h5>
                                </a>
                                <p class="card-text mb-0">Lorem Ipsum is simply dummy text of the prin
                                    been the industry'stypesetting industr standard</p>
                                <h6><span class="country">Germany</span><span class="date">25, Oct 2019</span>
                                </h6>
                                <a href="javascript:void(0);" class="btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card_image">
                                <a href="{{url('/blog')}}"><img class="card-img-top img-fluid"
                                        src="{{ asset('frontend/assets/images/blog/blog2.jpg') }}"
                                        alt="Card image cap" style="height: 220px;"></a>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0);">
                                    <h5 class="card-title">Lorem Ipsum dummy</h5>
                                </a>
                                <p class="card-text mb-0">Lorem Ipsum is simply dummy text of the prin
                                    been the industry'stypesetting industr standard</p>
                                <h6><span class="country">Germany</span><span class="date">25, Oct 2019</span>
                                </h6>
                                <a href="javascript:void(0);" class="btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card_image">
                                <a href="{{url('/blog')}}"><img class="card-img-top img-fluid"
                                        src="{{ asset('frontend/assets/images/blog/blog3.jpg') }}"
                                        alt="Card image cap" style="height: 220px;"></a>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0);">
                                    <h5 class="card-title">Lorem Ipsum dummy</h5>
                                </a>
                                <p class="card-text mb-0">Lorem Ipsum is simply dummy text of the prin
                                    been the industry'stypesetting industr standard</p>
                                <h6><span class="country">Germany</span><span class="date">25, Oct 2019</span>
                                </h6>
                                <a href="javascript:void(0);" class="btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card_image">
                                <a href="{{url('/blog')}}"><img class="card-img-top img-fluid"
                                        src="{{ asset('frontend/assets/images/blog/blog1.jpg') }}"
                                        alt="Card image cap" style="height: 220px;"></a>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0);">
                                    <h5 class="card-title">Lorem Ipsum dummy</h5>
                                </a>
                                <p class="card-text mb-0">Lorem Ipsum is simply dummy text of the prin
                                    been the industry'stypesetting industr standard</p>
                                <h6><span class="country">Germany</span><span class="date">25, Oct 2019</span>
                                </h6>
                                <a href="javascript:void(0);" class="btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card_image">
                                <a href="{{url('/blog')}}"><img class="card-img-top img-fluid"
                                        src="{{ asset('frontend/assets/images/blog/blog1.jpg') }}"
                                        alt="Card image cap" style="height: 220px;"></a>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0);">
                                    <h5 class="card-title">Lorem Ipsum dummy</h5>
                                </a>
                                <p class="card-text mb-0">Lorem Ipsum is simply dummy text of the prin
                                    been the industry'stypesetting industr standard</p>
                                <h6><span class="country">Germany</span><span class="date">25, Oct 2019</span>
                                </h6>
                                <a href="javascript:void(0);" class="btn">READ MORE</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card_image">
                                <a href="{{url('/blog')}}"><img class="card-img-top img-fluid"
                                        src="{{ asset('frontend/assets/images/blog/blog2.jpg') }}"
                                        alt="Card image cap" style="height: 220px;"></a>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0);">
                                    <h5 class="card-title">Lorem Ipsum dummy</h5>
                                </a>
                                <p class="card-text mb-0">Lorem Ipsum is simply dummy text of the prin
                                    been the industry'stypesetting industr standard</p>
                                <h6><span class="country">Germany</span><span class="date">25, Oct 2019</span>
                                </h6>
                                <a href="javascript:void(0);" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="decor-animation">
            <!-- <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor1">
            <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor3"> -->
            <img src="{{ asset('frontend/assets/images/plus.png') }}" alt="" class="img-fluid decor8">
            <img src="{{ asset('frontend/assets/images/plus.png') }}" alt="" class="img-fluid decor6">
            <!-- <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor7"> -->
        </div>
    </section>
    <!-- Blog end-->


    <!-- Advertise start-->
    <!-- <section class="advertise_section animation-section">
    <div class="container">
        <div class="row">
            <div class="col-3 offset-1 position-relative">
                <div class="bottle">
                    <img src="../assets/images/Hording/bottle1.png" class="img-fluid" alt="bottel_img">
                </div>
            </div>
            <div class="col-sm-8 col-12">
                <div class="adv_contain">
                    <div>
                        <h3>Milk Rebonding with Haircut & More at Kitring.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s.</p>
                        <button class="btn_dark">Check Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-animation">
        <img src="../assets/images/effect1.png" alt="" class="img-fluid decor10">
    </div>
</section> -->
    <!-- Advertise end-->


    <!-- Brand-Logo start-->
    <!-- <section class="brand_section animation-section">
    <div class="container">
        <div class="row brand">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="logo">
                    <div class="text-center">
                        <a href="javascript:void(0);"><img class="img-fluid" src="../assets/images/brand/1.png" alt="logo"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="logo">
                    <div class="text-center">
                        <a href="javascript:void(0);"><img class="img-fluid" src="../assets/images/brand/2.png" alt="logo"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="logo">
                    <div class="text-center">
                        <a href="javascript:void(0);"><img class="img-fluid" src="../assets/images/brand/3.png" alt="logo"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="logo">
                    <div class="text-center">
                        <a href="javascript:void(0);"><img class="img-fluid" src="../assets/images/brand/4.png" alt="logo"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="logo">
                    <div class="text-center">
                        <a href="javascript:void(0);"><img class="img-fluid" src="../assets/images/brand/5.png" alt="logo"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="logo">
                    <div class="text-center">
                        <a href="javascript:void(0);"><img class="img-fluid" src="../assets/images/brand/6.png" alt="logo"></a>
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
</section> -->
    <!-- Brand-Logo end-->


    <!-- Instagram start-->
    <section class="py-0">
        <div class="container-fluid">
            <div class="row px-0 mx-0">
                <div class="col-12 p-0">
                    <div class="silk_insta_slide">
                        <div class="instabox">
                            <a href="javascript:void(0);"><img class="img-fluid"
                                    src="{{ asset('frontend/assets/images/instagram/v1.jpg') }}"
                                    style="height: 200px;" alt="insta_image"></a>
                            <div class="overlay"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                        </div>
                        <div class="instabox">
                            <a href="javascript:void(0);"><img class="img-fluid"
                                    src="{{ asset('frontend/assets/images/instagram/v2.jpg') }}"
                                    style="height: 200px;" alt="insta_image"></a>
                            <div class="overlay"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                        </div>
                        <div class="instabox">
                            <a href="javascript:void(0);"><img class="img-fluid"
                                    src="{{ asset('frontend/assets/images/instagram/v3.jpg') }}"
                                    style="height: 200px;" alt="insta_image"></a>
                            <div class="overlay"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                        </div>
                        <div class="instabox">
                            <a href="javascript:void(0);"><img class="img-fluid"
                                    src="{{ asset('frontend/assets/images/instagram/v4.jpg') }}"
                                    style="height: 200px;" alt="insta_image"></a>
                            <div class="overlay"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                        </div>
                        <div class="instabox">
                            <a href="javascript:void(0);"><img class="img-fluid"
                                    src="{{ asset('frontend/assets/images/instagram/v1.jpg"') }}"
                                    style="height: 200px;" alt="insta_image"></a>
                            <div class="overlay"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                        </div>
                        <div class="instabox">
                            <a href="javascript:void(0);"><img class="img-fluid"
                                    src="{{ asset('frontend/assets/images/instagram/v2.jpg') }}"
                                    style="height: 200px;" alt="insta_image"></a>
                            <div class="overlay"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                        </div>
                        <div class="instabox">
                            <a href="javascript:void(0);"><img class="img-fluid"
                                    src="{{ asset('frontend/assets/images/instagram/v3.jpg') }}"
                                    style="height: 200px;" alt="insta_image"></a>
                            <div class="overlay"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram end-->


    <!-- Call-to-Action start-->
    <section class="call-to-action-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact">
                        <div class="media">
                            <svg height="35.00003pt" viewbox="0 0 512.00003 512.00003" width="35.00003pt">
                                <path
                                    d="m256 0c-107.941406 0-195.765625 87.824219-195.765625 195.765625v180.703125c0 24.914062 20.265625 45.179688 45.175781 45.179688 24.914063 0 45.179688-20.265626 45.179688-45.179688v-150.585938c0-24.910156-20.265625-45.175781-45.179688-45.175781-5.070312 0-9.867187 1.027344-14.425781 2.574219 6.425781-85.511719 77.902344-153.164062 165.015625-153.164062 87.066406 0 158.523438 67.589843 165.007812 153.042968-4.53125-1.550781-9.355468-2.453125-14.417968-2.453125-24.914063 0-45.179688 20.265625-45.179688 45.175781v150.585938c0 24.914062 20.265625 45.179688 45.179688 45.179688 5.304687 0 10.324218-1.085938 15.058594-2.773438v17.832031c0 8.308594-6.765626 15.058594-15.058594 15.058594h-108.1875c-6.238282-17.492187-22.796875-30.117187-42.402344-30.117187-24.910156 0-45.175781 20.265624-45.175781 45.175781 0 24.910156 20.265625 45.175781 45.175781 45.175781 19.605469 0 36.164062-12.628906 42.402344-30.117188h108.1875c24.910156 0 45.175781-20.265624 45.175781-45.175781 0-90.578125 0-150.265625 0-240.941406 0-107.941406-87.824219-195.765625-195.765625-195.765625zm0 0" />
                                <path
                                    d="m481.882812 213.597656v175.15625c17.488282-6.234375 30.117188-22.792968 30.117188-42.402344v-90.351562c0-19.605469-12.628906-36.164062-30.117188-42.402344zm0 0" />
                                <path
                                    d="m0 256v90.351562c0 19.609376 12.628906 36.167969 30.117188 42.402344v-175.15625c-17.488282 6.238282-30.117188 22.796875-30.117188 42.402344zm0 0" />
                            </svg>
                            <div class="media-body">
                                <h6 class="mt-0">call us</h6>
                                <p>+91 7660020250
                                </p>
                            </div>
                        </div>
                        <div class="newsletter">
                            <div class="news-contain">
                                <h6 class="mt-0">NEWSLETTER</h6>
                                <p>Scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="email-container">
                        <div>
                            <div class="email-box">
                                <input type="email" name="email" class="email"
                                    placeholder="Enter your email">
                                <button type="submit" class="submit-btn"><i class="fa fa-envelope-o fa-1x;"
                                        aria-hidden="true"></i>SUBSCRIBE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call-to-Action end-->

    @endsection

    @section('js')
    <script>
        $(document).ready(function() {
            var offset = 8; // Initial offset value
    
            $('#view-more-btn').click(function() {
                $.ajax({
                    url: "{{ route('getMoreBrand') }}",
                    method: 'GET',
                    data: { offset: offset },
                    success: function(response) {
                        // Append data to the container
                                               console.log(response.html)
                        $('#more_brands').append(response.html);
    
                        // Update offset for the next request
                        offset += 8;
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
    

    @endsection
