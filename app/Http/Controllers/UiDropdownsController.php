<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiDropdownsController extends Controller
{
    public function index()
     {
        return view('backend.ui-dropdowns');
    }
}