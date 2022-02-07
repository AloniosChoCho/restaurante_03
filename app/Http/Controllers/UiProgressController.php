<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiProgressController extends Controller
{
    public function index()
     {
        return view('backend.ui-progressbars');
    }
}
