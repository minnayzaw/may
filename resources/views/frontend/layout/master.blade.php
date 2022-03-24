<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}" />
        <!-- title -->
        <title>H & M - Grab Asian Groceria | {{$title}}</title>
        <meta name="description" content="Asian organic food theme, vegetables, foof store, restaurant accessories"/>
        <meta name="keywords" content="Asian organic food theme, vegetables, foof store, restaurant accessories"/>
        <meta name="author" content="MNZ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/favicon" href="{{url('image/may-store-logo.png')}}">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
        <!-- simple-line icon -->
        <link rel="stylesheet" type="text/css" href="{{url('css/simple-line-icons.css')}}">
        <!-- font-awesome icon -->
        <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.min.css')}}">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="{{url('css/themify-icons.css')}}">
        <!-- ion icon -->
        <link rel="stylesheet" type="text/css" href="{{url('css/ionicons.min.css')}}">
        <!-- owl slider -->
        <link rel="stylesheet" type="text/css" href="{{url('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/owl.theme.default.min.css')}}">
        <!-- swiper -->
        <link rel="stylesheet" type="text/css" href="{{url('css/swiper.min.css')}}">
        <!-- animation -->
        <link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}">
        <!-- style -->
        <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/custom.css')}}">
    </head>
    <body>
      @section('header')
      <!-- header start -->
        <header class="header-area">
            <div class="header-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header-main">
                                <!-- logo start -->
                                <div class="header-element logo">
                                    <a href="/">
                                        <img src="{{url('image/may-store-logo.png')}}" width="120" alt="logo-image" class="img-fluid">
                                    </a>
                                </div>
                                <!-- logo end -->
                                <!-- search start -->
                                <div class="header-element search-wrap">
                                    <input type="text" name="search" placeholder="Search product.">
                                    <a href="search-list.html" class="search-btn"><i class="fa fa-search"></i></a>
                                </div>
                                <!-- search end -->
                                <!-- header-icon start -->
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        <li class="side-wrap nav-toggler">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                            <span class="line"></span>
                                            </button>
                                        </li>
                                        <li class="side-wrap user-wrap">
                                            <div class="acc-desk">
                                                <div class="user-icon">
                                                    <a href="#" class="user-icon-desk">
                                                        <span><i class="icon-user"></i></span>
                                                    </a>
                                                </div>
                                                <div class="user-info">
                                                    <span class="acc-title">Account</span>
                                                    <div class="account-login">
                                                        <a href="#">Register</a>
                                                        <a href="#">Log in</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="acc-mob">
                                                <a href="#" class="user-icon">
                                                    <span><i class="icon-user"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                        <!-- <li class="side-wrap wishlist-wrap">
                                            <a href="favourite.html" class="header-wishlist">
                                                <span class="wishlist-icon"><i class="icon-heart"></i></span>
                                                <span class="wishlist-counter">0</span>
                                            </a>
                                        </li> -->
                                        <li class="side-wrap">
                                            <div class="shopping-widget">
                                                <div class="shopping-cart">
                                                    <a href="#" class="cart-count" id="cart_detail">
                                                        <span class="cart-icon-wrap">
                                                            <span class="cart-icon"><i class="icon-handbag"></i></span>
                                                            <span class="bigcounter">{{$count}}</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- header-icon end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom-area">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="main-menu-area">
                                    <div class="main-navigation navbar-expand-xl">
                                        <div class="box-header menu-close">
                                            <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                        </div>
                                        <!-- menu start -->
                                        <div class="navbar-collapse" id="navbarContent">
                                            <div class="megamenu-content">
                                                <div class="mainwrap">
                                                    <ul class="main-menu">
                                                        <li class="menu-link parent">
                                                            <a href="/" class="link-title">
                                                                <span class="sp-link-title">Home</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-link parent">
                                                            <a href="/about" class="link-title">
                                                                <span class="sp-link-title">About Us</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-link parent">
                                                            <a href="javascript:void(0)" class="link-title">
                                                                <span class="sp-link-title">Products</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <a href="#collapse-top-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                                <span class="sp-link-title">Products</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-page-menu">
                                                              @foreach ($categories as $cat)
                                                                <li class="submenu-li">
                                                                    <a href="{{url('/products/').'/'.$cat->id}}" class="submenu-link">{{$cat->name}}</a>
                                                                </li>
                                                              @endforeach
                                                                <!-- <li class="submenu-li">
                                                                    <a href="/products" class="submenu-link">Cooking Ingredients</a>
                                                                </li> -->
                                                            </ul>
                                                        </li>
                                                        <li class="menu-link parent">
                                                            <a href="/news" class="link-title">
                                                                <span class="sp-link-title">News</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-link parent">
                                                            <a href="/contact" class="link-title">
                                                                <span class="sp-link-title">Contact Us</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- menu end -->
                                        <div class="img-hotline">
                                            <div class="image-line">
                                                <a href="javascript:void(0)"><img src="{{url('image/icon_contact.png')}}" class="img-fluid" alt="image-icon"></a>
                                            </div>
                                            <div class="image-content">
                                                <span class="hot-l">Hotline:</span>
                                                <span>0123 456 789</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- mobile menu start -->
        <div class="header-bottom-area mobile">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main-menu-area">
                            <div class="main-navigation navbar-expand-xl">
                                <div class="box-header menu-close">
                                    <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                </div>
                                <!-- menu start -->
                                <div class="navbar-collapse" id="navbarContent01">
                                    <div class="megamenu-content">
                                        <div class="mainwrap">
                                            <ul class="main-menu">
                                              <li class="menu-link">
                                                  <a href="/" class="link-title">
                                                      <span class="sp-link-title">Home</span>
                                                  </a>
                                              </li>
                                              <li class="menu-link">
                                                  <a href="/about" class="link-title">
                                                      <span class="sp-link-title">About Us</span>
                                                  </a>
                                              </li>
                                                <li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Products</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-page-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Products</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu1">
                                                      @foreach ($categories as $cat)
                                                        <li class="submenu-li">
                                                            <a href="{{url('/productDetail/').'/'.$cat->id}}" class="submenu-link">{{$cat->name}}</a>
                                                        </li>
                                                      @endforeach

                                                        <!-- <li class="submenu-li">
                                                            <a href="#" class="submenu-link">Category1</a>
                                                        </li> -->

                                                    </ul>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="/news" class="link-title">
                                                        <span class="sp-link-title">News</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="/contact" class="link-title">
                                                        <span class="sp-link-title">Contact Us</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- menu end -->
                                <div class="img-hotline">
                                    <div class="image-line">
                                        <a href="javascript:void(0)"><img src="{{url('image/icon_contact.png')}}" class="img-fluid" alt="image-icon"></a>
                                    </div>
                                    <div class="image-content">
                                        <span class="hot-l">Hotline:</span>
                                        <span>0123 456 789</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu end -->
        @show

        @section('banner')
        <!--home page slider start-->
        <section class="slider">
            <div class="home-slider owl-carousel owl-theme">
                <div class="items">
                    <div class="img-back" style="background-image:url(image/slider1.jpg);">
                        <div class="h-s-content slide-c-l">
                            <span>Summer vage sale</span>
                            <h1>Fresh fruits<br>&vegetable</h1>
                            <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="img-back" style="background-image:url(image/slider2.jpg);">
                        <div class="h-s-content slide-c-r">
                            <span>Organic indian masala</span>
                            <h1>Prod of indian<br>100% pacaging</h1>
                            <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="img-back" style="background-image:url(image/slider3.jpg);">
                        <div class="h-s-content slide-c-c">
                            <span>Top selling!</span>
                            <h1>Fresh for your health</h1>
                            <a href="grid-list.html" class="btn btn-style1">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home page slider start-->
        @show

        @section('content')
        <!-- Category image slide -->
        <!-- <section class="category-img1 section-t-padding section-b-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Shop by category</h2>
                        </div>
                        <div class="home-category owl-carousel owl-theme">
                          @foreach ($categories as $cat)
                            <div class="items">
                                <div class="h-cate">
                                    <div class="c-img">
                                        <a href="{{url('/products/').'/'.$cat->id}}" class="home-cate-img">
                                            <img class="img-fluid" src="image/category-image/home-1/cat1.jpg" alt="cate-image">
                                            <span class="cat-title">{{$cat->name}}</span>
                                        </a>
                                    </div>
                                    <span class="cat-num">19 Items</span>
                                </div>
                            </div>
                          @endforeach

                            <div class="items">
                                <div class="h-cate">
                                    <div class="c-img">
                                        <a href="grid-list.html" class="home-cate-img">
                                            <img class="img-fluid" src="image/category-image/home-1/cat1.jpg" alt="cate-image">
                                            <span class="cat-title">Fresh fruits</span>
                                        </a>
                                    </div>
                                    <span class="cat-num">19 Items</span>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category image slide -->
        <!-- Our Products Tab start -->
        <section class="our-products-tab section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Our new products</h2>
                            <!-- <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home">SPECIAL PRODUCTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile">NEW PRODUCTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact">BESTSELLER</a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="tab-content pro-tab-slider">
                            <div class="tab-pane fade show active" id="home">
                                <div class="home-pro-tab swiper-container">
                                    <div class="swiper-wrapper">

                                        <!-- <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-4.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-04.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh litchi 100% organic</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$117.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                          @foreach ($products as $pro)
                                            <div class="swiper-slide">
                                                <div class="h-t-pro">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a class="product-detail" id="img_{{$pro->id}}" href="#">
                                                                <img src="{{url('image/'.$pro->image)}}" alt="pro-img1" class="img-fluid" />
                                                            </a>
                                                        </div>
                                                        <!-- <div class="Pro-lable">
                                                            <span class="p-text">New</span>
                                                        </div>
                                                        <div class="pro-icn">
                                                            <a href="{{url('/wishlist/').'/'.$pro->id}}" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                            <a href="{{url('/cart/').'/'.$pro->id}}" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="{{url('/products/').'/'.$pro->id}}"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                        </div> -->
                                                    </div>
                                                    <div class="caption">
                                                        <h3><a class="product-detail" id="title_{{$pro->id}}" href="#">{{$pro->title}}</a></h3>
                                                        <!-- <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div> -->
                                                        <div class="pro-price">
                                                            <span class="new-price">${{$pro->price}} USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          @endforeach

                                    </div>
                                </div>
                                <!-- <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="tab-pane fade" id="profile">
                                <div class="home-pro-tab swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-7.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-07.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-10%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh dryed almod (50gm)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$580.00 USD</span>
                                                        <span class="old-price"><del>$590.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-8.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-08.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Orange juice (5ltr)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$93.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-9.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-09.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-12%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Organic coconet (5ltr) juice</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$167.00 USD</span>
                                                        <span class="old-price"><del>$179.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-10.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-010.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Shrimp jumbo (5Lb)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-1.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-01.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh organic fruit (50gm)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$130.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-2.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-02.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh & healty food</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$126.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-3.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-03.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-20%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh apple</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$130.00 USD</span>
                                                        <span class="old-price"><del>$150.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-4.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-04.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh litchi 100% organic</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$117.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-5.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-05.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-12%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Vegetable tomato fresh</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$133.00 USD</span>
                                                        <span class="old-price"><del>$145.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-6.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-06.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-21%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Natural grassbean</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$139.00 USD</span>
                                                        <span class="old-price"><del>$160.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-7.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-07.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-10%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh dryed almod (50gm)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$580.00 USD</span>
                                                        <span class="old-price"><del>$590.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-8.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-08.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Orange juice (5ltr)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$93.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-9.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-09.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-12%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Organic coconet (5ltr) juice</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$167.00 USD</span>
                                                        <span class="old-price"><del>$179.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-10.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-010.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Shrimp jumbo (5Lb)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <div class="home-pro-tab swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-8.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-08.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Orange juice (5ltr)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$93.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-9.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-09.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-12%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Organic coconet (5ltr) juice</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$167.00 USD</span>
                                                        <span class="old-price"><del>$179.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-10.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-010.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Shrimp jumbo (5Lb)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-2.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-02.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh organic fruit (50gm)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$130.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-7.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-07.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh & healty food</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$126.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-3.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-03.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-20%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh apple</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$130.00 USD</span>
                                                        <span class="old-price"><del>$150.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-4.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-04.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh litchi 100% organic</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$117.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-5.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-05.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-12%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Vegetable tomato fresh</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$133.00 USD</span>
                                                        <span class="old-price"><del>$145.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-6.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-06.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-21%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Natural grassbean</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$139.00 USD</span>
                                                        <span class="old-price"><del>$160.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-2.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-02.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-10%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Fresh dryed almod (50gm)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$580.00 USD</span>
                                                        <span class="old-price"><del>$590.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-8.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-08.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Orange juice (5ltr)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$93.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-9.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-09.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-12%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Organic coconet (5ltr) juice</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star d-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$167.00 USD</span>
                                                        <span class="old-price"><del>$179.00 USD</del></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="product.html">
                                                            <img src="image/pro/pro-img-10.jpg" alt="pro-img1" class="img-fluid">
                                                            <img src="image/pro/pro-img-010.jpg" alt="additional image" class="img-fluid additional-image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">New</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                        <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="product.html">Shrimp jumbo (5Lb)</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star c-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Products Tab end -->
        <!-- quick veiw start -->
        <section class="quick-view">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                            <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="quick-veiw-area">
                            <div class="quick-image">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="image-1">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/pro-page-image/pro-page-image.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-2">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/pro-page-image/prro-page-image01.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-3">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/pro-page-image/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-4">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/pro-page-image/pro-page-image1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-5">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/pro-page-image/pro-page-image2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-6">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/pro-page-image/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-7">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/pro-page-image/pro-page-image3.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-8">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="image/pro-page-image/pro-page-image03.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                                    <li class="nav-item items">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="image/pro-page-image/image1.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="image/pro-page-image/image2.jpg" class="img-fluid" alt="iamge"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img src="image/pro-page-image/image3.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img src="image/pro-page-image/image4.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img src="image/pro-page-image/image5.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img src="image/pro-page-image/image6.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img src="image/pro-page-image/image8.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img src="image/pro-page-image/image7.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quick-caption">
                                <h4>Fresh organic reachter</h4>
                                <div class="quick-price">
                                    <span class="new-price">$350.00 USD</span>
                                    <span class="old-price"><del>$399.99 USD</del></span>
                                </div>
                                <div class="quick-rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-description">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                                </div>
                                <div class="pro-size">
                                    <label>Size: </label>
                                    <select>
                                        <option>1 ltr</option>
                                        <option>3 ltr</option>
                                        <option>5 ltr</option>
                                    </select>
                                </div>
                                <div class="plus-minus">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <input type="text" name="name" value="1">
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                                    <a href="cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quick veiw end -->
        <!-- Blog start -->
        <section class="section-tb-padding blog1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Recent news</h2>
                        </div>
                        <div class="home-blog owl-carousel owl-theme">
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="image/blog-image/blog-1.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Green onion knife and salad plased</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">6 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="image/blog-image/blog-2.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">All time fresh every time healthy</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">1 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="image/blog-image/blog-3.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Health and skin for your organic</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">1 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="image/blog-image/blog-4.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Health and skin for your organic</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">0 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="image/blog-image/blog-5.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Organic mix masala fresh & soft</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">0 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="image/blog-image/blog-6.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Fresh organic brand and picnic</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">0 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="blog-style-1-details.html">
                                            <img src="image/blog-image/blog-7.jpg" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="blog-style-1-details.html">Vegist special liquide fresh vegetable</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                        </div>
                                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                        <a href="blog-style-1-details.html" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">8 Jan 2021</span>
                                            <a href="javascript:void(0)">0 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all-blog">
                            <a href="blog-style-1-3-grid.html" class="btn btn-style1">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog end -->
        @show

      @section('footer')
        <!-- footer start -->
        <section class="footer-one section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="f-logo" style="border-top:none !important;padding-top:0 !important;padding-bottom:0 !important;">
                            <ul class="footer-ul">
                                <li class="footer-li footer-logo">
                                    <a href="/">
                                        <img class="img-fluid" src="{{url('image/may-store-logo.png')}}" width="120" alt="">
                                    </a>
                                </li>
                                <li class="footer-li footer-address">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-location"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Address</h6>
                                            <span>401 Broadway 24th floor</span>
                                            <span>Near ant mall cross road</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer-li footer-contact">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-telephone"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Contact</h6>
                                            <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                            <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer-li footer-address">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-help"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Help</h6>
                                            <span>Lorem ipsum is simply</span>
                                            <span>Dummy the printing</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer end -->
        <!-- footer copyright start -->
        <section class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="f-bottom">
                            <li class="f-c f-copyright">
                                <p>Copyright <i class="fa fa-copyright"></i> 2022 H&M Grab Asian Groceria</p>
                            </li>
                            <li class="f-c f-social">
                                <!-- <a href="https://www.whatsapp.com/" class="f-icn-link"><i class="fa fa-whatsapp"></i></a> -->
                                <a href="https://www.facebook.com/" class="f-icn-link"><i class="fa fa-facebook-f"></i></a>
                                <a href="https://twitter.com/" class="f-icn-link"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/" class="f-icn-link"><i class="fa fa-instagram"></i></a>
                                <!-- <a href="https://www.pinterest.com/" class="f-icn-link"><i class="fa fa-pinterest-p"></i></a>
                                <a href="https://www.youtube.com/" class="f-icn-link"><i class="fa fa-youtube"></i></a> -->
                            </li>
                            <li class="f-c f-payment">
                                <a href="checkout-1.html"><img src="{{url('image/payment.png')}}" class="img-fluid" alt="payment image"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer copyright end -->
        <!-- back to top start -->
        <a href="javascript:void(0)" class="scroll" id="top">
            <span><i class="fa fa-angle-double-up"></i></span>
        </a>
        <!-- back to top end -->
        <!-- <div class="mm-fullscreen-bg"></div> -->
        <!-- jquery -->
        <script src="{{url('js/modernizr-2.8.3.min.js')}}"></script>
        <script src="{{url('js/jquery-3.6.0.min.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <!-- popper -->
        <script src="{{url('js/popper.min.js')}}"></script>
        <!-- fontawesome -->
        <script src="{{url('js/fontawesome.min.js')}}"></script>
        <!-- owl carousal -->
        <script src="{{url('js/owl.carousel.min.js')}}"></script>
        <!-- swiper -->
        <script src="{{url('js/swiper.min.js')}}"></script>
        <!-- custom -->
        <script src="{{url('js/custom.js')}}"></script>
        <script src="{{url('js/custom-script.js')}}"></script>

    </body>
</html>
