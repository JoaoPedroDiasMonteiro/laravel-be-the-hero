<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Logon()
    {
        return view('web.logon');
    }
}
