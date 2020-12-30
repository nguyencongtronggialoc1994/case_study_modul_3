@extends('back_end.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Product detail list
        </div>
        <div class="card-body">
            <a href="{{route('admin.productDetail.create')}}" class="btn btn-primary">Add</a>
            <table class="table">
                <tr>
                    <th>Product id</th>
                    <th>Screen</th>
                    <th>OperatingSystem</th>
                    <th>Camera</th>
                    <th>Cpu</th>
                    <th>Ram</th>
                    <th>Rom</th>
                    <th>Origin</th>
                    <th>Action</th>
                </tr>
                @foreach($productDetails as $productDetail)
                <tr>
                    <th>{{$productDetail->product_id}}</th>
                    <th>{{$productDetail->screen}}</th>
                    <th>{{$productDetail->operatingSystem}}</th>
                    <th>{{$productDetail->camera}}</th>
                    <th>{{$productDetail->cpu}}</th>
                    <th>{{$productDetail->ram}}</th>
                    <th>{{$productDetail->rom}}</th>
                    <th>{{$productDetail->origin}}</th>
                    <th>
                        <a onclick="return confirm('you are sure?')" href="{{route('admin.productDetail.destroy',$productDetail->product_id)}}" class="btn btn-danger">Delete</a>
                        <a href="{{route('admin.productDetail.edit',$productDetail->product_id)}}" class="btn btn-success">Edit</a>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
