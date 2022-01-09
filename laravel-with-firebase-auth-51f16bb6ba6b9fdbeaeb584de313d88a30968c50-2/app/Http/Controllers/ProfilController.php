<?php

namespace App\Http\Controllers;

use App\Models\PdfFile;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $aktif = PdfFile::where('status', '0')->get();
        $onay = PdfFile::where('status', '1')->get();
        $ret = PdfFile::where('status', '2')->get();

        return view('profil', [
            'aktifList' => $aktif,
            'onayList' => $onay,
            'retList' => $ret,
        ]);
    }
}
