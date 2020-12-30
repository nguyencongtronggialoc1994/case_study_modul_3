<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductDetailRepository;
use App\Models\ProductDetail;

class ProductDetailService
{
protected $productDetailRepo;
public function __construct(ProductDetailRepository $_productDetailRepo)
{
    $this->productDetailRepo=$_productDetailRepo;
}
public function getAll(){
    return $this->productDetailRepo->getAll();
}
public function findById($id){
    return $this->productDetailRepo->findById($id);
}
public function store($request){
    $productDetail = new ProductDetail();
    $productDetail->fill($request->all());
    $productDetail->save();
}
public function update($request,$id){
    $productDetail = $this->productDetailRepo->findById($id);
    $productDetail->fill($request->all());
    $productDetail->save();
}
public function delete($id){
    $productDetail= $this->productDetailRepo->findById($id);
    $productDetail->delete();
}
}
