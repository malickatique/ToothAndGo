<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class Admin extends Controller
{
    //
    public function printPDF()
    {

        // PDF File Setting
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'defaultPaperSize' => 'a4']);

        // This  $data array will be passed to our PDF blade
        $data = [
            'title' => 'First PDF for Medium',
            'heading' => 'Hello from 99Points.info'
        ];
        
        dd( unique() );
        // return view('pdf.form');
        $pdf = PDF::loadView('pdf.form');  
        
        return $pdf->download('form.pdf');
    }
}
