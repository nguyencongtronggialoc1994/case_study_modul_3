@extends('back_end.layout')
@section('content')
        <div class="card">
            <div class="card-header bg-dark" style="color: white">
                Product list
            </div>
            <div class="card-body">
                <a href="{{route('admin.product.create')}}" class="btn btn-warning" style="color: black">Thêm sản phẩm mới</a>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    @foreach($products as $key=>$product)
                        <tr class="item-group">
                            <td>{{$key+1}}</td>
                            <td>{{$product->productName}}</td>
                            <td>{{$product->buyPrice}}</td>
                            <td><img width="50px" height="70px" src='{{asset("$product->image")}}'></td>
                            <td>{{$product->category}}</td>
                            <td>
                                <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('admin.product.destroy',$product->id)}}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

@endsection
