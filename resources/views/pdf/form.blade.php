@extends('pdf.master')

@section('content')

<!-- Page 1 -->
<div class="page-1">
  <img src="{{ public_path('img/logo.png') }}" alt="">

  <div style="border: 2px solid #636363; text-align:center; margin: 5px 0px; padding: 10px 0px;">
      <b> Tooth & Go Clinic </b>
  </div>

  <div>
      <img src="{{ public_path('img/teeths.png') }}" alt="" style="width: 100%">
  </div>

  <table>

    <tr style="background-color:#636363; margin: 5px 0px 0px 0px; padding: 10px 0px;">
      <td colspan="4">
        <span style="margin: 0px 10px; color:white;"> <b> 1st Stage </b> </span>
      </td>
      <td>
      <span style="margin: 0px 10px; color:white;"> <b> Duration: 5 Nights</b> </span>
      </td>
    </tr>

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
    <tr style="background-color: #636363; padding: 0px 0px; margin: 0px 0px;">
      <td colspan="4" style="padding: 10px 5px; margin: 0px 0px; color:white;">Total</td>
      <td  style="padding: 0px 0px; margin: 0px 0px; color:white;">$100</td>
    </tr>
    <tr style="background-color: #636363; padding: 0px 0px; margin: 0px 0px;">
      <td colspan="4" style="padding: 10px 5px; margin: 0px 0px; color:white;">Total 2% Discount (valid only for cash payments)</td>
      <td  style="padding: 0px 0px; margin: 0px 0px; color:white;">$100</td>
    </tr>
  </table>

  <!-- footer  -->
  <div style="background-color: #FFDF3E; text-align:center; margin: 30px 0px; padding: 20px 0px;">
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
  <div class="page-break"></div>
  <!-- / footer  -->
</div>


<!-- Page 2 -->
<div class="page-2">
  <img src="{{ public_path('img/logo.png') }}" alt="">

  <table>
  <tr style="background-color:#636363; margin: 5px 0px 0px 0px; padding: 10px 0px;">
    <td colspan="4">
      <span style="margin: 0px 10px; color:white;"> <b> 1st Stage </b> </span>
    </td>
    <td>
    <span style="margin: 0px 10px; color:white;"> <b> Duration: 5 Nights</b> </span>
    </td>
  </tr>

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
    <tr style="background-color: #636363; padding: 0px 0px; margin: 0px 0px;">
      <td colspan="4" style="padding: 10px 5px; margin: 0px 0px; color:white;">Total</td>
      <td  style="padding: 0px 0px; margin: 0px 0px; color:white;">$100</td>
    </tr>
    <tr style="background-color: #636363; padding: 0px 0px; margin: 0px 0px;">
      <td colspan="4" style="padding: 10px 5px; margin: 0px 0px; color:white;">Total 2% Discount (valid only for cash payments)</td>
      <td  style="padding: 0px 0px; margin: 0px 0px; color:white;">$100</td>
    </tr>
  </table>

  <!-- footer  -->
  <div style="background-color: #FFDF3E; text-align:center; margin: 50px 0px; padding: 20px 0px;">
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
  <div class="page-break"></div>
  <!-- / footer  -->
</div>

<!-- Page 3 -->
<div class="page-3">
  <img src="{{ public_path('img/logo.png') }}" alt="">
  <table>
    <tr>
      <td rowspan="4" style="background-color: #FFDF3E; Width: 30%; text-align:center;">
        <b> Included Services </b>
      </td>
    </tr>
    <tr style="border: 1px solid black;">
      <td>24/7 Patient Support during stay</td>
    </tr>
    <tr style="border: 1px solid black;">
      <td>Lifetime free check-up visits to DENTAGLOBAL Clinic in Izmir</td>
    </tr>
    <tr style="border: 1px solid black;">
      <td>Airport-Hotel-DENTAGLOBAL Transfers</td>
    </tr>
  </table>

  <table style="margin: 3px 0px;">
    <tr style="border-top: 1px solid black; border-bottom: 1px solid black;">
      <td style="background-color: #FFDF3E; text-align:center;">
        GLOBAL DENTAGLOBAL GUARANTEE
      </td>
    </tr>
  </table>

  <table style="margin: 3px 0px;">
    <tr style="border-top: 1px solid black; border-bottom: 1px solid black;">
      <td style="width: 30%;">
        <!-- <img src="{{ public_path('img/pngguru.com1.png') }}" alt="" style="width: 35px; height:35px;"> -->
        <img src="{{ public_path('img/pngguru.com1.png') }}" alt="" style="width: 35px; height:35px; margin: 15px 7px 0px 5px;">
        <img src="{{ public_path('img/pngguru.com.png') }}" alt="" style="width: 35px; height:35px;  margin: 15px 7px 0px 5px;">
        <p> <b>Global Gurantee</b> </p>
      </td>
      <td style="text-align: left;">
        <ul>
          <li>
            3 years on crowns, bridges and facings (veneers)
          </li>
          <li>
            2 years on protheses
          </li>
          <li>
            Lifetime on Implants
          </li>
        </ul>
      </td>
    </tr>
  </table>

  <table style="margin: 3px 0px;">
    <tr style="border-top: 1px solid black; border-bottom: 1px solid black;">
      <td style="background-color: #FFDF3E; Width: 30%; text-align:center;">
        <b> Treatments </b>
      </td>
      <td>
        <b>All the necessary treatments and required materials under guarantee at the
  DENTAGLOBAL clinic in Izmir.</b>
      </td>
    </tr>
  </table>

  <table style="margin: 3px 0px;">
    <tr style="border-top: 1px solid black; border-bottom: 1px solid black;">
      <td style="background-color: #FFDF3E; Width: 30%; text-align:center;">
        <b> Extension of stay </b>
      </td>
      <td>
        <b>Should your stay in Izmir needs to be extended unexpectedly in order to finish
  your treatments due to reasons caused by the clinic, the extra travel and
  accommodation expenses will be compensated.</b>
      </td>
    </tr>
  </table>

  <table style="margin: 3px 0px;">
    <tr style="border-top: 1px solid black; border-bottom: 1px solid black;">
      <td style="background-color: #FFDF3E; Width: 30%; text-align:center;">
        <b> Fix at Home </b>
      </td>
      <td>
        <b>In case you have been advised to see or fix the dental problem at a dental
  professional in your home country ,you will be reimbursed the dental
  consultation and Treatment fee paid in case of a problem/situation that arises
  upon returning to your home country.
  </b>
      </td>
    </tr>
  </table>

  <table style="margin: 3px 0px;">
    <tr style="border-top: 1px solid black; border-bottom: 1px solid black;">
      <td style="background-color: #FFDF3E; Width: 30%; text-align:center;">
        <b> Fix in Turkey </b>
      </td>
      <td>
        <b>In case of a problem/situation which arises after your return to your home
  country and it is confirmed by DENTAGLOBAL that it requires a retreatment at
  the DENTAGLOBAL clinic in Izmir under the terms of guarantee, the cost of
  treatment/required materials will be provided free of charge and your Travel
  expenses such as flight and accommodation will be compensated. </b>
      </td>
    </tr>
  </table>

  <!-- footer  -->
  <div style="background-color: #FFDF3E; text-align:center; margin: 50px 0px; padding: 20px 0px;">
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
  <div class="page-break"></div>
  <!-- / footer  -->
</div>

<!-- Page 4 -->
<div class="page-4">
  <img src="{{ public_path('img/logo.png') }}" alt="">

  <table style="margin: 3px 0px;">
    <tr style="border-top: 1px solid black; border-bottom: 1px solid black;">
      <td style="background-color: #FFDF3E; text-align:center; padding: 15px 100px;">
      DENTAGLOBAL Dental Clinic, is located in Turkey the heart of Central city of Izmir right accross the popular landmark point Folkart Towers.
  At DENTAGLOBAL Dental Clinic, you are opening the door to all the advantages dental care abroad can offer: their state of the art dental
  hospital, luxurious residential facilities and most importantly our team of talented dentists, all experts in there chosen specialities.
  DENTAGLOBAL team will guarantee you have a comfortable stay and will be responsible for your care round the clock also concierge team will
  ensure you have all your needs met at all times. 
      </td>
    </tr>
  </table>

  <table style="margin: 3px 0px;">
    <tr style="border-top: 1px solid black; border-bottom: 1px solid black;">
      <td style="text-align:center;">
        <!-- Photo Grid -->
        <div class="row"> 
          <div class="column">
            <img src="{{ public_path('img/1.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/3.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/4.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/5.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/9.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/11.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/12.jpg') }}" style="width:100%">
          </div>
          <div class="column">
            <img src="{{ public_path('img/2.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/6.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/7.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/8.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/10.jpg') }}" style="width:100%">
            <img src="{{ public_path('img/13.jpg') }}" style="width:100%">
          </div>  
        </div>
      </td>
    </tr>
  </table>

  <table style="margin: 3px 0px;">
    <tr style="border-top: 1px solid black; border-bottom: 1px solid black;">
      <td style="text-align:center;">
        <span> <img src="{{ public_path('img/wifi.png') }}" alt="" style="width:40px; height:35px; padding: 7px 2px;"> <br> Free Wifi </span>
      </td>
      <td style="text-align:center;">
        <span> <img src="{{ public_path('img/plane.png') }}" alt="" style="width:50px; height:35px; padding: 7px 2px;"> <br> Airplane Welcoming </span>
      </td>
      <td style="text-align:center;">
        <span> <img src="{{ public_path('img/bus.png') }}" alt="" style="width:40px; height:35px; padding: 7px 2px;"> <br> Transportation </span>
      </td>
      <td style="text-align:center;">
        <span> <img src="{{ public_path('img/hotel.png') }}" alt="" style="width:40px; height:40px; padding: 7px 2px;"> <br> Accomodation </span>
      </td>
      <td style="text-align:center;">
        <span> <img src="{{ public_path('img/location.png') }}" alt="" style="width:40px; height:40px; padding: 7px 2px;"> <br> Central Location </span>
      </td>
      <td style="text-align:center;">
        <span> <img src="{{ public_path('img/interpreter.png') }}" alt="" style="width:40px; height:40px; padding: 7px 2px;"> <br> Interpreter </span>
      </td>
    </tr>
  </table>

  <!-- footer  -->
  <div style="background-color: #FFDF3E; text-align:center; margin: 50px 0px; padding: 20px 0px;">
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
  <div class="page-break"></div>
  <!-- / footer  -->
</div>

<!-- Page 5 -->
<div class="page-5">
  <img src="{{ public_path('img/logo.png') }}" alt="">

  <table>
    <tr>
      <td rowspan="3" style="background-color: #FFDF3E; Width: 30%; text-align:center;">
        <b> Special Accommodation offer
  during your stay </b>
      </td>
    </tr>
    <tr style="border: 1px solid black;">
      <td style="background-color:dimgray;"> 1st Stage</td>
      <td>04 Nights of Free Accommodation in Single Room at 4 Stars SMART
  HOTEL IZMIR including Breakfast</td>
    </tr>
    <tr style="border: 1px solid black;">
      <td style="background-color:dimgray;"> 3rd Stage</td>
      <td>£32,00 Single Room & £39,00 Double Room per night at 4 Stars
  SMART HOTEL IZMIR including Breakfast
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td style="width: 20%;">
        <img src="{{ public_path('img/1.jpg') }}" alt="" style="width:480px; height: 280px;">
      </td>
      <td style="width: 80%; text-align: left; padding: 2px 30px 0px 0px;">
        <h4> STAY IN THE HEART OF ALABANG </h4>
        <p> One of our top picks in Izmir.Centrally located in Izmir, Smart Hotel Izmir offers a fitness centre and
            sauna. It is just 100 m from Basmane Metro Station and 1.3 km from Izmir Clock Tower.
            Every room is equipped with a flat-screen TV. Some rooms have a seating area for your
            convenience. Each room comes with a private bathroom with a bath or shower, with slippers, free
            toiletries and a hair dryer provided. A TV with satellite channels is available.
            You will find a restaurant at the hotel. Guests can enjoy the on-site bar.
            The hotel offers 24-hour front desk service. Free WiFi is also available in the entire hotel.
            You can play mini-golf at this hotel, and free use of bicycles and car hire are available. The nearest
            airport is Izmir Adnan Menderes Airport, 14 km from Smart Hotel Izmir.
            Konak is a great choice for travellers interested in city walks, coastal walksand city trips. 
        </p>
      </td>
    </tr>

    <tr>
      <td style="width: 20%;">
        <img src="{{ public_path('img/b1.jpg') }}" alt="" style="width:480px; height: 280px;">
      </td>
      <td style="width: 80%; text-align: left;">
        <h3> F A C I L I T I E S </h3>
        <h4> B1 Function Room </h4>
        <p> 
        The B1 Function Room measures 146sqm in floor area, and is 2.4 meters high. It can accommodate up to 90 persons, and has Wi-Fi internet access, a whiteboard, a podium, a flipchart, a basic sound system, and a projector and screen that can be set up upon request.
        </p>
        <h4> GYM </h4>
        <p> 
            Our gym have various types of fitness equipment for you to stay in shape.
            <br> <b> Timing: </b> Open daily, 6AM to 8PM
        </p>
        </p>
      </td>
    </tr>

    <tr>
      <td style="width: 20%;">
        <img src="{{ public_path('img/2.jpg') }}" alt="" style="width:480px; height: 280px;">
      </td>
      <td style="width: 80%; text-align: left;">
        <div class="row" style="margin: 25px 0px;">
            <div class="column">
              <b> PETS </b>
              <p> 
              * Free! Pets are allowed on request. <br>
                No extra charges.
              </p>
            </div>
            <div class="column">
                <b> Free Internet </b> 
                <p> 
                * Free! WiFi is available in all areas
                  and is <br> free of charge.
                </p>
            </div>
        </div>
        <div class="row" style="margin: 25px 0px;">
            <div class="column">
              <b> Parking </b>
              <p> 
              * Free! Free public parking is
                possible at a location nearby
                (reservation is not needed).
              </p>
            </div>
            <div class="column">
                <b> Languages Spoken </b> 
                <p> 
                * English <br>
                * French <br>
                * Turkish
                </p>
            </div>
        </div>
      </td>
    </tr>
    
    <tr>
      <td style="width: 20%;">
        <img src="{{ public_path('img/10.jpg') }}" alt="" style="width:480px; height: 280px;">
      </td>
      <td style="width: 80%; text-align: left;">
      
        <div class="row" style="margin: 25px 0px;">
            <div class="column" style=" padding: 30px 60px;">
              <b> Reception Services </b>
              <p> 
                * Private check-in/check-out <br>
                * Concierge service <br>
                * Luggage storage <br>
                * Ticket service <br>
                * Tour desk <br>
                * Currency exchange <br>
                * Express check-in/check-out <br>
                * 24-hour front desk
              </p>
            </div>
            <div class="column">
                <img src="{{ public_path('img/reception.jpg') }}" alt="" style="width: 390px; height: 260px;">
            </div>
        </div>

      </td>
    </tr>

  </table>

  <!-- footer  -->
  <div style="background-color: #FFDF3E; text-align:center; margin: 50px 0px; padding: 20px 0px;">
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
  <!-- / footer  -->

</div>

@endsection