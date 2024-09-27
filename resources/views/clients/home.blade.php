@extends('clients.layout.app')
@section('title')
    Trang chủ
@endsection
@section('content')
    <!-- START SLIDER AREA -->
    <div class="slider-area bg-3 bg-opacity-black-60 ptb-150 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-desc-3 slider-desc-4  text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider2-title-2 cd-headline clip is-full-width">
                                <span>Cung cấp mô hình</span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">One Piece</b>
                                    <b>Dragon Ball</b>
                                    <b>Gundam</b>
                                    <b>Kimetsu No Yaiba</b>
                                </span>
                            </h1>
                        </div>
                        <div class="slider-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                            <a href="#" class="button extra-small ">
                                <span class="text-uppercase">Mua Ngay</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SLIDER AREA -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- UP COMMING PRODUCT SECTION START -->
        <div class="up-comming-product-section mb-80">
            <div class="container">
                <div class="row">
                    <!-- up-comming-pro -->
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="up-comming-pro gray-bg clearfix">
                            <div class="up-comming-pro-img f-left">
                                <a href="#">
                                    <img src="{{ asset('clients') }}/img/up-comming/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="up-comming-pro-info f-left">
                                <h3><a href="#">Sắp Ra Mắt</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor
                                    incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. </p>
                                <div class="up-comming-time">
                                    <div data-countdown="2017/01/15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="banner-item banner-1">
                            <div class="ribbon-price">
                                {{-- <span>896.000 VNĐ</span> --}}
                            </div>
                            <div class="banner-img">
                                <a href="#"><img src="{{ asset('clients') }}/img/banner/1.jpg" alt=""></a>
                            </div>
                            {{-- <div class="banner-info">
                                <h3><a href="#">Product Name</a></h3>
                                <ul class="banner-featured-list">
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Lorem ipsum dolor</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>amet, consectetur</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>adipisicing elitest,</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>eiusmod tempor</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>labore et dolore.</span>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- UP COMMING PRODUCT SECTION END -->

        <!-- FEATURED PRODUCT SECTION START -->
        <div class="featured-product-section mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">Sản Phẩm Bán Chạy</h2>
                            <h6>There are many variations of passages of brands available,</h6>
                        </div>
                        
                    </div>
                </div>
                <div class="featured-product">
                    <div class="row active-featured-product slick-arrow-2">
                        <!-- product-item start -->
                        <div class="col-12 mx-2">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="{{ asset('clients') }}/img/product/4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <div class="pro-rating">
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </div>
                                    <h3 class="pro-price">879.000 đ</h3>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#productModal"
                                                title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="col-12 mx-2">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="{{ asset('clients') }}/img/product/4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <div class="pro-rating">
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </div>
                                    <h3 class="pro-price">879.000 đ</h3>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#productModal"
                                                title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="col-12 mx-2">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="{{ asset('clients') }}/img/product/4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <div class="pro-rating">
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </div>
                                    <h3 class="pro-price">879.000 đ</h3>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#productModal"
                                                title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="col-12 mx-2">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="{{ asset('clients') }}/img/product/4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <div class="pro-rating">
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </div>
                                    <h3 class="pro-price">879.000 đ</h3>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#productModal"
                                                title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="col-12 mx-2">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="{{ asset('clients') }}/img/product/4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <div class="pro-rating">
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </div>
                                    <h3 class="pro-price">879.000 đ</h3>
                                    <ul class="action-button">
                                        <li>
                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#productModal"
                                                title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to cart"><i
                                                    class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- product-item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED PRODUCT SECTION END -->

        <!-- BY BRAND SECTION START-->
        <div class="by-brand-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left ">
                            <h2 class="uppercase">Thương Hiệu</h2>
                            <h6 class="mb-40">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        </div>
                    </div>
                </div>
                <div class="by-brand-product">
                    <div class="row active-by-brand slick-arrow-2">
                        <!-- single-brand-product start -->
                        <div class="col-xs-12 mx-2">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="{{ asset('clients') }}/img/product/5.jpg"
                                        alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                        <!-- single-brand-product start -->
                        <div class="col-xs-12 mx-2">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="{{ asset('clients') }}/img/product/6.jpg"
                                        alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                        <!-- single-brand-product start -->
                        <div class="col-xs-12 mx-2">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="{{ asset('clients') }}/img/product/7.jpg"
                                        alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                        <!-- single-brand-product start -->
                        <div class="col-xs-12 mx-2">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="{{ asset('clients') }}/img/product/8.jpg"
                                        alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                        <!-- single-brand-product start -->
                        <div class="col-xs-12 mx-2">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="{{ asset('clients') }}/img/product/8.jpg"
                                        alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BY BRAND SECTION END -->

        <!-- BLOG SECTION START -->
        <div class="blog-section mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">Tin Tức Mới Nhất</h2>
                            <h6>There are many variations of passages of brands available,</h6>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="row">
                        <!-- blog-item start -->
                        <div class="col-md-4">
                            <div class="blog-item">
                                <img src="{{ asset('clients') }}/img/blog/1.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have
                                        suffered alterat on in some form, by injected humour, randomis words which don't
                                        look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-share"></i>29 Share</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <div class="col-md-4">
                            <div class="blog-item">
                                <img src="{{ asset('clients') }}/img/blog/2.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have
                                        suffered alterat on in some form, by injected humour, randomis words which don't
                                        look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-share"></i>29 Share</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <div class="col-md-4">
                            <div class="blog-item">
                                <img src="{{ asset('clients') }}/img/blog/3.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have
                                        suffered alterat on in some form, by injected humour, randomis words which don't
                                        look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-share"></i>29 Share</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG SECTION END -->
    </section>
    <!-- End page content -->
@endsection
