<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use App\Models\Admin\AddSubCategory;
use Illuminate\Http\Request;

class CategoryListController extends Controller
{
    public function categoryList(){
        $subCategories = AddSubCategory::with('category')->get();
        // $categories = AddCategory::all();
        $categories = AddCategory::latest()->paginate(5);
        return view ("Admin.Category.categorylist", ["subCategories"=>$subCategories], ["categories"=>$categories])->render(); //["dataCategory"=>$categories] in edit_sub_modal.blade.php

        // return view("Admin.category.addnewcategory", ["data"=>$categories]);
    }

    // public function subCategoryList(){
    //     $subCategories = AddSubCategory::all();
    //     $categories = AddCategory::all();
    //     return view ("Admin.Category.subCategorylist", ["data"=>$subCategories], ["dataCategory"=>$categories]);

    //     // return view("Admin.category.addnewcategory", ["data"=>$categories]);
    // }
    
}
