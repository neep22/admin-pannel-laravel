<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\AddCategory;
use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AddSubCategory extends Model
{
    use HasFactory;
    function category(){
        return $this->belongsTo(AddCategory::class, 'addcategory_id');
    }
    function product(){
        return $this->hasMany(Product::class, 'subcat_id');
    }
}