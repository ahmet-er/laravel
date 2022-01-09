<?php

namespace App\Http\Controllers;

use App\Models\PdfFile;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function store(Request $request, $id, $type)
    {
        try {
            $pdfFile = PdfFile::findorFail($id);
            $pdfFile->update(['status' => $type]);

            return redirect()->back();
        } catch (\Exception $e) {
            $request->session()->flash('type', 'error');
            $request->session()->flash('message', __('PDF eklenirken beklenmedik bir hata oldu'));

            return redirect()->back();
        }
    }
}
