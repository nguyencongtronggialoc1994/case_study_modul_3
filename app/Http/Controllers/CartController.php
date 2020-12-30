<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        $count = Cart::count();
        return view('font_end.cart.index', compact('cart', 'totalPrice', 'count', 'products'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        $cartInfo = [
            'id' => $id,
            'name' => $product->productName,
            'price' => $product->buyPrice,
            'qty' => '1',
        ];
        Cart::add($cartInfo);
        return redirect()->back();
    }

    public function removeProductIntoCart($id)
    {
        $cart = Cart::content();
        foreach ($cart as $value) {
            if ($value->id == $id)
                $rowId = $value->rowId;
        }
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function showFormCheckout()
    {
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.cart.check_out', compact('products', 'count', 'cart', 'totalPrice'));
    }

    public function checkout(Request $request)
    {
        $cart = Cart::content();
        DB::table('customers')->insert([
            'customerName' => $request->customerName,
            'numberPhone' => $request->numberPhone,
            'address' => $request->address,
        ]);
        $customer_id = DB::table('customers')->where('customerName', '=', $request->customerName)->value('id');
        DB::table('orders')->insert([
            'orderDate' => $request->orderDate,
            'requiredDate' => $request->requiredDate,
            'status' => $request->status,
            'totalPrice' => $request->totalPrice,
            'customer_id' => $customer_id,
        ]);
        $order_id = DB::table('orders')->where('customer_id', $customer_id)->value('id');
        foreach ($cart as $value) {
            DB::table('order_details')->insert([
                'order_id' => $order_id,
                'product_id' => $value->id,
                'quantityOrdered' => $value->qty,
                'priceEach' => $value->price,
            ]);
        }
        Cart::destroy();
        return redirect()->route('home.index');
    }
}
