<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\AddSubCategory;
use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;


class AddCategory extends Model
{
    use HasFactory;

    function subCategory(){
        return $this->hasMany(AddSubCategory::class, 'addcategory_id');
    }

    function product(){
        return $this->hasMany(Product::class, 'cat_id');
    }
    // public function product(){
    //     return $this->HasManyThrough(Product::class, AddSubCategory::class,'cat_id','subcat_id');
    // }
}


