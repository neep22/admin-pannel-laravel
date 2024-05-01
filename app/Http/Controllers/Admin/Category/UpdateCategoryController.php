<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use Illuminate\Http\Request;

class UpdateCategoryController extends Controller
{
    public function updateCat(Request $request){

        AddCategory::where('id', $request->up_id)->update([
            'catname' => $request->catname
        ]);

    }
}
