<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use App\Models\Admin\AddSubCategory;
use App\Models\Admin\Product;
use App\Models\User\Order;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index(){
        // $products = Product::with('category')->get();
        $products = Product::all();
        $categories = AddCategory::with('subcategory')->get();
        $order = Order::all();
        // $getcategory=AddSubCategory::with('category')->get();
        // return view("user.index",['getcategory'=>$getcategory]);
        return view("user.index", ['categories'=>$categories, 'products'=>$products, 'order'=>$order]);
    }

    function getSingleproduct(Request $request, $productId, $categoryId){
        $getSingleProduct = Product::where('id',$productId)->get();

        $getCatProduct = Product::with('category')->where('cat_id', $categoryId)->get();

       
        // return view ('user.productDetails');
        return view("user.product_left_thumbnail",['getSingleProduct'=>$getSingleProduct, 'getCatProduct'=>$getCatProduct]);
    }

    function shop_category(){
        return view("user.shop_category");
    }
    function shop_left_sidebar(){
        return view("user.shop_left_sidebar");
    }
    function product_left_thumbnail(){
        return view("user.product_left_thumbnail");
    }
    function blog_detail(){
        return view("user.blog_detail");
    }
    function blog_list(){
        return view("user.blog_list");
    }
    function error_page(){
        return view("user.404_page");
    }
    function cart(){
        $productDetails = Product::all();
        // $orderView = Order::with('product')->get();
        $orderView = Order::with('product')->get();
        return view("user.cart", ["orderView"=>$orderView, "productDetails"=>$productDetails]);
    }
    function contact(){
        return view("user.contact");
    }
    function checkout(){
        // $result=DB::table('post_update')->sum('mark');
        $totalPrice = Order::sum('price');
        $orderSummery = Order::with('product')->get();
        return view("user.checkout", ['orderSummery'=>$orderSummery, 'totalPrice'=>$totalPrice]);
    }
    function coming_soon(){
        return view("user.coming_soon");
    }
}
