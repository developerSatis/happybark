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


<!-- category start -->
<section class="section-b-space ratio_asos common-bg">
    <ul class="common-decor">
        <li class="plus"></li>
        <li class="plus"></li>
    </ul>
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="collection-content col cattagory-margin">
                    <div class="page-main-content">
                        <div class="top-banner-wrapper">
                            <div class="top-banner-content small-section">
                                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                    with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                    recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="collection-product-wrapper">
                            <div class="product-top-filter">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-filter-content">
                                            <div class="search-count">
                                                <h5>Showing Products 1-24 of 10 Result</h5>
                                            </div>
                                            <div class="collection-view ">
                                                <ul class="d-flex">
                                                    <li><i class="fa fa-th grid-layout-view"></i></li>
                                                    <li><i class="fa fa-list-ul list-layout-view"></i></li>
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
                                                    <option value="High to low">24 Products Par Page</option>
                                                    <option value="Low to High">50 Products Par Page</option>
                                                    <option value="Low to High">100 Products Par Page</option>
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
                            <div class="product-wrapper-grid">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/Brand3.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"> <h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/brand2.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/Brand3.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/brand4.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/brand5.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/brand6.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/Brand3.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/brand2.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/Brand3.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/brand4.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/brand6.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product_box catagory_box">
                                            <div class="product_image">
                                                <a href="javascript:void(0);"><img class="card-img-top img-fluid"
                                                                 src="../assets/images/photo-gallery/brand4.webp" alt="Card image cap"></a>
                                                <ul class="product_icon">
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i>
                                                    </a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a></li>
                                                    <li> <a href="javascript:void(0);"><i class="fa fa-exchange"
                                                                        aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body product_contain">
                                                <div>
                                                    <a href="javascript:void(0);"><h6 class="card-title text-center mb-0">Kong Puppy
                                                    </h6></a>
                                                    <h6 class="rate text-center">
                                                        <del>$100.00</del> $80.00
                                                    </h6>
                                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. A iste possimus quos sint vero. Aliquid
                                                        amet deleniti dolore fugit magnam odit officiis quia sit
                                                        suscipit temporibus. Atque nulla unde ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-pagination">
                                <div class="theme-paggination-block">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"
                                                                             aria-label="Previous"><span aria-hidden="true"><i
                                                            class="fa fa-chevron-left"
                                                            aria-hidden="true"></i></span> <span
                                                            class="sr-only">Previous</span></a></li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"
                                                                             aria-label="Next"><span aria-hidden="true"><i
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
</section>
<!-- category end -->


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