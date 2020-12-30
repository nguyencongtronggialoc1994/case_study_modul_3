<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductRepository $_productRepo)
    {
        $this->productRepo = $_productRepo;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }

    public function findById($id)
    {
        return $this->productRepo->findById($id);
    }

    public function store($request)
    {
        $product = new Product();
        $product->fill($request->all());
        $imageName = 'uploads/' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        $product->image = $imageName;
        $product->save();
    }

    public function edit($id)
    {
        return $this->productRepo->findById($id);
    }

    public function update($request, $id)
    {
        $product = $this->productRepo->findById($id);
        $product->fill($request->all());
        $imageName = 'uploads/' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        $product->image = $imageName;
        $product->save();
    }

    public function destroy($id)
    {
        $product = $this->productRepo->findById($id);
        $product->delete();
    }

}
