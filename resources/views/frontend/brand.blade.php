@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')

      <!--breadcrumb-start-->
      <section class="theme-breadcrumb">
        <nav aria-label="breadcrumb">
            <div>
                <h2 class="text-center">product</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">product</li>
                </ol>
            </div>
        </nav>
    </section>
    <!--breadcrumb end-->

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
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand1.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
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
                                        <h6 class="card-title text-center">Orijen</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand2.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Royal Canin</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand3.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Acana</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand4.webp"
                                            style="height: 150px;" alt="Card image cap"></a>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Farmina</h6>
                                    </a>
    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand5.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Applaws</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand6.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
    
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Fabbled</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand7.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Sheba</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand8.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Whiskas</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand5.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Applaws</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand6.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
    
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Fabbled</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand7.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Sheba</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 mt-3">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="all-product.html">
                                        <img class="card-img-top img-fluid" src="../assets/images/brand/brand8.webp"
                                            alt="Card image cap" style="height: 150px;"></a>
                                </div>
                                <div class="card-body product_contain">
                                    <a href="javascript:void(0);">
                                        <h6 class="card-title text-center">Whiskas</h6>
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
                <img src="../assets/images/plus.png" alt="" class="img-fluid decor4">
                <img src="../assets/images/plus.png" alt="" class="img-fluid decor6">
                <!-- <img src="../assets/images/round-brown.png" alt="" class="img-fluid decor7"> -->
            </div>
        </section>
        <!-- New-Arrivals start -->


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
                                <input type="email" name="email" class="email" placeholder="Enter your email">
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
    @endsection