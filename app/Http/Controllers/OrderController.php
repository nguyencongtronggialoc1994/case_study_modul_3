<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('back_end.order.list', compact('orders'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Order $order)
    {
        //
    }


    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('back_end.order.edit', compact('order'));
    }


    public function update(Request $request, $id)

    {
        DB::table('orders')->where('id', $id)
            ->update([
                'orderDate' => $request->orderDate,
                'requiredDate' => $request->requiredDate,
                'shippedDate' => $request->shipperDate,
                'status' => $request->status,
                'totalPrice' => $request->totalPrice,
                'customer_id' => $request->customer_id,
            ]);
        return redirect()->route('admin.order.index');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->back();
    }
}
