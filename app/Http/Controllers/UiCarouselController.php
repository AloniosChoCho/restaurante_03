<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiCarouselController extends Controller
{
    public function index()
     {
        return view('backend.ui-carouse');
    }
}