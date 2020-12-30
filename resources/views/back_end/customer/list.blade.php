@extends('back_end.layout')
@section('content')
<div class="card">
    <div class="card-header">
        Customer list
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>#</th>
                <th>customerName</th>
                <th>numberPhone</th>
                <th>address</th>
                <th>Action</th>
            </tr>
            @foreach($customers as $key=>$customer)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$customer->customerName}}</td>
                    <td>{{$customer->numberPhone}}</td>
                    <td>{{$customer->address}}</td>
                    <td>
                        <a onclick="return confirm('You ar sure')" href="{{route('admin.customer.delete',$customer->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            @endforeach
        </table>

    </div>
</div>
@endsection
