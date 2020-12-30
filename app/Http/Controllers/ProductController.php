<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Http\Services\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $_productService)
    {
        $this->productService=$_productService;
    }

    public function index()
    {
       $products = $this->productService->getAll();
       return view('back_end.product_list',compact('products'));
    }


    public function create()
    {
        return view('back_end.product_add');
    }


    public function store(AddProductRequest $request)
    {
        $this->productService->store($request);
        return redirect()->route('admin.product.index');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit($id)
    {
        $product= $this->productService->findById($id);
        return view('back_end.product_edit',compact('product'));
    }


    public function update(AddProductRequest $request, $id)
    {
      $this->productService->update($request,$id);
      return redirect()->route('admin.product.index');
    }


    public function destroy($id)
    {
        $this->productService->destroy($id);
        return redirect()->route('admin.product.index');

    }
    public function search(Request $request){
        $products = DB::table('products')->where('productName','LIKE','%'.$request->productName.'%')->get();
        return view('back_end.product_list',compact('products'));
    }
}
