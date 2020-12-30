@extends('back_end.layout');
@section('content')
    <div class="card">
        <div class="card-header">
            Product detail add

        </div>
        <div class="card-body">
            <form class="form-group" method="post" action="{{route('admin.productDetail.store')}}">
                @csrf
                <input type="number" name="product_id" placeholder="Product id"
                       class="form-control  @error('product_id') border-danger @enderror">
                @if($errors->any())
                    <p style="color: red">{{$errors->first('product_id')}}</p>
                @endif
                <br>
                <input type="text" name="screen" placeholder="Màn hình"
                       class="form-control @error('screen') border-danger @enderror">
                @if($errors->any())
                    <p style="color: red">{{$errors->first('screen')}}</p>
                @endif
                <br>
                <input type="text" name="operatingSystem" placeholder="Hệ điều hành"
                       class="form-control @error('operatingSystem') border-danger @enderror">
                @if($errors->any())
                    <p style="color: red">{{$errors->first('operatingSystem')}}</p>
                @endif
                <br>
                <input type="text" name="camera" placeholder=" camera"
                       class="form-control @error('camera') border-danger @enderror">
                @if($errors->any())
                    <p style="color: red">{{$errors->first('camera')}}</p>
                @endif
                <br>
                <input type="text" name="cpu" placeholder="cpu"
                       class="form-control @error('cpu') border-danger @enderror">
                @if($errors->any())
                    <p style="color: red">{{$errors->first('cpu')}}</p>
                @endif
                <br>
                <input type="text" name="ram" placeholder="Ram" class="form-control @error('ram') border-danger @enderror">
                @if($errors->any())
                    <p style="color: red">{{$errors->first('ram')}}</p>
                    @endif
                <br>
                <input type="text" name="rom" placeholder="Rom" class="form-control @error('rom') border-danger @enderror">
                @if($errors->any())
                    <p style="color: red">{{$errors->first('rom')}}</p>
                @endif
                <br>
                <input type="text" name="origin" placeholder="Nhà sản xuất" class="form-control @error('origin') border-danger @enderror">
                @if($errors->any())
                    <p style="color: red">{{$errors->first('origin')}}</p>
                @endif
                <br>
                <input type="submit" value="Add">
            </form>
        </div>
    </div>
@endsection
