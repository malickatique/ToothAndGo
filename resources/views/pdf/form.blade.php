@extends('pdf.master')

@section('content')

<img src="img/logo.png" alt="">

<div style="border: 2px solid #636363; text-align:center; margin: 5px 0px; padding: 10px 0px;">
    <b> Tooth & Go </b>
</div>

<div>
    <img src="img/teeths.png" alt="" style="width: 100%">
</div>

<div style="background-color:#636363; margin: 5px 0px 0px 0px; padding: 10px 0px;">
    <span style="margin: 0px 10px; color:white;"> <b> 1st Stage </b> </span>
    <span style="margin: 0px 10px; color:white;"> <b> Duration: </b> </span>
</div>

<table>
  <tr>
    <th>Tooth Number</th>
    <th>Treatements</th>
    <th>£ Price</th>
    <th>Quantity</th>
    <th>£ Total</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>$250</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr style="background-color: #636363; padding: 0px 0px; margin: 0px 0px;">
    <td colspan="4" style="padding: 10px 5px; margin: 0px 0px; color:white;">Total</td>
    <td  style="padding: 0px 0px; margin: 0px 0px; color:white;">$100</td>
  </tr>
  <tr style="background-color: #636363; padding: 0px 0px; margin: 0px 0px;">
    <td colspan="4" style="padding: 10px 5px; margin: 0px 0px; color:white;">Total 2% Discount (valid only for cash payments)</td>
    <td  style="padding: 0px 0px; margin: 0px 0px; color:white;">$100</td>
  </tr>
</table>

<div style="background-color: #FFDF3E; text-align:center; margin: 100px 0px; padding: 50px 0px;">
    <span>
      <b> Floor Chloe Building, 162 Aguirre Ave Paranaque Metro Manilia 1720 </b>
    </span> <br>
    <span>
      <b> Website: <a href="#">www.dentiest-manila.com</a> E-mail: <a href="#">info@dentist-manila.com</a> </b>
    </span> <br>
    <span>
      <b> AUS: 180 009 1938 </b> <b> US: +1 877 268 9025 </b> <b> Landline: (+63)-2-84780649 </b> <b> Mobile Globe: (+63)-(0)915-9656181 </b> 
    </span>
</div>

@endsection