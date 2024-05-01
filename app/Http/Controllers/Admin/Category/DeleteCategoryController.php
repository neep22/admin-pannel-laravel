<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use Illuminate\Http\Request;

class DeleteCategoryController extends Controller
{
    public function deleteCat(Request $request){
        AddCategory::find($request->id)->delete();
        // return redirect()->back();
    }

    // public function deleteCat(Request $request){
    //     AddCategory::find($request->id)->delete();
    //     return redirect()->back();
    // }
}
