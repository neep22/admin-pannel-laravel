<?php

namespace App\Http\Controllers\Admin\Tax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    function tax(){
        return view ("Admin.Tax.tax");
    }
}
