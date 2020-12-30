<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'product_id',
        'screen',
        'operatingSystem',
        'camera',
        'cpu',
        'ram',
        'rom',
        'origin',
    ];
//    public $timestamps=false;
    public function product(){
        return $this->belongsTo(Product::class,'id');
    }
}
