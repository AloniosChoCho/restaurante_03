<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiVideoController extends Controller
{
    public function index()
     {
        return view('backend.ui-video');
    }
}