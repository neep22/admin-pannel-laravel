<?php

namespace App\Http\Controllers\Admin\Localization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyRateController extends Controller
{
    public function currencyRate(){
        return view ("Admin.Localization.currencyrate");
    }
}
