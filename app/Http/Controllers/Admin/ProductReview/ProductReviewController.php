<?php

namespace App\Http\Controllers\Admin\ProductReview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    function productReview(){
        return view ("Admin.ProductReview.productreview");
    }
}
