<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiTabsController extends Controller
{
    public function index()
     {
        return view('backend.ui-tabs-accordions');
    }
}
