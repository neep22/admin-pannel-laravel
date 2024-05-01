<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use App\Models\Admin\AddSubCategory;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class AddNewProductController extends Controller
{
       function addNewProduct(Request $request){
        $categories = AddCategory::all();
        // $subCategories =  AddSubCategory::where('addcategory_id', $request->cat_idd)->get();
        // $subCategories =  AddSubCategory::all();
        return view ("Admin.Product.addnewproduct", ["categories"=>$categories]);
        $getsubcat['subcategorys'] =AddSubCategory::where('addcategory_id',$request->cat_id)->get(['subcatname','id']);
        // $getsubcat['subcategorys'] =AddSubCategory::where('addcategory_id',$request->cat_id)->get();
        return response()->json($getsubcat);
    }

    // function getSubCat(Request $request){
    //     // $categories = AddSubCategory::with('category')->get();
    //     // $categories =  AddCategory::all();
    //     $subCategories =  AddSubCategory::where('addcategory_id', $request->id)->get();
    //     // $subCategories = AddCategory::with('subCategory')->find($request->id);
    //     return view ("Admin.Product.addnewproduct", ["subCategories"=>$subCategories]);
    // }

    public function getsubcategory(Request $request){
        $getsubcat['subcategorys'] =AddSubCategory::where('addcategory_id',$request->cat_id)->get(['subcatname','id']);
        // $getsubcat['subcategorys'] =AddSubCategory::where('addcategory_id',$request->cat_id)->get();
        return response()->json($getsubcat);

        
    }
    function addProduct(Request $request){ 
        $request->validate([
            // 'pname'=>'required',
            // 'cat_id'=>'required',
            // 'subcat_id'=>'required',
            // 'tags'=>'required',
            // 'exchange'=>'required',
            // 'refund'=>'required',
            // 'pimage'=>'required',
            // 'ptumbnail'=>'required',
            // 'pvideo'=>'required',
            // 'shipweight'=>'required',
            // 'price'=>'required',
            // 'stock'=>'required',
            // 'quantity'=>'required',
            // 'pagetitle'=>'required',
            // 'metadesc'=>'required',
            // 'meta_url'=>'required',

            // 'pimage.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);

        // if($request->TotalImages > 0)
        // {
               
        //    for ($x = 0; $x < $request->TotalImages; $x++) 
        //    {

        //        if ($request->hasFile('pimage'.$x)) 
        //         {
        //             $file= $request->file('pimage'.$x);

        //             $pimage = $file->move('public/Admin/images/product');
        //             $pimage= $file->getClientOriginalName();

        //             //$insert[$x]['name'] = $name;
        //             $insert[$x]['pimage'] = $pimage;
        //         }
        //    }
        // }

        //image
        $imageName = '';
        if($pimage = $request->file('pimage')){
         $imageName = time().'-'.uniqid().'.'.$pimage->getClientOriginalExtension();
         $pimage->move('Admin/images', $imageName);
        }

        //thumnail image
        $thumbnailImageName = '';
        if($ptumbnail = $request->file('ptumbnail')){
         $thumbnailImageName = time().'-'.uniqid().'.'.$pimage->getClientOriginalExtension();
         $ptumbnail->move('Admin/images', $thumbnailImageName);
        }

        $product=new Product();
        $product->pname=$request->pname;
        $product->cat_id=$request->cat_id;
        $product->subcat_id=$request->subcat_id;
        $product->tags=$request->tags;
        $product->exchange=$request->exchange;
        $product->refund=$request->refund;
        $product->pimage= $imageName;
        $product->ptumbnail=$thumbnailImageName;
        $product->pvideo=$request->pvideo;
        $product->shipweight=$request->shipweight;
        $product->price=$request->price;
        $product->stock=$request->stock;
        $product->quantity=$request->quantity;
        $product->pagetitle=$request->pagetitle;
        $product->metadesc=$request->metadesc;
        $product->meta_url=$request->meta_url;
        $product->save();
        // return response()->json([
        //     'status'=>'success'
        // ]);
        Toastr::success('Porduct Added Successfully', 
        'Succes', [
                "positionClass" => "toast-top-right",
                "closeButton" => "true",
                "progressBar" => "true",
        ]);
        return redirect()->back();
    }
}

