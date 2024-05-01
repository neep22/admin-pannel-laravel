<?php

namespace App\Http\Controllers\Admin\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //medialibrary
    public function mediaLibrary(){
        return view ("Admin.Media.medialibrary");
    }
}
