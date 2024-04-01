@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')


<!--breadcrumb start-->
<section class="theme-breadcrumb">
    <nav aria-label="breadcrumb">
        <div>
            <h2 class="text-center">wishlist</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">wishlist</li>
            </ol>
        </div>
    </nav>
</section>
<!--breadcrumb end-->


<!--wishlist start-->
<section class="wishlist-section section-b-space common-bg">
    <ul class="common-decor">
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="plus"></li>
        <li class="plus"></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">availability</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <a href="javascript:void(0);"><img src="../assets/images/pro3/1.jpg" alt=""></a>
                        </td>
                        <td><a href="javascript:void(0);">cotton shirt</a>
                            <div class="mobile-cart-content">
                                <div class="col-xs-3">
                                    <p>in stock</p>
                                </div>
                                <div class="col-xs-3">
                                    <h5 class="td-color mb-0">$63.00</h5>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="javascript:void(0);" class="icon mr-1"><i
                                            class="fa fa-close"></i> </a><a href="javascript:void(0);" class="cart"><i
                                            class="fa fa-shopping-cart "></i></a></h2>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5 class="mb-0">$63.00</h5>
                        </td>
                        <td>
                            <p>in stock</p>
                        </td>
                        <td><a href="javascript:void(0);" class="icon me-3"><i class="fa fa-close"></i> </a><a href="javascript:void(0);"
                                                                                             class="cart"><i class="fa fa-shopping-cart "></i></a></td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>
                            <a href="javascript:void(0);"><img src="../assets/images/pro3/1.jpg" alt=""></a>
                        </td>
                        <td><a href="javascript:void(0);">cotton shirt</a>
                            <div class="mobile-cart-content">
                                <div class="col-xs-3">
                                    <p>in stock</p>
                                </div>
                                <div class="col-xs-3">
                                    <h5 class="td-color mb-0">$63.00</h5>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="javascript:void(0);" class="icon mr-1"><i
                                            class="fa fa-close"></i> </a><a href="javascript:void(0);" class="cart"><i
                                            class="fa fa-shopping-cart "></i></a></h2>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5 class="mb-0">$63.00</h5>
                        </td>
                        <td>
                            <p>in stock</p>
                        </td>
                        <td><a href="javascript:void(0);" class="icon me-3"><i class="fa fa-close"></i> </a><a href="javascript:void(0);"
                                                                                             class="cart"><i class="fa fa-shopping-cart "></i></a></td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>
                            <a href="javascript:void(0);"><img src="../assets/images/pro3/1.jpg" alt=""></a>
                        </td>
                        <td><a href="javascript:void(0);">cotton shirt</a>
                            <div class="mobile-cart-content">
                                <div class="col-xs-3">
                                    <p>in stock</p>
                                </div>
                                <div class="col-xs-3">
                                    <h5 class="td-color mb-0">$63.00</h5>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="javascript:void(0);" class="icon mr-1"><i
                                            class="fa fa-close"></i> </a><a href="javascript:void(0);" class="cart"><i
                                            class="fa fa-shopping-cart "></i></a></h2>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5 class="mb-0">$63.00</h5>
                        </td>
                        <td>
                            <p>in stock</p>
                        </td>
                        <td><a href="javascript:void(0);" class="icon me-3"><i class="fa fa-close"></i> </a><a href="javascript:void(0);"
                                                                                             class="cart"><i class="fa fa-shopping-cart "></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row wishlist-buttons">
            <div class="col-12"><a href="javascript:void(0);" class="btn btn_dark">continue shopping</a> <a href="javascript:void(0);"
                                                                                          class="btn btn_dark mt-xs-2">check out</a></div>
        </div>
    </div>
</section>
<!--section end-->


@endsection

@section('js')
@endsection