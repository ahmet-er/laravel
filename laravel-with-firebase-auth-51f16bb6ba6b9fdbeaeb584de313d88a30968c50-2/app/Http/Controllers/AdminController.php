<?php

namespace App\Http\Controllers;

use App\Models\PdfFile;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $yazokulu = PdfFile::where('type', 'yazokulu')->get();
        $cap = PdfFile::where('type', 'cap')->get();
        $dgs = PdfFile::where('type', 'dgs')->get();
        $yatay = PdfFile::where('type', 'yatay')->get();
        $dersintibak = PdfFile::where('type', 'dersintibak')->get();

        return view('admin', [
            'yazOkuluList' => $yazokulu,
            'capList' => $cap,
            'dgsList' => $dgs,
            'yatayList' => $yatay,
            'dersintibakList' => $dersintibak,
        ]);
    }

}
