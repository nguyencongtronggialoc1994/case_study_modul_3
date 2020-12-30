@extends('font_end.layout')
@section('content')
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <table class="table shopping-summery">
                        <thead>
                        <tr class="main-hading">
                            <th>PRODUCT</th>
                            <th>NAME</th>
                            <th class="text-center">UNIT PRICE</th>
                            <th class="text-center">QUANTITY</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $value)
                            <tr>
                                <td class="image" data-title="No"><img src='{{asset($products[$value->id]->image)}}'
                                                                       alt="#"></td>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">{{$value->name}}</a></p>
                                </td>
                                <td class="price" data-title="Price"><span>{{number_format($value->price,0,',','.')}} vnđ </span>
                                </td>
                                <td class="qty" data-title="Qty"><!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">

                                        </div>
                                        <input type="text" name="quant[1]" class="input-number" data-min="1"
                                               data-max="100" value="{{$value->qty}}">
                                        <div class="button plus">

                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </td>
                                <td class="total-amount" data-title="Total"><span>{{number_format($value->price*$value->qty,0,',','.')}} vnđ</span>
                                </td>
                                <td class="action" data-title="Remove"><a href="{{route('cart.remove',$value->id)}}"><i
                                            class="ti-trash remove-icon"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                            </div>
                            <div class="col-lg-4 col-md-7 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Total<span>{{$totalPrice}} vnđ</span></li>
                                    </ul>
                                    <div class="button5">
                                        <a href="{{route('cart.showFromCheckout')}}" class="btn">Checkout</a>
                                        <a href="#" class="btn">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>

@endsection
