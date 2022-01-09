<?php

namespace App\Http\Controllers;

use App\Models\PdfFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(Request $request, $type)
    {
        try {
            $getFile = $request->file()['image'];

            $fileName = $getFile->getClientOriginalName();
            $filePath = $getFile->storeAs('', $fileName, 'public');

            $data = [
                'type' => $type,
                'name' => $filePath,
            ];

            PdfFile::create($data);

            return redirect()->back();
        } catch (\Exception $e) {
            $request->session()->flash('type', 'error');
            $request->session()->flash('message', __('PDF eklenirken beklenmedik bir hata oldu'));

            return redirect()->back();
        }
    }
    //cap
    public function capstore(Request $request, $type)
    {
        try {
            $getFile = $request->file()['capPdf'];

            $fileName = $getFile->getClientOriginalName();
            $filePath = $getFile->storeAs('pdf', $fileName, 'public');

            $data = [
                'type' => $type,
                'file' => $filePath,
            ];

            return redirect()->back();
        } catch (\Exception $e) {
            $request->session()->flash('type', 'error');
            $request->session()->flash('message', __('PDF eklenirken beklenmedik bir hata oldu'));

            return redirect()->back();
        }
    }
    //dgs
    public function dgsstore(Request $request, $type)
    {
        try {
            $getFile = $request->file()['dgsPdf'];

            $fileName = $getFile->getClientOriginalName();
            $filePath = $getFile->storeAs('pdf', $fileName, 'public');

            $data = [
                'type' => $type,
                'file' => $filePath,
            ];

            return redirect()->back();
        } catch (\Exception $e) {
            $request->session()->flash('type', 'error');
            $request->session()->flash('message', __('PDF eklenirken beklenmedik bir hata oldu'));

            return redirect()->back();
        }
    }
    //yatay
    public function yataystore(Request $request, $type)
    {
        try {
            $getFile = $request->file()['yatayPdf'];

            $fileName = $getFile->getClientOriginalName();
            $filePath = $getFile->storeAs('pdf', $fileName, 'public');

            $data = [
                'type' => $type,
                'file' => $filePath,
            ];

            return redirect()->back();
        } catch (\Exception $e) {
            $request->session()->flash('type', 'error');
            $request->session()->flash('message', __('PDF eklenirken beklenmedik bir hata oldu'));

            return redirect()->back();
        }
    }
    //dersintibak
    public function dersintibakstore(Request $request, $type)
    {
        try {
            $getFile = $request->file()['dersintibakPdf'];

            $fileName = $getFile->getClientOriginalName();
            $filePath = $getFile->storeAs('pdf', $fileName, 'public');

            $data = [
                'type' => $type,
                'file' => $filePath,
            ];

            return redirect()->back();
        } catch (\Exception $e) {
            $request->session()->flash('type', 'error');
            $request->session()->flash('message', __('PDF eklenirken beklenmedik bir hata oldu'));

            return redirect()->back();
        }
    }
    //profilFoto
    public function profilFotostore(Request $request, $type)
    {
        try {
            $getFile = $request->file()['profilfoto'];

            $fileName = $getFile->getClientOriginalName();
            $filePath = $getFile->storeAs('photo', $fileName, 'public');

            $data = [
                'type' => $type,
                'file' => $filePath,
            ];

            return redirect()->back();
        } catch (\Exception $e) {
            $request->session()->flash('type', 'error');
            $request->session()->flash('message', __('Foto eklenirken beklenmedik bir hata oldu'));

            return redirect()->back();
        }
    }


}
