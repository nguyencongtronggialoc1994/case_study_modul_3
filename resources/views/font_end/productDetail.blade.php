@extends('font_end.layout')
@section('content')
    <div class="container" style="text-align: center">
        <div class="card">
            <div class="card-header">
                <h5>Product detail</h5>
            </div>
            <table class="table">
                <tr>
                    <td rowspan="9"><img src='{{asset("$product->image")}}'></td>
                    <td>{{$product->productName}}</td>
                </tr>
                <tr>
                    <td>{{number_format($product->buyPrice,0,',','.')}}  đ</td>
                </tr>
                <tr>
                    <td>Screen : {{$product->productDetail->screen}}</td>
                </tr>
                <tr>
                    <td>OperatingSystem : {{$product->productDetail->operatingSystem}}</td>
                </tr>
                <tr>
                    <td>Camera : {{$product->productDetail->camera}}</td>
                </tr>
                <tr>
                    <td>Cpu : {{$product->productDetail->cpu}}</td>
                </tr>
                <tr>
                    <td>Ram : {{$product->productDetail->ram}}</td>
                </tr>
                <tr>
                    <td>Rom : {{$product->productDetail->rom}}</td>
                </tr>
                <tr>
                    <td>Origin : {{$product->productDetail->origin}}</td>
                </tr>
                <tr>
                    <td><a style="color: white" href="{{route('cart.addToCart',$product->id)}}" class="card-link btn">Add
                            to Cart</a></td>
                    <td><a href="{{route('home.index')}}" class="card-link btn" style="color: white">Continue shopping</a></td>
                </tr>
            </table>
        </div>

    </div>
@endsection
