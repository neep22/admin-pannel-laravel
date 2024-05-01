<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AddCategory;
use App\Models\Admin\AddSubCategory;

class EditCatController extends Controller
{
    // function editCatSub($id){
    //     $subCategories = AddSubCategory::find($id);
    //     return view ("Admin.Category.edit_cat_sub", ['subCategories'=>$subCategories]);
    // }
    function getCategory(){
        $category=AddCategory::get();
        // return view ("Admin.Category.modal.edit_sub_modal", ["cat"=>$category]);
        // return view ("Admin.Category.categorylist", ["categories"=>$category]);
        // return view ("Admin.Admin_layout.modal", ["categories"=>$category]);
        // return view ("Test.test", ["categories"=>$category]);
    }
}
