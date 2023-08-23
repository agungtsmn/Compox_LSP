<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('content.home');
    }

    public function about()
    {
        return view('content.about');
    }

    public function product()
    {
        return view('content.product');
    }
}
