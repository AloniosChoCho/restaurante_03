<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiTypographyController extends Controller
{
    public function index()
     {
        return view('backend.ui-typography');
    }
}
