<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use App\Models\Admin\AddSubCategory;
use Illuminate\Http\Request;

class SubCategoryListController extends Controller
{
    public function subCategoryList(){
        // $subCategories = AddSubCategory::all();
        $subCategories = AddSubCategory::latest()->paginate(5); 
        $categories = AddCategory::all();
        return view ("Admin.Category.subCategoryList", ["subCategories"=>$subCategories], ["categories"=>$categories])->render();
        
    }
}
