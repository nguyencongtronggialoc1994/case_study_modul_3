@extends('back_end.layout')
@section('content')
    <div class="card">
        <div class="card-header bg-success">
            Update product
        </div>
        <div class="card-body">
            <form action="{{route('admin.product.edit',$product->id)}}" method="post" class="form-group"
                  enctype="multipart/form-data">
                @csrf
                <input type="text" name="productName" placeholder="Tên sản phẩm"
                       class="form-control @error('productName') border-danger @enderror()"
                       value="{{$product->productName}}">
                <div class="error-message">
                    @if($errors->any())
                        <p style="color: red">{{$errors->first('productName')}}</p>
                    @endif
                </div>
                <br>
                <input type="number" name="buyPrice" placeholder="Giá"
                       class="form-control @error('buyPrice') border-danger @enderror" value="{{$product->buyPrice}}">
                @if($errors->any())
                    <p style="color: red">{{$errors->first('buyPrice')}}</p>
                @endif
                <br>
                <input type="file" name="image">
                <br>
                <br>
                <input style="height: 150px"  name="description" class="form-control" placeholder="Description"
                       value="{{$product->description}}">
                <br>
                <select name="category" class="form-control">
                    <option>Mobile</option>
                    <option>Laptop</option>
                </select>
                <br>

                <input type="submit" value="update" class="btn btn-success">
            </form>
        </div>
    </div>

@endsection

