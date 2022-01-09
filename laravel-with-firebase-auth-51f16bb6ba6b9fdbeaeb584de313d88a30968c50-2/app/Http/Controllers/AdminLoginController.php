<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('adminlogin');
    }

    /*
    public function adminPanel(Request $request)
    {
        if(Auth::attempt(['name' => $request->name, 'password' => $request->password]))
        {
            toastr()->success('Tekrardan Hoşgeldiniz: '. Auth::user()->name);
            return redirect()->route('homepage');
        }     
        return redirect()->route('adminlogin')->withErrors('Id veya Şifre Hatalı');
    }
    */
}
