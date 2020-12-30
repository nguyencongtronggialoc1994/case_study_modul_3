@extends('font_end.layout')
@section('content')

    <!-- Slider Area -->
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="single-slider"
             style="background-image: url('https://i.ytimg.com/vi/eGYry70cgk0/maxresdefault.jpg');height: 600px">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="hero-text">
                                        <h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
                                        <p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find
                                            it pereri <br> odiy maboriosm.</p>
                                        <div class="button">
                                            <a href="#" class="btn">Shop Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->


    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man"
                                                        role="tab">All product</a></li>
                                <li class="nav-item"><a class="nav-link"  href="{{route('home.search10')}}">0-10.000.000</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"  href="{{route('home.search1015')}}">10.000.000-15.000.000</a></li>
                                <li class="nav-item"><a class="nav-link"  href="{{route('home.search1520')}}">15.000.000-20.000.000</a></li>
                                <li class="nav-item"><a class="nav-link"  href="{{route('home.search20')}}" > 20.000.000~</a>
                                </li>
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        @for($i=0;$i<count($productSearch);$i++)
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="product-details.html">
                                                            <img class="default-img" src="{{$productSearch[$i]->image}}"
                                                                 alt="#">
                                                        </a>
                                                        <div class="button-head">
                                                            <div class="product-action">
                                                                <a  data-target="#exampleModal"
                                                                   title="Quick View" href="{{route('home.showDetail',$productSearch[$i]->id)}}"><i class="ti-search"></i><span>Chi tiết sản phẩm</span></a>

                                                            </div>
                                                            <div class="product-action-2">
                                                                <a href="{{route('cart.addToCart',$productSearch[$i]->id)}}"  class="btn btn-fefault add-to-cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3>
                                                            <a href="product-details.html">{{$productSearch[$i]->productName}}</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span>{{number_format($productSearch[$i]->buyPrice,0,',','.')}} VNĐ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade" id="women" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="new">New</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="price-dec">30% Off</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="out-of-stock">Hot</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                                                    <div class="product-price">
                                                        <span class="old">$60.00</span>
                                                        <span>$50.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade" id="kids" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="new">New</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="price-dec">30% Off</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="out-of-stock">Hot</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                                                    <div class="product-price">
                                                        <span class="old">$60.00</span>
                                                        <span>$50.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade" id="accessories" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="new">New</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="price-dec">30% Off</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="out-of-stock">Hot</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                                                    <div class="product-price">
                                                        <span class="old">$60.00</span>
                                                        <span>$50.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade" id="essential" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="new">New</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="price-dec">30% Off</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="out-of-stock">Hot</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                                                    <div class="product-price">
                                                        <span class="old">$60.00</span>
                                                        <span>$50.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade" id="prices" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="new">New</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Women Pant Collectons</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="price-dec">30% Off</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Awesome Cap For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Polo Dress For Women</a></h3>
                                                    <div class="product-price">
                                                        <span>$29.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img class="default-img"
                                                             src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750"
                                                             alt="#">
                                                        <span class="out-of-stock">Hot</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                               title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i
                                                                    class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                                                    <div class="product-price">
                                                        <span class="old">$60.00</span>
                                                        <span>$50.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Most Popular -->
{{--    <div class="product-area most-popular section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <h2>Hot Item</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="owl-carousel popular-slider">--}}
{{--                        <!-- Start Single Product -->--}}
{{--                        @for($i=0;$i<4;$i++)--}}
{{--                            <div class="single-product">--}}
{{--                                <div class="product-img">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="default-img" src="{{$products[$i]->image}}" alt="#">--}}
{{--                                        <span class="out-of-stock">Hot</span>--}}
{{--                                    </a>--}}
{{--                                    <div class="button-head">--}}
{{--                                        <div class="product-action">--}}
{{--                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View"--}}
{{--                                               href="#"><i class="ti-search"></i><span>Chi tiết sản phẩm</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-2">--}}
{{--                                            <a title="Add to cart" href="{{route('cart.addToCart',$products[$i]->id)}}">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-content">--}}
{{--                                    <h3><a href="product-details.html">{{$products[$i]->productName}}</a></h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span class="old">{{number_format($products[$i]->buyPrice/100*120,0,',','.')}}</span>--}}
{{--                                        <span>{{number_format($products[$i]->buyPrice,0,',','.')}} VNĐ</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                    @endfor--}}
{{--                    <!-- End Single Product -->--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End Most Popular Area -->


    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->

    <!-- Modal -->
{{--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"--}}
{{--                                                                                                      aria-hidden="true"></span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="row no-gutters">--}}
{{--                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">--}}
{{--                            <!-- Product Slider -->--}}
{{--                            <div class="product-gallery">--}}
{{--                                <div class="quickview-slider-active">--}}
{{--                                    <div class="single-slider">--}}
{{--                                        <img src="https://via.placeholder.com/569x528" alt="#">--}}
{{--                                    </div>--}}
{{--                                    <div class="single-slider">--}}
{{--                                        <img src="https://via.placeholder.com/569x528" alt="#">--}}
{{--                                    </div>--}}
{{--                                    <div class="single-slider">--}}
{{--                                        <img src="https://via.placeholder.com/569x528" alt="#">--}}
{{--                                    </div>--}}
{{--                                    <div class="single-slider">--}}
{{--                                        <img src="https://via.placeholder.com/569x528" alt="#">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End Product slider -->--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">--}}
{{--                            <div class="quickview-content">--}}
{{--                                <h2>Flared Shift Dress</h2>--}}
{{--                                <div class="quickview-ratting-review">--}}
{{--                                    <div class="quickview-ratting-wrap">--}}
{{--                                        <div class="quickview-ratting">--}}
{{--                                            <i class="yellow fa fa-star"></i>--}}
{{--                                            <i class="yellow fa fa-star"></i>--}}
{{--                                            <i class="yellow fa fa-star"></i>--}}
{{--                                            <i class="yellow fa fa-star"></i>--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </div>--}}
{{--                                        <a href="#"> (1 customer review)</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="quickview-stock">--}}
{{--                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h3>$29.00</h3>--}}
{{--                                <div class="quickview-peragraph">--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum--}}
{{--                                        ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui--}}
{{--                                        nemo ipsum numquam.</p>--}}
{{--                                </div>--}}
{{--                                <div class="size">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-6 col-12">--}}
{{--                                            <h5 class="title">Size</h5>--}}
{{--                                            <select>--}}
{{--                                                <option selected="selected">s</option>--}}
{{--                                                <option>m</option>--}}
{{--                                                <option>l</option>--}}
{{--                                                <option>xl</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6 col-12">--}}
{{--                                            <h5 class="title">Color</h5>--}}
{{--                                            <select>--}}
{{--                                                <option selected="selected">orange</option>--}}
{{--                                                <option>purple</option>--}}
{{--                                                <option>black</option>--}}
{{--                                                <option>pink</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="quantity">--}}
{{--                                    <!-- Input Order -->--}}
{{--                                    <div class="input-group">--}}
{{--                                        <div class="button minus">--}}
{{--                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled"--}}
{{--                                                    data-type="minus" data-field="quant[1]">--}}
{{--                                                <i class="ti-minus"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <input type="text" name="quant[1]" class="input-number" data-min="1"--}}
{{--                                               data-max="1000" value="1">--}}
{{--                                        <div class="button plus">--}}
{{--                                            <button type="button" class="btn btn-primary btn-number" data-type="plus"--}}
{{--                                                    data-field="quant[1]">--}}
{{--                                                <i class="ti-plus"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!--/ End Input Order -->--}}
{{--                                </div>--}}
{{--                                <div class="add-to-cart">--}}
{{--                                    <a href="#" class="btn">Add to cart</a>--}}
{{--                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>--}}
{{--                                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="default-social">--}}
{{--                                    <h4 class="share-now">Share:</h4>--}}
{{--                                    <ul>--}}
{{--                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>--}}
{{--                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Modal end -->

@endsection

