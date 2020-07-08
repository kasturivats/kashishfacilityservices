<?php 
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h3{
    font-size: 30px;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #1d0f0a;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
 .img {
    height: 130px;
    width: 130px;
    margin-top: -50px;
    margin-left: -25px;
    border-radius: 62px;
}
.image1{
  vertical-align: middle;
    height: 250px;
    width: auto;
    border: solid;
    color: black;

}
.image2{
  vertical-align: middle;
    height: 232.4px;
    width: auto;
    border: solid;
    color: black;

}


.image3 {
    vertical-align: middle;
    height: 250px;
    width: 300px;
    border: solid;
    color: black;
    margin-top: 62px;

}
.jumbotron h3 {
    margin-left: 25%;
    }
    .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: auto;
    height: 100%;
    width: 300px;
    background: 100%;
    margin-left: 37%;
}
.jumbotron p {
    margin-left: 35%;
    margin-bottom: 15px;
    font-size: 21px;
    font-weight: 200;
    }
     :after,:before {
    color: #433584;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #433584;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
}
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron ">
 <img src="http://localhost/self/thumbnail.png" class="img">
  <h3><u>KASHISH FACILITY SERVICES(OPC) PVT. LTD.</u></h3>
  <p>We are service provider company.</p>
<!--     <ul>
  <li>Housekeeping</li>
  <li> Pest control/ Sanitization</li>
  <li>Security Services</li>
  <li>Manpower Supply </li> 
  <li>Waste Management</li>
</ul>  -->

 <!--  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form> -->
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company</h2><br>
      <h4>Kashish Facility (OPC) Pvt. Ltd. was commenced in 2019. Founder SN Jha,
who has more than 17+ years worth of experience in Facility Management at Safdarjung
Hospital wished to assemble a multitude of services all easily accessible
under a single company. Kashish Facility Services growth
has been tremendous and people look to us for services ranging from Housekeeping Services
to Waste Management Services. We are also equipped to offer Manpower Supply when the need arises.
In 2020, Shri SN Jha also launched a separate branch by the name of Kasturi Vats for
more business offerings and services.</h4><br>
      <b><p style="color: red;">"Kashish Facility Services is currently on the field working hard to provide families with sanitization services to combat the COVID-19 pandemic. These include sanitizer coating and many more."</p></b><br>
       <b><p style="color: red;">For more details contact us.</p></b>
      <br><a href="#contact"><button class="btn btn-default btn-lg">Get in Touch</button></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to meet the growing demand of the services with the latest art of technology in order to satisfy our customer requirements..</h4><br>
     
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <h4><b><u>Pest Control Service</u></b></h4>
      <p>We provide specialized services by well- equipped highly trained, experienced and verified professionals with systematic approach.<br></p>
      <p>Eco friendly chemicals, which have zero or low toxicity are used.</p>
      <img src="http://localhost/self/pest.jpg" class="image1">
    </div>
     <div class="col-sm-4">
      <h4><b><u>Housekeeping Service/ Facility Management</u></b></h4>
      <ul>
        <li>Mechanized Housekeeping</li>
        <li>General Housekeeping</li>
        <li>Carpet Shampooing</li>
        <li>Floor Scrubbing/ Buffing</li>
        <li>Water Tank Cleaning</li>
      </ul>
          <img src="http://localhost/self/images/hk.jpg" class="image2">
    </div>
    <div class="col-sm-4">
      <!-- <span class="glyphicon glyphicon-heart logo-small"></span> -->
      <h4><b><u>Security Service</u></b></h4>
      <p>Kashish Facility Services is proving effective Security Services in safeguarding our client’s men, material and information.</p>
       <img src="http://localhost/self/security.jpg" class="image3">
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4><b><u>Waste Management</u></b></h4>
      <ul>
        <li>Solid Waste</li>
        <li>Liquid Waste</li>
        <li>Recyclable Waste</li>
        <li>Organic Waste</li>
      </ul>
   
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4 style="color:red"><b><u>COVID-19 Special</u></b></h4>
      <p>We provide sanitization services in offices, banks, shops etc. to protect them from Corona virus</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Manpower Supply</h4>
    <p>We provide trained, experienced manpower to our clients as per their requirements.</p><br>

<p>We have been supplying security personnel, housekeeping staff, drivers, unskilled personnel, skill personnel and semi- skilled personnel etc.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>Our Clients</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <!-- <img src="paris.jpg"  width="400" height="300"> -->
        <p><u><b>Punjab National Bank</b></u></p>
        <p>We are providing services to 50+ branches of PNB.</p>
       <ul>
         <li>South Delhi Zone</li>
         <li>East Delhi Zone</li>
         <li>West Delhi Zone</li>
         <li>North Delhi Zone</li>
         <li>Central Delhi Zone</li><br><br>
       </ul>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <!-- <img src="newyork.jpg" alt="New York" width="400" height="300"> -->
        <p><u><b>Bank Of Baroda</u></b></p>
        <p>We are providing services to 10+ branches of BOB.</p>
        <ul>
         <li>Saket, Delhi</li>
         <li>Munirka, Delhi</li>
         <li>R.K Puram, Delhi</li>
         <li>Khanpur, Delhi</li>
         <li>Safdarjung Hospital, Delhi</li><br><br> 

       </ul>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <!-- <img src="sanfran.jpg" alt="San Francisco" width="400" height="300"> -->
        <p><u><b>Companies:</u></b></p>
    <!--     <p>Yes, San Fran is ours</p> -->
     <ul>
         <li>Shalimar Corp. LTD.,Delhi</li>
         <li>OD Creations PVT. LTD.,Faridabad</li>
         <li>Jannat Valley, Faridabad</li>
         <li>DAV Educational and Welfare Society Alaknanda,Delhi</li>
         <li>National Medical Library, IIMS Delhi</li>
         <li>Sanjeev Law Firm,Neb Sarai</li>
         <li>Jagriti Public School,Delhi</li>
         <li>KSK Academy Public School, elhi</li>
       </ul>
      </div>
    </div>
  </div><br>
  
  <h2>Photo Gallery</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <!-- <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4> -->
        <img src="http://localhost/self/img12.jpg">
      </div>
      <div class="item">
      <img src="http://localhost/self/img1.jpg">
      </div>
      <div class="item">
        <img src="http://localhost/self/img3.jpg">
      </div>
        <div class="item">
        <img src="http://localhost/self/img8.jpg">
      </div>
        <div class="item">
        <img src="http://localhost/self/img5.jpg">
      </div>
        <div class="item">
        <img src="http://localhost/self/img6.jpg">
      </div>
        <div class="item">
        <img src="http://localhost/self/img7.jpg">
      </div>
      <div class="item">
        <img src="http://localhost/self/img4.jpg">
      </div>
      <div class="item">
        <img src="http://localhost/self/img9.jpg">
      </div>
      <div class="item">
        <img src="http://localhost/self/img14.jpg">
      </div>
      <div class="item">
        <img src="http://localhost/self/img11.jpg">
      </div>
      <div class="item">
        <img src="http://localhost/self/img2.jpg">
      </div>
      <!-- <div class="item">
        <img src="http://localhost/self/img13.jpg">
      </div> -->
      <div class="item">
        <img src="http://localhost/self/img10.jpg">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>We believe in providing the best services at lowest rates.</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pest Control</h1>
        </div>
        <p>Click below for the rates:</p>
        <a href="http://localhost/self/pestcontrol_rates.pdf">Click me</a>
        <!-- <div class="panel-body"> -->
          <!-- <table>
            <tr>
              <th>Area</th>
              <th>Bed Bugs</th>
              <th>Mosquito/Fly</th>
              <th>Termite Control</th>
              <th>Rodent Control</th>
            </tr>
            <tr>
              <td>1BHK</td>
              <td>Rs.2000</td>
            </tr>
          </table> -->
        <!-- </div> -->
        <!--<div class="panel-footer"> -->
          <!-- <h3>$19</h3>
          <h4>per month</h4>
          < button class="btn btn-lg">Sign Up</button>
        <!</div> -->
    
      <!--   </div> -->
        <!-- <div class="panel-footer"> -->
         <!--  <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button> -->
      <!--   </div> -->
      </div>      
    </div>      
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Housekeeping/Security</h1>
          <h2 style="color: white">Manpower Supply</h2>
        </div>
        <div class="panel-body">
          <p>*As per minimum wages</p>
          <p>*Minimum wages can be vary from state to state.</p>
        </div>
        <!-- <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div> -->
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Covid-19 Special</h1>
        </div>
        <div class="panel-body">
          <p><strong>*RS. 0.70/ sqft.</strong></p>
          <p>*GST excluded</p>


         
        </div>
       <!--  <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div> -->
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 12 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> New Delhi, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 8467903793, +91 9910941622</p>
      <p><span class="glyphicon glyphicon-envelope"></span>kashishfacilityservices@gmail.com</p>
    </div>
<!--      <form method="post">
    <div class="col-sm-7 slideanim">
      <div class="row">
       
        <div class="col-sm-6 form-group">
          <input type="text" placeholder="Enter name" name="names" id="name" required>
        </div>
        <div class="col-sm-6 form-group">
          <input type="text" placeholder="Enter Email" name="emails" id="email" required>
        </div>
      </div>
    <input type="text" placeholder="Comments" name="comments" id="comments">
      <div class="row">
        <div class="col-sm-12 form-group">
           <button type="submit" value="submit" class="button" name="submit">Send</button>
        </div> -->
      
      </div>
    </div>
  </div>
</div>
</form>
<!-- Image of location/map -->


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
