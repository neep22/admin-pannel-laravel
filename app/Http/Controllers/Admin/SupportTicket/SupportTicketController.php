<?php

namespace App\Http\Controllers\Admin\SupportTicket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    function supportTicket(){
        return view ("Admin.SupportTicket.supportticket");
    }
}
