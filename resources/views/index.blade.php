<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Tooth & Go Clinic </title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="{{ asset('site/https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('site/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('site/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('site/css/style.css') }}">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="site/img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Services</a></li>
                <li class=""><a href="#about">About</a></li>
                <li class=""><a href="#testimonial">Testimonial</a></li>
                <li class=""><a href="#contact">Contact</a></li>
                @if (Route::has('login'))
                <li class="">
                    @auth
                        <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="site/img/logo.png" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Dental Care at your desk!!</h1>
              <p>Quality Dental Services in Philippines <br>Tooth & Go Dental Clinic- Your dental implant specialist.</p>
              <a href="#contact" class="btn btn-appoint">Make an Appointment.</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Our Service</h2>
          <hr class="botm-line">
          <p>
          Our goal is to improve the standards of Philippines dentistry and that is why we use high technology tools such as the Sirona Inlab MCXL milling unit for crown, bridge or veneer fabrication, the latest straumann gonyx surgical guide manufacturing tool for implant dentistry (Swiss made) or the Kavo arcus digma 2 tool for 3 dimensional tmj measurements, useful for full mouth reconstructions.  
          </p>
        
          </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>24 Hour Support</h4>
              <p>Our mission at Tooth & Go is to deliver care with compassion. We bring world class medical care into our patient’s home and aim to make primary healthcare not only more accessible, but also more affordable and accountable to our patients needs.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-plane"></i>
            </div>
            <div class="icon-info">
              <h4>Dental Tourism</h4>
              <p>Interested in dental tourism in the Philippines? If you choose the Philippines for your dental treatments, you are making a decision that many people made before you..</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Expertise</h4>
              <p>Top dental clinics in the Philippines are very strict about hygiene and sterilizing techniques . They have English speaking experienced staff handling foreign patients..</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <div class="icon-info">
              <h4>Accommodation </h4>
              <p>Accommodation is one of the basic needs for any tourism activity, therefore here in the Philippines you have many accommodation choices, depending on your budget.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Cad Cam dentistry</h3>
              <p>
              Our goal is to improve the standards of Philippines dentistry and that is why we use high technology tools such as the Sirona Inlab MCXL milling unit for crown, bridge or veneer fabrication, the latest straumann gonyx surgical guide manufacturing tool for implant dentistry (Swiss made) or the Kavo arcus digma 2 tool for 3 dimensional tmj measurements, useful for full mouth reconstructions.. </p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Why choose us?</h3>
              <p>We believe “knowledge is the basis and success is the result”. The services of an experienced, competent dentist are your best shot at improving your looks, for a better, brighter smile and more self-confidence. Finding the right dentist can help ensure that you are comfortable while undergoing the dental procedures.. </p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Opening Hours</h3>
              <table style="margin: 8px 0px 0px;">
                <tbody>
                  <tr>
                    <td>Monday - Friday</td>
                    <td>9:00 - 6.00 PM</td>
                  </tr>
                  <tr>
                    <td>Saturday</td>
                    <td>9:00 - 6.00 PM</td>
                  </tr>
                  <tr>
                    <td>Sunday</td>
                    <td>Closed</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">Dental Services <br>at Tooth & Go</h2>
            <hr class="botm-line">
            <p class="sec-para">We are offering all kinds of dental treatments such as tooth restoration or placing a colored filling (Composite) inside the tooth cavity and space closure especially for the upper front teeth.</p>
            <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3> Tooth Whitening.</h3>
                <p>
                We offer Tooth Whitening, Diastema Closure   (closure of the space between the two upper front teeth), Veneers and Crowns, in case patients are not satisfied with the way their teeth look..</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3> Veneers.</h3>
                <p>We provide veneers to offer our patients the smile they have always wanted. Veneers are small porcelain laminates glued with resin type cement. This kind of procedure can be performed chair-side (Cerec) or lab-side..</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ about-->
  <!--doctor team-->
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Meet Our Doctors!</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="site/img/doctor2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jens Knab</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="site/img/doctor1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Abc Doc</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="site/img/doctor3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>xyz Doc</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="site/img/doctor4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>John Doe</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ doctor team-->
  <!--testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">see what patients are saying?</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>
            “The treatment and procedure went exactly how I had wished. Flexible, friendly and no complications at all. Excellent Staff and an altogether good experience. I would highly recommend.”.
            </p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="site/img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Roger Bardu<span>Manilia</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>
            Had a great treatment from the Tooth and Go Clinic. The quality of the work was amazing. The best equipped dental practice in the Philippines. Their Dentists and technicians are highly skilled and qualified. I will continue to use their services to keep my teeth healthy.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="site/img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Richard Rumbelow<span>Google</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>
            “I’m a working professional in Singapore. I recommend this clinic Tooth and Go. They provided excellent service for my tooth.”.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="site/img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Kristine<span>Singapore</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ testimonial-->
  <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          “Fantastic, is all I can say. The equipment is state of the art, the professionalism is second to none, the skill of the dentists and technicians are first class. Nothing is too much trouble, everybody genuinely cares about your treatment and well-being.”  
        <p class="text-right text-primary"><i>— Pammy Australia – Whatclinic</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>2. Floor Chloe Building, <br> Metro Manila 1720</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i> info(at)dentist-manila.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>(+63)- 2-84780649</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Having Any Query! Or Book an appointment</h3>
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>Tooth & Go Dental Clinic- Your dental implant specialist- Quality Dental Services in Philippines.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright 2020 Tooth&Go. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  <script src="{{ asset('site/js/jquery.min.js') }}"></script>
  <script src="{{ asset('site/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('site/js/custom.js') }}"></script>
  <script src="{{ asset('site/contactform/contactform.js') }}"></script>

</body>

</html>
