<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductDetailRequest;
use App\Http\Services\ProductDetailService;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    protected $productDetailService;

    public function __construct(ProductDetailService $_productDetailService)
    {
        $this->productDetailService = $_productDetailService;
    }

    public function index()
    {
        $productDetails = $this->productDetailService->getAll();
        return view('back_end.product_detail.list', compact('productDetails'));
    }

    public function create()
    {
        return view('back_end.product_detail.add');
    }


    public function store(ProductDetailRequest $request)
    {
        $this->productDetailService->store($request);
        return redirect()->route('admin.productDetail.index');
    }


    public function edit($product_id)
    {
        $productDetail = DB::table('product_details')->where('product_id', $product_id)->first();
        return view('back_end.product_detail.edit', compact('productDetail'));

    }


    public function update(ProductDetailRequest $request, $product_id)
    {
        $productDetail = DB::table('product_details')
            ->where('product_id', $product_id)
            ->update(['screen' => $request->screen,
                'operatingSystem' => $request->operatingSystem,
                'camera' => $request->camera,
                'cpu' => $request->cpu,
                'ram' => $request->ram,
                'rom' => $request->rom,
                'origin' => $request->origin,
            ]);
        return redirect()->route('admin.productDetail.index');

    }


    public function destroy($product_id)
    {
        $productDetail=DB::table('product_details')->where('product_id',$product_id)->delete();
    }
}
