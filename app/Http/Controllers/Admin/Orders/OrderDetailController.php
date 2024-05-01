<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function orderDetail(){
        return view ("Admin.Orders.orderdetail");
    }
}
