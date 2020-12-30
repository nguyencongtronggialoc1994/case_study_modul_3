<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $productService;

    public function __construct(ProductService $_productService)
    {
        $this->productService = $_productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.home', compact('products', 'count', 'cart', 'totalPrice'));
    }

    public function search(Request $request)
    {
        $productSearch = DB::table('products')->where('productName', 'LIKE', '%' . $request->name . '%')->get();
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.search', compact('products','productSearch', 'count', 'cart', 'totalPrice'));
    }

    public function showDetail($id)
    {
        $product = Product::find($id);
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.productDetail', compact('product', 'count', 'cart', 'totalPrice', 'products'));
    }
}
