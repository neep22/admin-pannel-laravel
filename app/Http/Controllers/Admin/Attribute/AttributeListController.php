<?php

namespace App\Http\Controllers\Admin\Attribute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttributeListController extends Controller
{
   public function attributeList(){
        return view ("Admin.Attribute.attributelist");
    }
}
