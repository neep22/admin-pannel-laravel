<?php

namespace App\Models\Admin;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\AddCategory;
use App\Models\admin\AddSubCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
   public function category(){
    return $this->belongsTo(AddCategory::class, 'cat_id');
   }
   public function subCategory(){
    return $this->belongsTo(AddSubCategory::class, 'subcat_id');
   }

   public function order(){
      return $this->hasone(Order::class,'product_id ');
  }
}
