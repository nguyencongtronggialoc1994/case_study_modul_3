<?php


namespace App\Http\Repositories;


use App\Models\ProductDetail;

class ProductDetailRepository
{
protected $productDetailRepository;
public function __construct(ProductDetail $_productDetailRepository)
{
    $this->productDetailRepository=$_productDetailRepository;
}
public function getAll(){
    return $this->productDetailRepository->all();
}
public function findById($id){
    return $this->productDetailRepository->findOrFail($id);
}
}
