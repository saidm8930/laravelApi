<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [
        'car_name',
        'company_name',
        'holder_name'
    ];
}
