<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiGridController extends Controller
{
    public function index()
     {
        return view('backend.ui-grid');
    }
}