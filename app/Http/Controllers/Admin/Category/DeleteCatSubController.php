<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use App\Models\Admin\AddSubCategory;
use Illuminate\Http\Request;
use Session;

class DeleteCatSubController extends Controller
{
    public function deleteSub(Request $request){
        AddSubCategory::find($request->id)->delete();
        Session::flash('msg', 'Product Deleted Successfully');
        return redirect()->back();
    }
    // public function deleteCat(Request $request){
    //     AddCategory::find($request->id)-delete();
    //     return redirect()->back();
    // }
}
