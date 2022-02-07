<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompRangeController extends Controller
{
    public function index()
     {
        return view('backend.components-range-slider');
    }
}
