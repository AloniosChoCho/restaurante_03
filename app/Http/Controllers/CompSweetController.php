<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompSweetController extends Controller
{
    public function index()
     {
        return view('backend.components-sweet-alert');
    }
}