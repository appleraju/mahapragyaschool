<?php
// Initialize the session
session_start();

require 'Connection.php';
$query1 = mysqli_query($conn, "SELECT * FROM testimonial
                               ORDER BY RAND()
                                LIMIT 1");



?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js'></script>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


     



  <style id="compiled-css" type="text/css">
      .owl-carousel .item {
  
    height:350px;
    
    /* EOS */
  </style>



<style>
  

  
/*FOOTER*/

footer {
  background: #16222A;
  background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
  background: linear-gradient(59deg, #3A6073, #16222A);
  color: white;
  margin-top:100px;
}

footer a {
  color: #fff;
  font-size: 14px;
  transition-duration: 0.2s;
}

footer a:hover {
  color: #FA944B;
  text-decoration: none;
}

.copy {
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}

.footer-middle {
  padding-top: 2em;
  color: white;
}


/*SOCİAL İCONS*/

/* footer social icons */

ul.social-network {
  list-style: none;
  display: inline;
  margin-left: 0 !important;
  padding: 0;
}

ul.social-network li {
  display: inline;
  margin: 0 5px;
}


/* footer social icons */

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoLinkedin:hover {
  background-color: #007bb7;
}

.social-network a.icoFacebook:hover i,
.social-network a.icoLinkedin:hover i {
  color: #fff;
}

.social-network a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 30px;
  height: 30px;
  font-size: 15px;
}

.social-circle li i {
  margin: 0;
  line-height: 30px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #595959;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.social-network a {
  background-color: #F9F9F9;
}

</style>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div  id="mobile-logo" style="width:100%;height:12%;background-color:white">
	
      
  <p  class="visible-lg"  style="display:inline;float:left;left:3%;top:15%;position: relative;"> <a href=""><img src="https://www.mahapragyapublicschool.com/wp-content/uploads/2016/10/cropped-cropped-mahapragya_logo.jpg" width="75px" height="85px" style="margin-right:10px;" alt="My Logo">
     <font style="font-size:27px;float:right;font-family: 'Lato';font-weight: 600;margin-top: 0%;line-height: 1.4;"> MAHAPRAGYA <br>PUBLIC SCHOOL</font></a></p>

  <p class="d-none d-md-block"   style="display:inline;float:right;right:40%;top:15%;position:relative;"><i class="fa fa-phone" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px; 
"></i>
    <font style="font-size:1vw;float:  right;font-family: lato;font-weight: 100;font-color:black;">022 2241 4201 <br>  <span>022 2241 4201</span>
  </font>
  </p>
  <p class="d-none d-md-block"   style="display:inline;float:right;right:13%;top:15%;position:relative;"><i class="fa fa-map-marker" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px; 
"></i>
    <font style="font-size:1vw;float: right;font-family: lato;font-weight: 100;font-color:#0000">32, Dadiseth Agyari Lane <br>  <span>Kalbadevi Road</span><br><span>Mumbai-02</span>
  </font>
  </p>
 <p class="d-none d-md-block"   style="display:inline;float:right;right:-15%;top:15%;position:relative;"><i class="fa fa-globe" style="opacity:0.7;font-size:40px;
vertical-align: middle;
margin-right: 6px;
padding-top: 5px; 
"></i>
    <font style="font-size:1vw;float: right;font-family: lato;font-weight: 100;font-color:#000000">Affiliated to CBSE<br>  <span> Affiliation No. 1130253</span><br><span>School Code – 30215</span>
  </font>
  </p>
 
  </div>

    <script type="text/javascript">


(function($) {
  $.fn.menumaker = function(options) {
    var cssmenu = $(this),
      settings = $.extend({
        format: "dropdown",
        sticky: false
      }, options);
    return this.each(function() {
      $(this).find(".button").on('click', function() {
        $(this).toggleClass('menu-opened');
        var mainmenu = $(this).next('ul');
        if (mainmenu.hasClass('open')) {
          mainmenu.slideToggle().removeClass('open');
        } else {
          mainmenu.slideToggle().addClass('open');
          if (settings.format === "dropdown") {
            mainmenu.find('ul').show();
          }
        }
      });
      cssmenu.find('li ul').parent().addClass('has-sub');
      multiTg = function() {
        cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
        cssmenu.find('.submenu-button').on('click', function() {
          $(this).toggleClass('submenu-opened');
          if ($(this).siblings('ul').hasClass('open')) {
            $(this).siblings('ul').removeClass('open').slideToggle();
          } else {
            $(this).siblings('ul').addClass('open').slideToggle();
          }
        });
      };
      if (settings.format === 'multitoggle') multiTg();
      else cssmenu.addClass('dropdown');
      if (settings.sticky === true) cssmenu.css('position', 'fixed');
      resizeFix = function() {
        var mediasize = 700;
        if ($(window).width() > mediasize) {
          cssmenu.find('ul').show();
        }
        if ($(window).width() <= mediasize) {
          cssmenu.find('ul').hide().removeClass('open');
        }
      };
      resizeFix();
      return $(window).on('resize', resizeFix);
    });
  };
})(jQuery);

(function($) {
  $(document).ready(function() {
    $("#cssmenu").menumaker({
      format: "multitoggle"
    });
  });
})(jQuery);



  //]]></script>
  
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="width:100%;background-color:#63B8FF;font-size:18px;white-space: nowrap;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"  >
      <<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="width:100%;background-color:#63B8FF;font-size:18px;white-space: nowrap;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"  >
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="https://secureito.com/mps.php">Home</a>
      </li>
 
      <li class="nav-item active dropdown" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/patronmessage.php">Patron's Message</a>
          <a class="dropdown-item" href="https://secureito.com/principalmessage.php">Principal's Message</a>
                      <a class="dropdown-item" href="https://secureito.com/Trusteemessage.php">Chairman's Message</a>

          <a class="dropdown-item" href="https://secureito.com/ourvision.php" >Our Vision</a>
        </div>
      </li>
       <li class="nav-item dropdown active" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Our Team
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://secureito.com/stafflist.php">Staff List</a>
          <a class="dropdown-item" href="https://secureito.com/ptalist.php">PTA list</a>

        </div>
      </li>
       <li class="nav-item dropdown active" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         School
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://secureito.com/cirriculum.php">Curriculum</a>
          <a class="dropdown-item" href="https://secureito.com/facalities.php">Facalities</a>
                      <a class="dropdown-item" href="https://secureito.com/achievements.php">Achievements</a>

        </div>
      </li>
      <li class="nav-item dropdown active" style="margin-right:3%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Admissions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://secureito.com/faq.php">Admission's FAQ</a>
          <a class="dropdown-item" href="https://secureito.com/rules.php">Rules & Regulations</a>


        </div>
      </li>

            <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="https://secureito.com/gallery.php">Gallery</a>
      </li>
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="https://secureito.com/schoolenquiryform.php">Admission Enquiry</a>
      </li>
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="https://secureito.com/contact.html">Reach Us</a>
      </li>
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="https://secureito.com/login.php">Staff Login</a>
      </li>

    
    </ul>
 
  </div>
</nav>




<div class="container-fluid">

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9 " >
      <h3 style="margin-top:30px;margin-bottom:50px;margin-left: 3vw;">
Our Achievements
      </h3> 
        <p style="margin-left: 3vw">
     
Mahapragya Public School is proud of the success of the students in the examinations. The high standard of the school is reflected in the large number of students going on to higher education. Our outstanding success in the CBSE examination places our institution amongst the leading schools in the city.

<br>
<br>
With a view to enhancing the development of the person as a whole, the school recognises the wider achievements of students in a variety of ways throughout the year. Special awards and merit certificates are presented on the Annual Day.
<br>
<br>
<img class="d-none d-sm-block" src="https://secureito.com/i_images/topper.jpg" style="width: 600px;height: 500px">
<img class="d-block d-sm-none"  src="https://secureito.com/i_images/topper.jpg" style="width: 250px;height: 400px" >


<br>
<br>
CBSE Examination 2019
<br>
NO. OF CANDIDATES APPEARED: 109
<br>
Highest Percentage 97%
<br>
<br>
TOPPERS OF THE SCHOOL
<br>
1st Rudra Shah: 97.00%
<br>
2nd Vikasha Jain: 96.40%
<br>
3rd Arham Jain: 96.20%
<br>
<br>

NO. OF CANDIDATES ABOVE 90%: 73
<br>
NO. OF CANDIDATES ABOVE 80%: 45
<br>
NO. OF CANDIDATES ABOVE 70%: 16
<br>
</p>

       </div>
      <div class="col-lg-3 " >
        <div class="list-group" style="margin-top:15vh;margin-right:1vw; ">
        	  <li class="list-group-item " style="font-size: 25px;font-weight: bold;background: #6bb6ff;color:black;">Explore MahaPragya</li>
        	   <a href="#" class="list-group-item list-group-item-action" style="font-size: 18px;font-weight: normal;background: #6bb6ff;color:white;">Cirriculum</a>
  <a href="#" class="list-group-item list-group-item-action" style="font-size: 18px;font-weight: normal;background: #6bb6ff;color:white;">FAQs</a>
  <a href="#" class="list-group-item list-group-item-action" style="font-size: 18px;font-weight: normal;background: #6bb6ff;color:white;">Gallery</a>
   <a href="#" class="list-group-item list-group-item-action" style="font-size: 18px;font-weight: normal;background: #6bb6ff;color:white;">Contact</a>
</div>
<br>

<?php
    echo '<div class="container" style="padding-top: 30px;">
          <div style="font-size:22px;font-weight:bold;text-align:center;margin-top:10px;margin-bottom:20px;" >Testimonials</div>';
$types = array();
while ($item = mysqli_fetch_array($query1))
{
    
   
    echo '<div  style="font-size:20px;font-weight:bold;text-align:left;">' . $item['tname'] . '</div>';
      echo '<div style="font-size:18px;font-weight:bold;text-align:left;margin-bottom:5px;">' . $item['tpos'] . '</div>';
     
echo '<div style="font-size:18px;font-weight:norma;text-align:left;margin-bottom:20px;" >"' . $item['tmessage'] . '"</div>';
    echo '<div style="font-size:20px;font-weight:bold;text-align:left;">' . $item['sname'] . '</div>';
 
    echo '<div style="font-size:18px;font-weight:bold;text-align:left;margin-bottom:5px;">Class ' . $item['sclass'] . '</div>';
     echo '<div style="font-size:18px;font-weight:norma;text-align:left;margin-bottom:15px;">"' . $item['smessage'] . '"</div>';

}


echo '</div>';
?>


      </div>
    </div>
  </div>
</div>
   

<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>MahaPragya Public School</h4>
          <ul class="list-unstyled">
            <button style="background-color: DodgerBlue;
  border: none; 
  color: white; 
  border-radius: 5px;
  padding: 12px 16px; 
  font-size: 20px;
  cursor: pointer; "><i class="fa fa-envelope"></i><a style="font-size: 20px;" href="mailto:principal@mahapragyapublicschool.com">  Mail Us</a></button>
                  </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Links</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="https://secureito.com/rules.html">Rules And Regulations</a></li>
            <li><a href="https://secureito.com/Trusteemessage.html">Trustee's Message</a></li>
            <li><a href="https://secureito.com/principalmessage.html">Principal Message</a></li>
            <li><a href="https://secureito.com/facalities.html">Facilities</a></li>
                     </ul>
        </div>
      </div>
            <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Resources</h4>
          <ul class="list-unstyled">
            <li><a href="https://secureito.com/faq.html">FAQS</a></li>
            <li><a href="https://secureito.com/faq.html">ADMISSION FAQS</a></li>
            <li><a href="https://secureito.com/gallery.html">GALLERY</a></li>
            <li><a href="https://secureito.com/facalities.html">Friday Clubs</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Locate Us</h4>
          <ul class="list-unstyled">
            <div style="width: 100%"><iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;q=%2032,%20Dadiseth%20Agyari%20Lane,%20Kalbadevi%20Road,%20Mumbai,%20Maharashtra%20400002+()&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>       
    </div>
    </div>
  <div class="row">
    <div class="col-md-12 copy">
      <p class="text-center">&copy; Copyright 2020 - MahaPragya Public School  All rights reserved.</p>
    </div>
      </div>


  </div>
  </div>
</footer>
</body>
</html>