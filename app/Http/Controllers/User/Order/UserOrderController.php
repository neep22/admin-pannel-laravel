<?php

namespace App\Http\Controllers\User\Order;

use App\Http\Controllers\Controller;
use App\Models\User\Order;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function addOrder(Request $request){
        
        $request->validate([
            'product_id' => 'required|unique:orders',
            'price' => 'required',
        ]);
        

        // Check if an order already exists for the given product
        $orderExistsForProduct = Order::where('product_id', $request->product_id)->exists();


  

        if(!$orderExistsForProduct){

            $order = new Order();
    
    
    
            $order->product_id=$request->product_id;
            $order->price=$request->price;
            $order->ipadress = $request->getClientIp();
            $order->quantity=1;
    
    
            $order->save();
        }
        else{

            return view('user.index', ['orderExistsForProduct'=>$orderExistsForProduct]);
        }
        // return response()->json(['status' => 'success']);
        // return response()->json($orderExistsForProduct);

    }

    // public function showProductPage() {
    //     // Your existing logic to fetch $product and other data
    
    //     // Check if an order already exists for the given product
    //     $orderExistsForProduct = Order::where('product_id', $product->id)->exists();
    
    //     return view('your.blade.view', compact('product', 'orderExistsForProduct'));
    // }

    //Update order quantity
    function updateQuantity(Request $request){

        Order::where('product_id',$request->product_id)->update([

            'quantity'=>$request->quantity,
            'price'=>$request->update_price,
        ]);

    }

    //delete order

    public function deleteOrder(Request $request){
        Order::find($request->order_id)->delete();
    }

    // function header(){
    //     $order = Order::all();
    //     return view ('user.index', ["order"=>$order]);
    // }
}
