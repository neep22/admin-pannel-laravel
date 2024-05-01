<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    public function orderList(){
        return view ("Admin.Orders.orderlist");
    }
}
