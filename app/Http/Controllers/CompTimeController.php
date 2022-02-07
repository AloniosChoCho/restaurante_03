<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompTimeController extends Controller
{
    public function index()
     {
        return view('backend.components-session-timeout');
    }
}
