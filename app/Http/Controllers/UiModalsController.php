<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiModalsController extends Controller
{
    public function index()
     {
        return view('backend.ui-modals');
    }
}
