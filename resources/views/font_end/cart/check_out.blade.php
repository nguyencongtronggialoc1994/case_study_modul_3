@extends('font_end.layout')
@section('content')
    <section class="shop checkout section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <h2>Make Your Checkout Here</h2>
                        <p>Please register in order to checkout more quickly</p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{route('cart.checkout')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Customer Name<span>*</span></label>
                                        <input type="text" name="customerName" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Required Date<span>*</span></label>
                                        <input type="date" name="requiredDate" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Address<span>*</span></label>
                                        <input type="text" name="address" placeholder="" required="required">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Phone Number<span>*</span></label>
                                        <input type="number" name="numberPhone" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="hidden" value="{{date('Y-m-d')}}" name="orderDate" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="hidden" value="shipping" name="status" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="hidden" value="{{$totalPrice}}" name="totalPrice" placeholder="" required="required">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Checkout</button>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>CART TOTALS</h2>
                            <div class="content">
                                <ul>
                                    <li>Sub Total<span>{{$totalPrice}} đ</span></li>
                                    <li>Sale<span>0%</span></li>
                                    <li class="last">Total<span>{{$totalPrice}} đ</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->

                        <!-- Payment Method Widget -->

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
