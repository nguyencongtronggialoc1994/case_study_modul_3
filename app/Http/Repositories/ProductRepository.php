<?php


namespace App\Http\Repositories;


use App\Models\Product;

class ProductRepository
{
    protected $product;

    public function __construct(Product $_product)
    {
        $this->product = $_product;
    }

    public function getAll()
    {
        return $this->product->all();
    }

    public function findById($id)
    {
        return $this->product->findOrFail($id);
    }
}
