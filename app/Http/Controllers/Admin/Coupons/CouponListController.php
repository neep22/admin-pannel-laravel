<?php

namespace App\Http\Controllers\Admin\Coupons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponListController extends Controller
{
    public function couponList(){
        return view ("Admin.Coupons.couponlist");
    }
}
