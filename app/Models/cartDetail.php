<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartDetail extends Model
{
    protected $table = 'cart_details';
    protected $fillable = [
        'product_id',
        'cart_id',
        'productPrice',
        'productStock',
        'subtotal',
    ];

    public function cart() {
        return $this->belongsTo('App\Models\cart', 'cart_id');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    //function untuk update stock=qty, dan subtotal
    public function updatedetail($itemdetail, $productStock, $productPrice) {
        $this->attributes['productStock'] = $itemdetail->productStock + $productStock;
        $this->attributes['subtotal'] = $itemdetail->subtotal + ($productStock * $productPrice);
        self::save();
    }
}
