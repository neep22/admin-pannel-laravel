<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
    public function orderTracking(){
        return view ("Admin.Orders.ordertracking");
    }
}
