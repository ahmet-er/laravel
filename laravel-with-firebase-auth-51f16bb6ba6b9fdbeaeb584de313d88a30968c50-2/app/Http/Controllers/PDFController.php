<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function yazokuluPDF(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'adress' => $request->adress,
            'phonenum' => $request->phonenum,
            'studentnumber' => $request->studentnumber,
            'fakülte' => $request->fakülte,
            'bölüm' => $request->bölüm,
            'yazfakülte' => $request->yazfakülte,
            'yazbölüm' => $request->yazbölüm,
            'ders1' => $request->ders1,
            'ders2' => $request->ders2,
            'ders3' => $request->ders3,
            'ders4' => $request->ders4,
            'ders5' => $request->ders5,
        ];

        $currentTime = Carbon::now();
        $pdfName = $data['studentnumber'] . '_' . $data['name'] . '_' .  $currentTime->toDateTimeString();

        $pdf = PDF::loadView('pdf', $data);

        $content = $pdf->download()->getOriginalContent();

        //Storage::put("storage/app/public/$pdfName.pdf", $content) ;
        //$this->firebasePdfUpload($pdf, $pdfName);

        return $pdf->download("$pdfName.pdf");
    }

    public function capPDF(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'adress' => $request->adress,
            'phonenum' => $request->phonenum,
            'numara' => $request->numara,
            'fakülte' => $request->fakülte,
            'bölüm' => $request->bölüm,
            'not' => $request->not,
            'capfakülte' => $request->capfakülte,
            'capbölüm' => $request->capbölüm,

        ];

        $currentTime = Carbon::now();
        $pdfName = $data['numara'] . '' . $data['name'] . '' .  $currentTime->toDateTimeString();

        $pdf = PDF::loadView('cappdf', $data);

        $content = $pdf->download()->getOriginalContent();

        //Storage::put("storage/app/public/$pdfName.pdf", $content) ;
        //$this->firebasePdfUpload($pdf, $pdfName);
        return $pdf->download("$pdfName.pdf");
    }

    public function dgsPDF(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'adress' => $request->adress,
            'phonenum' => $request->phonenum,
            'numara' => $request->numara,
            'fakülte' => $request->fakülte,
            'bölüm' => $request->bölüm,
            'okul' => $request->okul,
            'dgsfakülte' => $request->dgsfakülte,
            'dgsbölüm' => $request->dgsbölüm,

        ];

        $currentTime = Carbon::now();
        $pdfName = $data['numara'] . '' . $data['name'] . '' .  $currentTime->toDateTimeString();

        $pdf = PDF::loadView('dgspdf', $data);

        $content = $pdf->download()->getOriginalContent();

        //Storage::put("storage/app/public/$pdfName.pdf", $content) ;
        //$this->firebasePdfUpload($pdf, $pdfName);
        return $pdf->download("$pdfName.pdf");
    }

    public function yatayPDF(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'tc' => $request->tc,
            'dogumtarih' => $request->dogumtarih,
            'numara' => $request->numara,
            'adress' => $request->adress,
            'phonenum' => $request->phonenum,
            'basvurutürü' => $request->basvurutürü,
            'üniversite' => $request->üniversite,
            'fakülte' => $request->fakülte,
            'bölüm' => $request->bölüm,
        ];

        $currentTime = Carbon::now();
        $pdfName = $data['numara'] . '' . $data['name'] . '' .  $currentTime->toDateTimeString();

        $pdf = PDF::loadView('yataypdf', $data);

        $content = $pdf->download()->getOriginalContent();

        //Storage::put("storage/app/public/$pdfName.pdf", $content) ;
        //$this->firebasePdfUpload($pdf, $pdfName);
        return $pdf->download("$pdfName.pdf");
    }

    public function dersintibakPDF(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'adress' => $request->adress,
            'phonenum' => $request->phonenum,
            'numara' => $request->numara,
            'fakülte' => $request->fakülte,
            'bölüm' => $request->bölüm,
            'dersadi' => $request->dersadi,
            'derssaati' => $request->derssaati,
            'labsaati' => $request->labsaati,
            'akts' => $request->akts,
            'derskodu' => $request->derskodu,
            'dersadimuaf' => $request->dersadimuaf,
            'derssaatimuaf' => $request->derssaatimuaf,
            'labsaatimuaf' => $request->labsaatimuaf,
            'aktsmuaf' => $request->aktsmuaf,

        ];

        $currentTime = Carbon::now();
        $pdfName = $data['numara'] . '' . $data['name'] . '' .  $currentTime->toDateTimeString();

        $pdf = PDF::loadView('dersintibakpdf', $data);

        $content = $pdf->download()->getOriginalContent();

        //Storage::put("storage/app/public/$pdfName.pdf", $content) ;
        //$this->firebasePdfUpload($pdf, $pdfName);
        return $pdf->download("$pdfName.pdf");
    }

    public function firebasePdfUpload($pdf, $pdfName)
    {
        $firebase_storage_path = 'pdf/';
        app('firebase.storage')->getBucket()->upload($pdf, ['name' => $firebase_storage_path . $pdfName]);
    }
}
