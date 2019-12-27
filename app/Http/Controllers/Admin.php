<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use PDF;
class Admin extends Controller
{
    //
    public function printPDF()
    {
        // return view('pdf.form');

        $pdf = PDF::loadView('pdf.form')->setPaper('a4')->setOrientation('portrait')->setOption('margin-bottom', 0);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);

        
        $name = 'Report-'.uniqid().'.pdf';
        return $pdf->download($name);

        // PDF File Setting
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'verdana', 'defaultPaperSize' => 'A3', ]);
    }
    public function step1(Request $request)
    {
        Session::put('step1', null);
        Session::put('step1', $request->all());
        
        return Redirect::route('step2');
        # code...
    }
    public function step2view()
    {
        return view('step2');
    }
}
