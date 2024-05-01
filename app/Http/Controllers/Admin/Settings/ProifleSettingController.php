<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProifleSettingController extends Controller
{
    function profileSetting(){
        return view ("Admin.Settings.profilesetting");
    }
}
