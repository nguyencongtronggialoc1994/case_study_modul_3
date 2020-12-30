@extends('back_end.layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Order list
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>OrderDate</th>
                    <th>RequiredDate</th>
                    <th>ShippedDate</th>
                    <th>Status</th>
                    <th>TotalPrice</th>
                    <th>Customer_id</th>
                    <th>Action</th>
                </tr>
               @foreach($orders as $order)
                   <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->orderDate}}</td>
                        <td>{{$order->requiredDate}}</td>
                        <td>{{$order->shippedDate}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->totalPrice}}</td>
                        <td>{{$order->customer_id}}</td>
                       <td>
                           <a onclick="return confirm('You are sure')" href="{{route('admin.order.destroy',$order->id)}}" class="btn btn-danger">Delete</a>
                           <a href="{{route('admin.order.edit',$order->id)}}" class="btn btn-primary">Edit</a>
                       </td>
                   </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
