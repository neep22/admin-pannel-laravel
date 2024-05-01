<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddCategory;
use App\Models\Admin\AddSubCategory;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class EditProductController extends Controller
{
    //to show single product information in editProduct.blade.php
   function getProduct($id){
    // $subCategories = null; 

        $product = Product::with('subCategory')->where('id', $id)->get();
        $subCategories = Product::with('category.subCategory')->find($id);
        $categories = AddCategory::all();
        $subCategoryAll = AddSubCategory::all();
        // $subCategories = AddCategory::with('subCategory')->get(); 
    
    return view("Admin.Product.edit.editProduct", ['product'=>$product, 'categories'=>$categories, 'subCategories'=>$subCategories, 'subCategoryAll'=>$subCategoryAll]);
   
   }

   //to update product information 
   function updateProduct(Request $request){
       
        //        if($request->TotalImages > 0)
        //    {
       
        //       for ($x = 0; $x < $request->TotalImages; $x++) 
        //       {
       
        //           if ($request->hasFile('pimage'.$x)) 
        //            {
        //                $file= $request->file('pimage'.$x);
       
        //                $pimage = $file->move('public/Admin/images');
        //                $pimage= $file->getClientOriginalName();
       
        //                //$insert[$x]['name'] = $name;
        //                $insert[$x]['pimage'] = $pimage;
        //            }
        //       }
        //    }

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
        
    Product::where('id', $request->up_id)->update([
    'pname'=> $request->pname,
    'cat_id'=> $request->cat_id,
    'subcat_id'=> $request->subcat_id,
    'tags'=> $request->tags,
    'exchange'=> $request->exchange,
    'refund'=> $request->refund,
    'pimage'=> $imageName,
    'ptumbnail'=> $thumbnailImageName,
    'pvideo'=> $request->pvideo,
    'shipweight'=> $request->shipweight,
    'price'=> $request->price,
    'stock'=> $request->stock,
    'quantity'=> $request->quantity,
    'pagetitle'=> $request->pagetitle,
    'metadesc'=> $request->metadesc,
    'meta_url'=> $request->meta_url
    ]);

    
    // $product->save();
    // return response()->json([
    //     'status'=>'success'
    //     ]);
    // return redirect()->back();
    return redirect()->back();
    }

}
