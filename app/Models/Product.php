<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'category', 'title', 'description', 'price', 'stock', 'image'
    ];

    public function cart(){
        return $this->belongsTo(Cart::class, "product_id", "id");
    }
}
