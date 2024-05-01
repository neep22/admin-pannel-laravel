<?php

namespace App\Http\Controllers\Admin\Attribute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddAttributeController extends Controller
{
    public function addAttribute(){
        return view ("Admin.Attribute.addattribute");
    }
}
