<?php

namespace App\Http\Controllers\Admin\ListPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListPageController extends Controller
{
    function listPage(){
        return view ("Admin.ListPage.listpage");
    }
}
