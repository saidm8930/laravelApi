<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'product_name',
        'product_company',
        'product_quantity',
        'total_number_of product',
        'price_per_product'
    ];
}
