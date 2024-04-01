<!DOCTYPE html>
<html lang="en">

<head>
    <title>Happy Bark -The Pet Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">

    <!--icon css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">

    <!--bootstrap css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!--map css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vector-map.css') }}">

    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">

    <!--slick css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css') }}">

    <!--theme css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    @yield('css')

</head>

<body>

    <!--loader start-->
    <div class="loader-wrapper">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--loader end-->


    <!--Start Top Header-->
    <header>
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 welcome">
                        <div class="greeting">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item d-inline-block">
                                    <span class="top-call mb-0 text-w"><i class="fa fa-phone mx-1 text-w"></i>+91
                                        7660020250</span>
                                    <span class="top-email mx-2 text-w"><i
                                            class="fa fa-envelope-o mx-1 text-w"></i>query@happybark.in</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8  col-md-4 col-sm-4 text-end">
                        <nav id="main-nav">
                            <ul id="main-menu2" class="sm pixelstrap sm-horizontal d-inline-block" style="top: 4px;">

                                <li>
                                    <a href="{{url('/')}}" class="text-w">Home</a>
                                </li>

                                <li>
                                    <a href="{{url('/brand')}}" class="text-w">Brands</a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}" class="text-w">Learn With Us</a>
                                </li>
                            </ul>
                            <ul class="list-inline list-unstyled  d-inline-block">
                                <li class="d-inline-block">
                                    <span class="list-inline-item"><a href="https://www.facebook.com"><i
                                                class="fa fa-facebook text-w" aria-hidden="true"></i></a>
                                    </span>
                                    <span class="list-inline-item"><a href="https://twitter.com/">
                                            <i class="fa fa-twitter text-w" aria-hidden="true"></i></a>
                                    </span>
                                    <span class="list-inline-item"><a href="https://twitter.com/"><i
                                                class="fa fa-instagram text-w" aria-hidden="true"></i></a>
                                    </span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- <div class="col-lg-3  col-md-4 col-sm-4">
                        <ul class="list-inline list-unstyled  mb-0">
                            <li class="list-inline-item">
                                <div class="dropdown">
                                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">USD
                                        <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">ABC</a>
                                        <a class="dropdown-item" href="javascript:void(0);">DEF</a>
                                        <a class="dropdown-item" href="javascript:void(0);">GHI</a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-inline-block">
                                <span class="list-inline-item"><a href="https://www.facebook.com"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                </span>
                                <span class="list-inline-item"><a href="https://twitter.com/"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a>
                                </span>
                                <span class="list-inline-item"><a href="https://twitter.com/"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>
                                </span>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- menu -->
        <div class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-content">
                            <div class="menu-left ">
                                <div class="brand-logo ">
                                    <a href="{{url('/')}}">
                                        <img src="{{ asset('frontend/assets/images/happy-bark-logo.png') }}"
                                            alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="menu-right ms-auto">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <nav id="main-nav">
                                    <!-- Sample menu definition -->
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right ps-2"
                                                    aria-hidden="true"></i></div>
                                        </li>
                                        <!-- <li><a href="javascript:void(0);">Blog</a>
                                            <ul>
                                                <li><a href="blog(left-slidebar).html">Left Sidebar</a></li>
                                                <li><a href="blog(right-slidebar).html">Right Sidebar</a></li>
                                                <li><a href="blog(no-slidebar).html">No Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        <li>
                                            <a href="javascript:void(0);">Dog</a>
                                            <ul class="mega-menu full-mega-menu full-mega-menu1">
                                                <li>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Foods</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="{{url('/item')}}">Dog Dry
                                                                                    Food
                                                                                    wear</a></li>
                                                                            <li><a href="{{url('/item')}}">Dog Wet
                                                                                    Food</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Puppy
                                                                                    Food</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}"> Dod Adult
                                                                                    Food
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Grain Free
                                                                                    Food
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Supplemt</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Treats</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="{{url('/item')}}">Bones &
                                                                                    Hard Chew</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Training
                                                                                    Treats</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Dental
                                                                                    Treats
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Biscuits
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Vegetarian
                                                                                    Treats
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Soft Chewy
                                                                                    Treats
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Grooming</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="{{url('/item')}}">Shampoo &
                                                                                    Conditioners
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Brushes &
                                                                                    Comb
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Towels &
                                                                                    Wipes
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Serum ,Oil
                                                                                    & Paw Cares</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Dental
                                                                                    Hygiene</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Clippers &
                                                                                    Trimmers
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Toy</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="{{url('/item')}}">Chew Toy
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Plush Toy
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Interactive
                                                                                    Toy
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Tough Chew
                                                                                    Toy</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Rope
                                                                                    Toy</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Squeaker
                                                                                    Toy
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Health & Hygiene</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="items.html;">Dewormer</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Supplements</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">OTC
                                                                                    Medicine
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Oral
                                                                                    Care</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Itch
                                                                                    Control</a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0);">Cat</a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Foods</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="{{url('/item')}}">Cat Dry
                                                                                    Food
                                                                                    wear</a></li>
                                                                            <li><a href="{{url('/item')}}">Cat Wet
                                                                                    Food</a>
                                                                            </li>

                                                                            <li><a href="{{url('/item')}}">Cat Adult
                                                                                    Food
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Grain Free
                                                                                    Food
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Supplemt</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Grooming</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="{{url('/item')}}">Shampoo &
                                                                                    Conditioners
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Brushes &
                                                                                    Comb
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Towels &
                                                                                    Wipes
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Serum ,Oil
                                                                                    & Paw Cares</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Dental
                                                                                    Hygiene</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Clippers &
                                                                                    Trimmers
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Toy</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="{{url('/item')}}">Chew Toy
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Plush Toy
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Interactive
                                                                                    Toy
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Tough Chew
                                                                                    Toy</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Rope
                                                                                    Toy</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Squeaker
                                                                                    Toy
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Treats</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="{{url('/item')}}">Bones &
                                                                                    Hard Chew</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Training
                                                                                    Treats</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Dental
                                                                                    Treats
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Biscuits
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Vegetarian
                                                                                    Treats
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Soft Chewy
                                                                                    Treats
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Health & Hygiene</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="{{url('/item')}}">Dewormer</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Supplements</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">OTC
                                                                                    Medicine
                                                                                </a></li>
                                                                            <li><a href="{{url('/item')}}">Oral
                                                                                    Care</a>
                                                                            </li>
                                                                            <li><a href="{{url('/item')}}">Itch
                                                                                    Control</a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="{{url('/all-product')}}">Bird</a>
                                        </li>

                                        <li>
                                            <a href="{{url('/all-product')}}">Small Pet</a>
                                        </li>

                                        <li>
                                            <a href="{{url('/all-product')}}">Pharmacy</a>
                                            <!-- <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>mens's fashion</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="javascript:void(0);">sports
                                                                                    wear</a></li>
                                                                            <li><a href="javascript:void(0);">top</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">bottom</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">ethic
                                                                                    wear</a></li>
                                                                            <li><a href="javascript:void(0);">sports
                                                                                    wear</a></li>
                                                                            <li><a href="javascript:void(0);">shirts</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>women's fashion</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="javascript:void(0);">dresses</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">skirts</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">westarn
                                                                                    wear</a></li>
                                                                            <li><a href="javascript:void(0);">ethic
                                                                                    wear</a></li>
                                                                            <li><a href="javascript:void(0);">sport
                                                                                    wear</a></li>
                                                                            <li><a href="javascript:void(0);">bottom
                                                                                    wear</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>kids's fashion</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="javascript:void(0);">sports
                                                                                    wear</a></li>
                                                                            <li><a href="javascript:void(0);">ethic
                                                                                    wear</a></li>
                                                                            <li><a href="javascript:void(0);">sports
                                                                                    wear</a></li>
                                                                            <li><a href="javascript:void(0);">top</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">bottom</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">ethic
                                                                                    wear</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Accessories</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="javascript:void(0);">fashion
                                                                                    jewellery</a></li>
                                                                            <li><a href="javascript:void(0);">caps and
                                                                                    hats</a></li>
                                                                            <li><a href="javascript:void(0);">precious
                                                                                    jewellery</a></li>
                                                                            <li><a
                                                                                    href="javascript:void(0);">necklaces</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="javascript:void(0);">earrings</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">wrist
                                                                                    wear</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>men's accessories</h5>
                                                                    </div>
                                                                    <div class="mega-content">
                                                                        <ul>
                                                                            <li><a href="javascript:void(0);">ties</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="javascript:void(0);">cufflinks</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">pockets
                                                                                    squares</a></li>
                                                                            <li><a
                                                                                    href="javascript:void(0);">helmets</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="javascript:void(0);">scarves</a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);">phone
                                                                                    cases</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </ul> -->
                                        </li>

                                    </ul>
                                </nav>
                                <div class="main_menu_right">
                                    <button onclick="openSearch()"><span class="ti-search"></span></button>
                                    <button><span class="ti-user"></span></button>
                                    <button><span class="ti-heart"></span></button>
                                    <button onclick="openCart()"><span class="ti-bag"></span></button>
                                    <button class="setting"><span class="ti-settings"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Top Header end-->

    @yield('content')


    <!-- Footer start-->
    <footer>
        <section class="footer common-bg">

            <!-- <ul class="common-decor">
                <li class="circel"></li>
                <li class="circel"></li>
                <li class="circel"></li>
                <li class="plus"></li>
                <li class="plus"></li>
            </ul> -->

            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="footer-title">
                            <img src="{{ asset('frontend/assets/images/happy-bark-logo.png') }}" alt=""
                                class="mb-3" />
                        </div>

                        <div class="footer-content">
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet odio sit amet nibh mauris.</p>
                            <div class="social-icon">
                                <ul class="mb-0">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-3 col-sm-3 links px-3">
                        <div class="footer-title">
                            <h5>Useful Links</h5>
                        </div>
                        <div class="footer-content">
                            <ul class="useful-link">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/brand')}}">Brand</a></li>
                                <li><a href="{{url('/')}}">Learn With Us</a></li>
                                <li><a href="{{url('/')}}">Pharmacy</a></li>
                                <li><a href="{{url('/')}}">Shipping</a></li>
                                <!-- <li><a href="javascript:void(0);">Skins Problems?</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-title">
                            <h5>Portfolio</h5>
                        </div>
                        <div class="footer-content">
                            <ul class="portfolio">
                                <li><a href="portfolio-grid-3.html"><img src="../assets/images/photo-gallery/1.jpg"
                                            alt="" /> </a></li>
                                <li><a href="portfolio-grid-3.html"><img src="../assets/images/photo-gallery/2.jpg"
                                            alt="" /> </a></li>
                                <li><a href="portfolio-grid-3.html"><img src="../assets/images/photo-gallery/3.jpg"
                                            alt="" /> </a></li>
                                <li><a href="portfolio-grid-3.html"><img src="../assets/images/photo-gallery/4.jpg"
                                            alt="" /> </a></li>
                                <li><a href="portfolio-grid-3.html"><img src="../assets/images/photo-gallery/7.jpg"
                                            alt="" /> </a></li>
                                <li><a href="portfolio-grid-3.html"><img src="../assets/images/photo-gallery/9.jpg"
                                            alt="" /> </a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="footer-title">
                            <h5>contact us</h5>
                        </div>
                        <div class="footer-content">
                            <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i>Demo Store Demo Store India-3654123</li>
                                <li><i class="fa fa-phone"></i>Call Us: +91 7660020250</li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: query@happybark.in</li>
                                <!-- <li><i class="fa fa-fax"></i>Fax: 123456</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="copyright">
            <div class="container">
                <div class="text-muted text-center">
                    <h6>Copyrights &copy; 2019 Happy Bark - The Pet Shop. All Rights is Reserved.</h6>
                </div>
            </div>
        </div>
    </footer>
    <!-- End-Footer -->


    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="quick-view-img">
                                    <img src="{{ asset('frontend/assets/images/pro3/1.jpg') }}" alt=""
                                        class="img-fluid blur-up lazyload">
                                </div>
                            </div>
                            <div class="col-lg-6 rtl-text">
                                <div class="product-right">
                                    <h2>Women Pink Shirt</h2>
                                    <h3>$32.96</h3>
                                    <ul class="color-variant">
                                        <li class="bg-light0"></li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-light2"></li>
                                    </ul>
                                    <div class="border-product">
                                        <h6 class="product-title">product details</h6>
                                        <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium</p>
                                    </div>
                                    <div class="product-description border-product">
                                        <div class="size-box">
                                            <ul>
                                                <li class="active"><a href="javascript:void(0);">s</a></li>
                                                <li><a href="javascript:void(0);">m</a></li>
                                                <li><a href="javascript:void(0);">l</a></li>
                                                <li><a href="javascript:void(0);">xl</a></li>
                                            </ul>
                                        </div>
                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity"
                                                    class="form-control input-number" value="1">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-buttons">
                                        <a href="javascript:void(0);" class="btn btn_dark">
                                            add to cart
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn_dark">
                                            buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->


    <!-- Add to cart panel start-->
    <div id="cart_side" class="add_to_cart right">
        <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>my cart</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeCart()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="cart_media">
                <ul class="cart_product">
                    <li>
                        <div class="media">
                            <a href="javascript:void(0);">
                                <img alt="" class="me-3"
                                    src="{{ asset('frontend/assets/images/blog/1.jpg') }}">
                            </a>
                            <div class="media-body">
                                <a href="javascript:void(0);">
                                    <h6>item name</h6>
                                </a>
                                <h4>
                                    <span>1 x $ 100.00</span>
                                </h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="javascript:void(0);">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="javascript:void(0);">
                                <img alt="" class="me-3"
                                    src="{{ asset('frontend/assets/images/blog/2.jpg') }}">
                            </a>
                            <div class="media-body">
                                <a href="javascript:void(0);">
                                    <h6>item name</h6>
                                </a>
                                <h4>
                                    <span>1 x $ 80.00</span>
                                </h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="javascript:void(0);">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="javascript:void(0);"><img alt="" class="me-3"
                                    src="{{ asset('frontend/assets/images/blog/3.jpg') }}"></a>
                            <div class="media-body">
                                <a href="javascript:void(0);">
                                    <h6>item name</h6>
                                </a>
                                <h4><span>1 x $ 50.00</span></h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="javascript:void(0);">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="cart_total">
                    <li>
                        <div class="total">
                            <h5>subtotal : <span>$230.00</span></h5>
                        </div>
                    </li>
                    <li>
                        <div class="buttons">
                            <a href="{{url('/cart')}}" class="btn btn-solid btn-xs view-cart">view cart</a>
                            <a href="javascript:void(0);" class="btn btn-solid btn-xs checkout">checkout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Add to cart panel end-->


    <!-- Search top panel start-->
    <div id="cart_top" class="add_to_cart top">
        <a href="javascript:void(0)" class="overlay" onclick="closeSearch()"></a>
        <div class="cart-inner top-search">
            <input type="search" placeholder="Search......Your Style...." name="search"
                class="searchbox-input" onkeyup="buttonUp();" required>
            <a href=""> <span class="ti-search" onclick="closeSearch()"></span></a>
        </div>
    </div>
    <!-- Search top panel end-->


    <!-- tap to top start-->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end-->


    <!--letest jquary-->
    <script src="{{ asset('frontend/assets/js/jquery-3.4.0.js') }}"></script>

    <!--timer js-->
    <script src="{{ asset('frontend/assets/js/timer.js') }}"></script>

    <!--popper js-->
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>

    <!--bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-notify.min.js') }}"></script>

    <!--slick js-->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

    <!--menu js-->
    <script src="{{ asset('frontend/assets/js/menu.js') }}"></script>

    <!--theme js-->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @yield('js')
</body>

</html>
