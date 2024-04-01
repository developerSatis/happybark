@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')


<!--breadcrumb start-->
<section class="theme-breadcrumb">
    <nav aria-label="breadcrumb">
        <div>
            <h2 class="text-center">CART</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">CART</li>
            </ol>
        </div>
    </nav>
</section>
<!--breadcrumb end-->


<!--cart start-->
<section class="cart-section section-b-space common-bg">
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
                        <th scope="col">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
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
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="text" name="quantity" class="form-control input-number"
                                                   value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h5 class="td-color">$63.00</h5>
                                </div>
                                <div class="col-xs-3">
                                    <h5 class="td-color"><a href="javascript:void(0);" class="icon"><i
                                            class="fa fa-close"></i></a></h5>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>$63.00</h5>
                        </td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number"
                                           value="1">
                                </div>
                            </div>
                        </td>
                        <td><a href="javascript:void(0);" class="icon"><i class="fa fa-close"></i></a></td>
                        <td>
                            <h5 class="td-color">$4539.00</h5>
                        </td>
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
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity"
                                                   class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h5 class="td-color">$63.00</h5>
                                </div>
                                <div class="col-xs-3">
                                    <h5 class="td-color"><a href="javascript:void(0);" class="icon"><i
                                            class="fa fa-close"></i></a></h5>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>$63.00</h5>
                        </td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number"
                                           value="1">
                                </div>
                            </div>
                        </td>
                        <td><a href="javascript:void(0);" class="icon"><i class="fa fa-close"></i></a></td>
                        <td>
                            <h5 class="td-color">$4539.00</h5>
                        </td>
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
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity"
                                                   class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h5 class="td-color">$63.00</h5>
                                </div>
                                <div class="col-xs-3">
                                    <h5 class="td-color"><a href="javascript:void(0);" class="icon"><i
                                            class="fa fa-close"></i></a></h5>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>$63.00</h5>
                        </td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number"
                                           value="1">
                                </div>
                            </div>
                        </td>
                        <td><a href="javascript:void(0);" class="icon"><i class="fa fa-close"></i></a></td>
                        <td>
                            <h5 class="td-color">$4539.00</h5>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                            <h5 class="mb-0">$6935.00</h5>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-6"><a href="{{url('/')}}"><button class="btn_dark">CONTINUE SHOPPING</button></a></div>
            <div class="col-6"><a href="{{url('/checkout')}}"><button class="btn_dark">CHECK OUT</button></a></div>

        </div>
    </div>
</section>
<!--cart end-->


@endsection

@section('js')
@endsection