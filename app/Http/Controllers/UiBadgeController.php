<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiBadgeController extends Controller
{
    public function index()
     {
        return view('backend.ui-badge');
    }
}
