<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class DeleteProductController extends Controller
{
    function deleteProduct($id){
        Product::find($id)->delete();
        // Product::where('id', $id)->delete();
        return redirect()->back();
        // return response()->json([
        //     'status'=>'product Deleted'
        // ]);
    }
}
