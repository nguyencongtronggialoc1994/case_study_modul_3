<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($product)
    {
        $storedItem = [
            'item' => $product,
            'qty' => 0,
            'price' => $product->buyPrice,

        ];
            if (array_key_exists($product->id, $this->items)) {
                $storedItem = $this->items[$product->id];
            }

        $this->items[$product->id] = $storedItem;
        $storedItem['qty']++;
        $storedItem['price'] += $product->buyPrice ;
        $this->totalQty++;
        $this->totalPrice += $product->buyPrice;
    }

    public function remove($id)
    {
        if ($this->items) {
            $productsIntoCart = $this->items;
            if (array_key_exists($id, $productsIntoCart)) {
                $priceProDelete = $productsIntoCart[$id]['price'];
                $this->totalPrice -= $priceProDelete;
                $this->totalQty -= $productsIntoCart[$id]['qty'];
                unset($productsIntoCart[$id]);
                $this->items = $productsIntoCart;
            }
        } else {
            $this->totalQty = 0;
        }
    }

    public function update($request, $id)
    {
        if ($this->items) {
            $itemsIntoCart = $this->items;
            if (array_key_exists($id, $itemsIntoCart)) {
                $itemUpdate = $itemsIntoCart[$id];

                //update tong so luong san pham trong gio hang
                $qtyUpdate = $request->qty - $itemUpdate['qty'];
                $this->totalQty += $qtyUpdate;
                //update tong gia cua gio hang
                $priceUpdate = $itemUpdate['item']->price * $request->qty - $itemUpdate['price'];
                $this->totalPrice += $priceUpdate;
                //update so luong san pham do
                $itemUpdate['qty'] = $request->qty;

                //update tong gia cua san pham do
                $itemUpdate['price'] = $itemUpdate['item']->buyPrice * $request->qty;
                $this->items[$id] = $itemUpdate;

            }
        }
    }
}
