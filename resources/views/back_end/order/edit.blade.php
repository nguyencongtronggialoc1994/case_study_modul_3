@extends('back_end.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Update order
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.order.update',$order->id)}}" class="form-group">
                @csrf
                <p>OrderDate: <input type="date" name="orderDate" value="{{$order->orderDate}}" class="form-control"></p>
                <p>RequiredDate: <input type="date" name="requiredDate" value="{{$order->requiredDate}}" class="form-control"></p>
                <p>ShippedDate: <input type="date" name="shippedDate" value="{{$order->shippedDate}}" class="form-control"></p>
                <p>Status </p> <select name="status" class="form-control">
                    <option value="shipping">shipping</option>
                    <option value="shipped">shipped</option>
                </select>


                <p>TotalPrice: <input type="text" name="totalPrice" value="{{$order->totalPrice}}" class="form-control"></p>
                <p>Customer id: <input type="number" name="customer_id" value="{{$order->customer_id}}" class="form-control"></p>
                  <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
