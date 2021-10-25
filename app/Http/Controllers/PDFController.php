<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\garbage;
use PDF;

class PDFController extends Controller
{
    public function pdf_index() {
        
        $garbageall = garbage::all();
        $pdf = PDF::loadView('report',$garbageall)
        ->setPaper('a4', 'landscape');
        return $pdf ->stream('report_pdf.pdf');
    }

           // Display user data in view
        public function showreport()
        {
          return view('garbage.report');
        }

}