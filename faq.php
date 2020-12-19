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
<style>

nav {
  position: relative;
  width: 100%;
  height: 60px;
  max-height: 800px; 
    z-index: 10;
     background-color: #6bb6ff;

  
}

#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #head-mobile {
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box
}

#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0
}

#cssmenu #head-mobile {
  display: none
}

#cssmenu {
  font-family: lato;
  background: #6bb6ff
}

#cssmenu > ul > li {
  float: left
}

#cssmenu > ul > li > a {
  text-decoration: none;
  color: black;
  font-family:  lato;
  font-size: 14px;
  padding: 22px 25px;

     background-color: #6bb6ff;

  letter-spacing: 1px;
  font-weight: 100;
}

#cssmenu > ul > li:hover > a,
#cssmenu ul li.active a {
  color: #8a8a8e;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
       background-color: #6bb6ff;

  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#cssmenu > ul > li:hover,
#cssmenu ul li.active:hover,
#cssmenu ul li.active,
#cssmenu ul li.has-sub.active:hover {
  color: #8a8a8e;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

#cssmenu > ul > li.has-sub > a {
  padding-right: 30px
}

#cssmenu > ul > li.has-sub > a:after {
  position: absolute;
  top: 27px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
 background-color: #6bb6ff;
  content: ''
}

#cssmenu > ul > li.has-sub > a:before {
  position: absolute;
  top: 24px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
 
  content: '';
  -webkit-transition: all .25s ease;
  -ms-transition: all .25s ease;
  transition: all .25s ease
}

#cssmenu > ul > li.has-sub:hover > a:before {
  top: 28px;
  height: 0;
  left:0px;
}

#cssmenu ul ul {
  position: absolute;
  left: -9999px
}

#cssmenu ul ul li {
  height: 0;
  -webkit-transition: all .25s ease;
  -ms-transition: all .25s ease;
  background: #6bb6ff;
  transition: all .25s ease
}

#cssmenu ul ul li:hover {}

#cssmenu li:hover > ul {
  left: auto
}

#cssmenu li:hover > ul > li {
  height: 35px
}

#cssmenu ul ul ul {
  margin-left: 100%;
  top: 0
}

#cssmenu ul ul li a {
  border-bottom: 1px solid rgba(150, 150, 150, 0.15);
  padding: 11px 15px;
  width: 170px;
  font-size: 15px;
  text-decoration: none;
  color: #ddd;
  font-weight: 400;
}

#cssmenu ul ul li:last-child > a,
#cssmenu ul ul li.last-item > a {
  border-bottom: 0
}

#cssmenu ul ul li:hover > a,
#cssmenu ul ul li a:hover {
  color: #fff
}

#cssmenu ul ul li.has-sub > a:after {
  position: absolute;
  top: 16px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: #ddd;
  content: ''
}

#cssmenu ul ul li.has-sub > a:before {
  position: absolute;
  top: 13px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: #ddd;
  content: '';
  -webkit-transition: all .25s ease;
  -ms-transition: all .25s ease;
  transition: all .25s ease
}

#cssmenu ul ul > li.has-sub:hover > a:before {
  top: 17px;
  height: 0
}

#cssmenu ul ul li.has-sub:hover,
#cssmenu ul li.has-sub ul li.has-sub ul li:hover {
  background: #363636;
}

#cssmenu ul ul ul li.active a {
  border-left: 1px solid #333
}

#cssmenu > ul > li.has-sub > ul > li.active > a,
#cssmenu > ul ul > li.has-sub > ul > li.active> a {
  border-top: 1px solid #333
}

@media screen and (max-width:700px) {
  .logo {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 46px;
    text-align: center;
    padding: 10px 0 0 0;
    float: none;
  }
  .logo2 {
    display: none;
  }
  nav {
    width: 100%;
  }
  #cssmenu {
    width: 100%;
  }
  #cssmenu ul {
    width: 100%;
    display: none;
  }
  #cssmenu ul li {
    width: 100%;
    border-top: 1px solid #444;
  }
  #cssmenu ul li:hover {
    background: #363636;
  }
  #cssmenu ul ul li,
  #cssmenu li:hover > ul > li {
    height: auto;
  }
  #cssmenu ul li a,
  #cssmenu ul ul li a {
    width: 100%;
    border-bottom: 0;
  }
  #cssmenu > ul > li {
    float: none;
  }
  #cssmenu ul ul li a {
    padding-left: 25px;
  }
  #cssmenu ul ul li {
    background: #333!important;
  }
  #cssmenu ul ul li:hover {
    background: #363636!important
  }
  #cssmenu ul ul ul li a {
    padding-left: 35px;
  }
  #cssmenu ul ul li a {
    color: #ddd;
    background: none;
  }
  #cssmenu ul ul li:hover > a,
  #cssmenu ul ul li.active > a {
    color: #fff;
  }
  #cssmenu ul ul,
  #cssmenu ul ul ul {
    position: relative;
    right: 0;
    width: 100%;
    margin: 0;
    text-align: left;
  }
  #cssmenu > ul > li.has-sub > a:after,
  #cssmenu > ul > li.has-sub > a:before,
  #cssmenu ul ul > li.has-sub > a:after,
  #cssmenu ul ul > li.has-sub > a:before {
    display: none;
  }
  #cssmenu #head-mobile {
    display: block;
    padding: 23px;
    color: #ddd;
    font-size: 12px;
    font-weight: 700;
  }
  .button {
    width: 50px;
    height: 500px;
    position: absolute;
    left: 0;
    top: 0;
    cursor: pointer;
    z-index: 12399994;
  }
  .button:after {
    position: absolute;
    top: 22px;
    right: 20px;
    display: block;
    height: 4px;
    width: 20px;
    border-top: 2px solid #dddddd;
    border-bottom: 2px solid #dddddd;
    content: '';
  }
  .button:before {
    -webkit-transition: all .3s ease;
    -ms-transition: all .3s ease;
    transition: all .3s ease;
    position: absolute;
    top: 16px;
    right: 20px;
    display: block;
    height: 2px;
    width: 20px;
    background: #ddd;
    content: '';
  }
  .button.menu-opened:after {
    -webkit-transition: all .3s ease;
    -ms-transition: all .3s ease;
    transition: all .3s ease;
    top: 23px;
    border: 0;
    height: 2px;
    width: 19px;
    background: #fff;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  .button.menu-opened:before {
    top: 23px;
    background: #fff;
    width: 19px;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  #cssmenu .submenu-button {
    position: absolute;
    z-index: 99;
  
    top: 0;
    display: block;
    border-left: 1px solid #444;
    height: 57px;
    width: 46px;
    cursor: pointer;
  }
  #cssmenu .submenu-button.submenu-opened {
    background: #31333b;
  }
  #cssmenu ul ul .submenu-button {
    height: 34px;
    width: 34px;
  }
  #cssmenu .submenu-button:after {
    position: absolute;
    top: 28px;
    right: 19px;
    width: 8px;
    height: 2px;
    display: block;
    background: #ddd;
    content: '';
  }
  #cssmenu ul ul .submenu-button:after {
    top: 15px;
    right: 13px;
  }
  #cssmenu .submenu-button.submenu-opened:after {
    background: #fff;
  }
  #cssmenu .submenu-button:before {
    position: absolute;
    top: 25px;
    right: 22px;
    display: block;
    width: 2px;
    height: 8px;
    background: #ddd;
    content: '';
  }
  #cssmenu ul ul .submenu-button:before {
    top: 12px;
    right: 16px;
  }
  #cssmenu .submenu-button.submenu-opened:before {
    display: none;
  }
  #cssmenu ul ul ul li.active a {
    border-left: none;
  }
  #cssmenu > ul > li.has-sub > ul > li.active > a,
  #cssmenu > ul ul > li.has-sub > ul > li.active > a {
    border-top: none;
  }
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
  
    <nav  id='cssmenu' style="float:left;position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;">
    <div id="head-mobile"></div>
    <div  class="button"></div>
    <ul  >
      <li ><a href='https://secureito.com/mps.php'>HOME</a></li>
      <li><a href='#'>ABOUT</a>
        <ul>
          <li><a href='https://secureito.com/patronmessage.php'>Patron's Message</a></li>
          <li><a href='https://secureito.com/principalmessage.php'>Principal's Message</a></li>
          <li><a href='https://secureito.com/Trusteemessage.php'>Trustee's Message</a></li>
          <li><a href='https://secureito.com/ourvision.php'>Our Vision</a></li>
        </ul>



      </li>

         <li><a href='#'>OUR TEAM</a>
        <ul>
          <li><a href='https://secureito.com/stafflist.php'>Staff List</a></li>
          <li><a href='https://secureito.com/ptalist.php'>PTA Memembers</a></li>

        </ul>

      <li><a href='#'>SCHOOL</a>
        <ul>
          <li><a href='https://secureito.com/cirriculum.php'>Curriculum</a></li>
          <li><a href='https://secureito.com/achievements.php'>Achievements</a></li>
          <li><a href='https://secureito.com/facalities.php'>Facalities</a></li>

        </ul>
      </li>
      <li><a href='#'>ADMISSIONS</a>
          <ul>
          <li><a href='https://secureito.com/faq.php'>Admission FAQS</a></li>
          <li><a href='https://secureito.com/rules.php'>Rules & Regulations</a></li>

        </ul>
      </li>

      <li><a href='https://secureito.com/gallery.php'>GALLERY</a></li>

      <li><a href='https://secureito.com/schoolenquiryform.php'>ADMISSION ENQUIRY</a></li>
      <li><a href='https://secureito.com/contact.html'>CONTACT</a></li>
       <li><a href='https://secureito.com/login.php'>STAFF LOGIN</a></li>
    </ul>
  </nav>





<div class="container-fluid">

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9 " >
      <h3 style="margin-top:30px;margin-bottom:50px;margin-left: 4vw;font-size: 35px;">
        Admission FAQS
      </h3>     

<div id="accordion" style="margin-left: 2vw">
 <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button style=" white-space: normal;text-align: left;"class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
          How long has Mahapragya Public School been in existence?
        </button>
      </h5>
    </div>
    <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      Mahapragya Public School was founded in 1975, with 25 students offering the SSC board of education. Today we are a vibrant centre of modern education under the CBSE board with 500students in Kindergarten to Grade 10.
      </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button style=" white-space: normal;text-align: left;"class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          What geographic areas do you draw students from?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       We cater mainly to students who live in South Mumbai, but also have students who attend from as far away as Dadar.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          What is your Teacher Student Ratio?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       1:10 in both the Primary and Secondary sections.
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" style=" white-space: normal;text-align: left;"  data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
          What is Curriculum followed at school?
        </button>
      </h5>
    </div>

    <div id="collapsefour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
     The school is affiliated to the Central Board of Secondary Education(CBSE) for Grades 9 and 10.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="#collapseFive">
          What are the fees at MahaPragya Public School?
        </button>
      </h5>
    </div>
    <div id="#collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
     A one-time, non-refundable Application Fee of ₹1,500 must be submitted to the school with the printed Registration form. The application process then begins but is not a guarantee of acceptance.
     <br>

A one-time, non-refundable Admission Fee of ₹10,000 is payable when a student is granted acceptance to the school.
<br>
A one-time refundable Caution Fee of ₹10,000 is payable at the time of acceptance. This fee is refunded after adjustment for any sums owed when the student leaves or is withdrawn from the school.
<br>
Academic fees:
Grades 1 – 4: ₹146,260 when paid annually and ₹36,565 when paid quarterly.
Grades 5 – 9: ₹151,100 when paid annually and ₹37,775 when paid quarterly.
Grade 10: ₹171,260 when paid annually and ₹42,815 when paid quarterly.
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseTsixe" aria-expanded="false" aria-controls="collapseTsixe">
          Are there any other fees to consider?
        </button>
      </h5>
    </div>
    <div id="collapseTsixe" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       School bus transportation, Books, Stationary Items, Field trips and all overnight trips. 
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          What is the fees payment schedule?
        </button>
      </h5>
    </div>

    <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       Fees are payable in advance annually or at the beginning of each quarter. Unpaid dues may result in the student being struck off the rolls.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          How do you accept fees?
        </button>
      </h5>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       Fees should be deposited directly into the school account with cheques drawn in
favour of “Mahapragya Public School”. A specially printed pay-in slip and fee card is to be used for this purpose.
For More information contact school office at 022-22414201
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          What is the school schedule?
        </button>
      </h5>
    </div>
    <div id="collapseNine" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        The school year comprises three terms. The 2018-19 school year begins in April, 2018 and ends in March, 2019.
First term: April 2 – April 27, 2018; June 7 – August 3, 2018
Second term: August 6 – November 2, 2018
Third term: November 12 – December 21 2108; January 7 – March 27 2019
      </div>
    </div>
  </div>





  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
         What are the school Hours?
        </button>
      </h5>
    </div>

    <div id="collapseTen" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
    For Grades 1 through 10, school hours are from 7.45 am to 2.00 pm
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
         What are the school office timings?
        </button>
      </h5>
    </div>
    <div id="collapseEleven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       The School office is open from 8:00 am to 3:00 pm, Monday to Friday except for holidays.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
        When can parents meet the Principal?
        </button>
      </h5>
    </div>
    <div id="collapse12" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      The Principal meets parents on Wednesdays and Fridays between 9:00 am and 11:00 am only.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
          What are the faculty meeting hours?
        </button>
      </h5>
    </div>

    <div id="collapse13" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Co-ordinators and teachers of the Primary and Secondary sections are available between 2.05 pm and 2.25 pm on working days (except Friday).
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
          Is the school open on weekends and holidays?
        </button>
      </h5>
    </div>
    <div id="collapse14" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
    The school is closed on Saturdays and Sundays and school business is conducted on school holidays.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style=" white-space: normal;text-align: left;" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
          What is tge age criteria for admissions?
        </button>
      </h5>
    </div>
    <div id="collapse15" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      Children applying to enter Kindergarten must be xxx years of age on xxx day, month. Children applying for older grades are assessed by the school for correct class placement but usually, the same age requirement is followed.
      </div>
    </div>
  </div>
</div>
       </div>
     


       </div>
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
            <li><a href="#">Rules And Regulations</a></li>
            <li><a href="#">Trustee's Message</a></li>
            <li><a href="#">Principal Message</a></li>
            <li><a href="#">FAcilities</a></li>
                     </ul>
        </div>
      </div>
            <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Resources</h4>
          <ul class="list-unstyled">
            <li><a href="#">FAQS</a></li>
            <li><a href="#">ADMISSION FAQS</a></li>
            <li><a href="#">GALLERY</a></li>
            <li><a href="#">Friday Clubs</a></li>
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