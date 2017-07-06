<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function new()

    {
    	// echo "this is long";
    	return view('new');
    }
}
