<?php

namespace App\Http\Controllers\Admin\Coupons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCouponController extends Controller
{
    public function createCoupon(){
        return view ("Admin.Coupons.createcoupon");
    }
}
