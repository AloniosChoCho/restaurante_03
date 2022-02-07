<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompLightController extends Controller
{
    public function index()
     {
        return view('backend.components-lightbox');
    }
}
