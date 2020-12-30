<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchSamsung()
    {
        $productSearch = DB::table('products')->join('product_details', 'products.id', '=', 'product_details.product_id')
            ->where('product_details.origin', 'LIKE', '%samsung%')
            ->get();
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.search', compact('products', 'productSearch', 'count', 'cart', 'totalPrice'));
    }

    public function searchVsmart()
    {
        $productSearch = DB::table('products')->join('product_details', 'products.id', '=', 'product_details.product_id')
            ->where('product_details.origin', 'LIKE', '%vsmart%')
            ->get();
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.search', compact('products', 'productSearch', 'count', 'cart', 'totalPrice'));
    }

    public function searchApple()
    {
        $productSearch = DB::table('products')->join('product_details', 'products.id', '=', 'product_details.product_id')
            ->where('product_details.origin', 'LIKE', '%apple%')
            ->get();
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.search', compact('products', 'productSearch', 'count', 'cart', 'totalPrice'));
    }

    public function search10()
    {
        $productSearch = DB::table('products')->where('buyPrice', '<', 10000000)->get();
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.search', compact('products', 'productSearch', 'count', 'cart', 'totalPrice'));
    }

    public function search1015()
    {
        $productSearch = DB::table('products')
            ->where('buyPrice', '>', 10000000)->where('buyPrice', '<', 15000000)->get();
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.search', compact('products', 'productSearch', 'count', 'cart', 'totalPrice'));
    }
    public function search1520()
    {
        $productSearch = DB::table('products')
            ->where('buyPrice', '>', 15000000)->where('buyPrice', '<', 20000000)->get();
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.search', compact('products', 'productSearch', 'count', 'cart', 'totalPrice'));
    }
    public function search20()
    {
        $productSearch = DB::table('products')
            ->where('buyPrice', '>', 20000000)->get();
        $products = Product::all();
        $count = Cart::count();
        $cart = Cart::content();
        $totalPrice = Cart::subtotal();
        return view('font_end.search', compact('products', 'productSearch', 'count', 'cart', 'totalPrice'));
    }
}
