@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')


<!--breadcrumb start-->
<section class="theme-breadcrumb">
    <nav aria-label="breadcrumb">
        <div>
            <h2 class="text-center">COLLECTION</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">COLLECTION</li>
            </ol>
        </div>
    </nav>
</section>
<!--breadcrumb end-->


<!-- category  start -->
<section class="section-b-space ratio_asos common-bg">

    <ul class="common-decor">
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="plus"></li>
        <li class="plus"></li>
    </ul>

    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="collection-content col cattagory-margin">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="top-banner-wrapper">
                                    <div class="top-banner-content small-section">
                                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged. It was popularised in the 1960s with the release
                                            of Letraset sheets containing Lorem Ipsum passages, and more recently
                                            with desktop publishing software like Aldus PageMaker including versions
                                            of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="product-filter-content">
                                                        <div class="search-count">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                                        </div>
                                                        <div class="collection-view">
                                                            <ul class="d-flex">
                                                                <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                <li><i class="fa fa-list-ul list-layout-view"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- <div class="collection-grid-view">
                                                            <ul>
                                                                <li><img src="../assets/images/icon/2.png" alt=""
                                                                         class="product-2-layout-view"></li>
                                                                <li><img src="../assets/images/icon/3.png" alt=""
                                                                         class="product-3-layout-view"></li>
                                                                <li><img src="../assets/images/icon/4.png" alt=""
                                                                         class="product-4-layout-view"></li>
                                                                <li><img src="../assets/images/icon/6.png" alt=""
                                                                         class="product-6-layout-view"></li>
                                                            </ul>
                                                        </div> -->
                                                        <div class="product-page-per-view">
                                                            <select>
                                                                <option value="High to low">24 Products Par Page
                                                                </option>
                                                                <option value="Low to High">50 Products Par Page
                                                                </option>
                                                                <option value="Low to High">100 Products Par Page
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="product-page-filter">
                                                            <select>
                                                                <option value="High to low">Sorting items</option>
                                                                <option value="Low to High">50 Products</option>
                                                                <option value="Low to High">100 Products</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid">
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/3.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/4.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/5.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/1.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/2.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/6.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/7.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/8.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/9.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/10.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/3.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 col-grid-box">
                                                <div class="product_box catagory_box">
                                                    <div class="product_image">
                                                        <a href="item-details.html">
                                                            <img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/4.jpg"
                                                                 alt="Card image cap">
                                                        </a>

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
                                                        <div>
                                                            <a href="item-details.html"><h6 class="card-title text-center">Shiner black hair color</h6></a>
                                                            <h6 class="rate text-center">
                                                                <del>$100.00</del> $80.00
                                                            </h6>
                                                            <p class="d-none">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. A iste possimus quos
                                                                sint vero. Aliquid amet deleniti dolore fugit magnam
                                                                odit officiis quia sit suscipit temporibus. Atque
                                                                nulla unde ut.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-pagination">
                                        <div class="theme-paggination-block">
                                            <div class="container-fluid p-0">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="javascript:void(0);"
                                                                                         aria-label="Previous"><span
                                                                        aria-hidden="true"><i
                                                                        class="fa fa-chevron-left"
                                                                        aria-hidden="true"></i></span> <span
                                                                        class="sr-only">Previous</span></a></li>
                                                                <li class="page-item active"><a class="page-link"
                                                                                                href="javascript:void(0);">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                                         href="javascript:void(0);">2</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                                         href="javascript:void(0);">3</a></li>
                                                                <li class="page-item"><a class="page-link" href="javascript:void(0);"
                                                                                         aria-label="Next"><span
                                                                        aria-hidden="true"><i
                                                                        class="fa fa-chevron-right"
                                                                        aria-hidden="true"></i></span> <span
                                                                        class="sr-only">Next</span></a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <div class="product-search-count-bottom">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- category End -->


@endsection

@section('js')
@endsection