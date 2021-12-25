<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YazokuluController extends Controller
{
    public function index()
    {
        return view('yazokulu');
    }

}
