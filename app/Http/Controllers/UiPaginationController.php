<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiPaginationController extends Controller
{
    public function index()
     {
        return view('backend.ui-pagination');
    }
}
