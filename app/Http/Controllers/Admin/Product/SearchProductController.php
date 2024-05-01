<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;

use App\Models\Admin\Product;
use Illuminate\Http\Request;

class SearchProductController extends Controller
{

    public function pagination(){
        $getProduct = Product::latest()->paginate(5); 
        return view ("Admin.Product.paginateProduct", ["getProduct"=>$getProduct])->render();
    }
  public function searchProduct(Request $request){
        $getProduct = Product::where('products.pname', 'like', '%'.$request->search_string.'%')
                            ->orWhere('products.price', 'like', '%'.$request->search_string.'%')
                            ->orderBy('products.id', 'desc')
                            ->paginate(5);
                            if($getProduct->count() >= 1){
                                return view ("Admin.Product.paginateProduct", ['getProduct'=>$getProduct])->render();
                                // return view ("Admin.Product.productlist", ['getProduct'=>$getProduct])->render();
                            }else{
                                return response()->json([
                                    'status'=>'nothing_found',
                                ]);
                            }

    }
}
