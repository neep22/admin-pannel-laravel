<?php

namespace App\Http\Controllers\Admin\Localization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function translationList(){
        return view ("Admin.Localization.translationlist");
    }
}
