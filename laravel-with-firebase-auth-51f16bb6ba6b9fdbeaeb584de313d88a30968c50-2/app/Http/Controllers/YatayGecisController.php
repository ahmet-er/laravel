<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YatayGecisController extends Controller
{
    public function index()
    {
        return view('yataygecis');
    }

}
