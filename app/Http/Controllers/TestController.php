<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use App\Models\Admin\AddSubCategory;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // function testing(){
    //     return view ("Test.test");
    // }
    
    public function testing(){
        $categories = AddCategory::all();
        // return view("Admin.category.addnewcategory", ["data"=>$categories]);

        //for testing
        return view("Test.test", ["data"=>$categories]);
    }

    //add category
    function addParentCategory(Request $request){

        $request->validate(
            [
                // 'name'=>'required|unique:products',
                'catname'=>'required',
                // 'price'=>'required',
            ],
            // [
            //     'name.required'=>'Name is Required',
            //     'name.unique'=>'Product Already Exists',
            //     'price.required'=>'Price is Required',
            // ]
        );
    

        $category = new AddCategory();
        $category->catname=$request->catname;
        $category->save();
        // $category=new AddCategory();
        // $category->catname=$request->catname;
        // $category->save();
        return redirect()->back();
    }

    //add sub category
    function addSubCat(Request $request){
        $request->validate([

            'addcat_id'=>'required',
            'subcatname'=>'required'
         ]);
         $subcatgory=new AddSubCategory();
         $subcatgory->addcategory_id=$request->addcategory_id;
        //  $subcatgory->subcatname=$request->subcatname;
         $subcatgory->save();
         return response()->json([
             'status'=>'success'
         ]);

    //     $request->validate(
    //         [
    //         'subcatname'=>'required',

    //     ]
    // );

    // $subcategory = new AddSubCategory();
    // $subcategory->subcatname = $request->subcatname;
    // // $subcategory->addcategory_id = $request->addcat_id;0
    // $subcategory->save();

    // return redirect()->back();

    }
}
