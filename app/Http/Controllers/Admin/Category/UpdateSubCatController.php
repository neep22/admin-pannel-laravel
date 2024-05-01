<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSubCategory;
use Illuminate\Http\Request;

class UpdateSubCatController extends Controller
{
    function updateSubCat(Request $request){
        $request->validate(
            [
                // 'name'=>'required|unique:products',
                // 'name'=>'required',
                // 'price'=>'required',
            ],
        );
        AddSubCategory::where('id', $request->up_id)->update([
            'subcatname' => $request->subcatname,
            'addcategory_id' => $request->addcategory_id,
        ]);
        // Product::where('id', $request->up_id)->update([
        //     'name' => $request->up_name,
        //     'price' => $request->up_price,
        // ]);

        return redirect()->back();

    }
}
