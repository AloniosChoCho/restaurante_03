<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiButtonsController extends Controller
{
    public function index()
     {
        return view('backend.ui-buttons');
    }
}