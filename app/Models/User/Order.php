<?php

namespace App\Models\User;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    function product(){

        return $this->belongsTo(Product::class);
    }
}
