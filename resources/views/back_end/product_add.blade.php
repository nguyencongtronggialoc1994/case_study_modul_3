@extends('back_end.layout')
@section('content')
        <div class="card">
            <div class="card-header" style="background-color: #1c606a;color: white">
                Thêm sản phẩm
            </div>
            <div class="card-body">
                <form action="{{route('admin.product.store')}}" method="post" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="productName" placeholder="Tên sản phẩm" class="form-control @error('productName') border-danger @enderror()">
                    <div class="error-message">
                        @if($errors->any())
                            <p style="color: red">{{$errors->first('productName')}}</p>
                        @endif
                    </div>
                    <br>
                    <input type="number" name="buyPrice" placeholder="Giá" class="form-control @error('buyPrice') border-danger @enderror">
                    @if($errors->any())
                        <p style="color: red">{{$errors->first('buyPrice')}}</p>
                    @endif
                    <br>
                    <input type="file" name="image">
                    <br>
                    <br>
                    <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    <br>
                    <select name="category" class="form-control">
                        <option>Mobile</option>
                        <option>Laptop</option>
                    </select>
                    <br>

                    <input type="submit" value="Add" class="btn btn-success">
                </form>
            </div>
        </div>
@endsection

