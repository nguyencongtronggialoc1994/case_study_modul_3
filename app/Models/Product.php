<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'productName',
        'buyPrice',
        'image',
        'description',
        'category',
    ];

    public function productDetail(){
        return $this->hasOne(ProductDetail::class,'product_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class,'product_id');
    }
}
