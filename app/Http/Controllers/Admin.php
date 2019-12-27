<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use PDF;
class Admin extends Controller
{
    //
    public function printPDF(Request $request)
    {
        if( !Session::get('form1') )
        {
            return Redirect::route('home');
        }
        $temp['form1'] = Session::get('form1');
        $temp['form2'] = $request->all();

        if(Session::get('check'))
        {}
        else
        {
            // Form1
            $total1=0;
            for($i=0 ; $i>=0; $i++)
            {
                if( isset($temp['form1']['teeth_numbers'.$i]) )
                {
                    $form1[$i]['teeth_numbers'] = $temp['form1']['teeth_numbers'.$i];
                    $form1[$i]['treatement'] = $temp['form1']['treatement'.$i];
                    $form1[$i]['price'] = $temp['form1']['price'.$i];
                    $form1[$i]['quantity'] = $temp['form1']['quantity'.$i];
    
                    $form1[$i]['total'] = ($temp['form1']['quantity'.$i]) * $temp['form1']['price'.$i];
                    $total1 += $form1[$i]['total'];
                }
                else
                {
                    $i=-2;
                }        
            }
            // Form2
            $total2=0;
            for($i=0 ; $i>=0; $i++)
            {
                if( isset($temp['form2']['teeth_numbers'.$i]) )
                {
                    $form2[$i]['teeth_numbers'] = $temp['form2']['teeth_numbers'.$i];
                    $form2[$i]['treatement'] = $temp['form2']['treatement'.$i];
                    $form2[$i]['price'] = $temp['form2']['price'.$i];
                    $form2[$i]['quantity'] = $temp['form2']['quantity'.$i];
    
                    $form2[$i]['total'] = ($temp['form2']['quantity'.$i]) * $temp['form2']['price'.$i];
                    $total2 += $form2[$i]['total'];
                }
                else
                {
                    $i=-2;
                }        
            }
            $data['form1'] = $form1;
            $data['form2'] = $form2;
    
            // Calculate discount
            $discount1 = $total1*( $temp['form1']['discount']/100 );
            $discount2 = $total2*( $temp['form2']['discount']/100 );
            
            $data['form1_discount_p'] = $temp['form1']['discount'];
            $data['form2_discount_p'] = $temp['form2']['discount'];
    
            $data['form1_discount'] = (int) ($total1 - $discount1);
            $data['form2_discount'] = (int) ($total2 -$discount2);
            $data['form1_total'] = $total1;
            $data['form2_total'] = $total2;
            $data['form1_nights'] = $temp['form1']['nights'];
            $data['form2_nights'] = $temp['form2']['nights'];

            Session::put('form2', null);
            Session::put('data', $data);
            Session::put('check', true);
        }// end else

        // return view('pdf.form');

        $pdf = PDF::loadView('pdf.form')->setPaper('a4')->setOrientation('portrait')->setOption('margin-bottom', 0);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);

        // Session::put('data', null);
        // Session::put('form1', null);
        // Session::put('form2', null);
        Session::put('check', false);
        
        $name = 'Report-'.uniqid().'.pdf';
        return $pdf->download($name);
    }
    public function step1(Request $request)
    {
        Session::put('form1', null);
        Session::put('form2', null);
        Session::put('form1', $request->all());
        Session::put('check', false);
        
        return Redirect::route('step2');
        # code...
    }
    public function step2view()
    {  
        if( Session::get('form1') == null )
        {
            return Redirect::route('home');
        }
        return view('step2');
    }
    public function download()
    {
        $url = Session::get('download_link');
        return $url->download($name);
    }
}
