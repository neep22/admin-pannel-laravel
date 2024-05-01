<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use App\Models\Admin\AddSubCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class AddCatController extends Controller
{


    public function addNewCategory(){
        $categories = AddCategory::all();
        // $subCategories = AddSubCategory::where('addcategory_id', $id)->get();
        return view("Admin.category.addnewcategory", ["data"=>$categories]);
    }

    //add category
    function addParentCategory(Request $request){

        $request->validate(
            [
                // 'name'=>'required|unique:products',
                'catname'=>'required',
                // 'catimage'=>'required',
                // 'price'=>'required',
            ],
            // [
            //     'name.required'=>'Name is Required',
            //     'name.unique'=>'Product Already Exists',
            //     'price.required'=>'Price is Required',
            // ]
        );

        $catImageName = '';
        if($image = $request->file('catimage')){
         $catImageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
         $image->move('Admin/images/category', $catImageName);
        }
    

        $category = new AddCategory();
        $category->catname=$request->catname;
        $category->catimage=$catImageName;
        $category->save();
        Toastr::success('Category Added Successfully', 
        'Succes', [
           "positionClass" => "toast-top-right",
            "closeButton" => "true",
           "progressBar" => "true",
        ]);
        return redirect()->back();

        
    }

    //add sub category
    function addSubCat(Request $request){
        $request->validate([

            // 'addcat_id'=>'required',
            'subcatname'=>'required'
         ]);
         $subcatgory=new AddSubCategory();
         $subcatgory->addcategory_id=$request->addcategory_id;
         $subcatgory->subcatname=$request->subcatname;
         $subcatgory->save();
        //  return response()->json([
        //      'status'=>'success'
        //  ]);
        Toastr::success('Category Added Successfully', 
        'Succes', [
                "positionClass" => "toast-top-right",
                "closeButton" => "true",
                "progressBar" => "true",
        ]);
        return redirect()->back();

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
