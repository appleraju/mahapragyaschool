<?php
// Initialize the session
session_start();

require 'Connection.php';
$query1 = mysqli_query($conn, "SELECT * FROM noticeboard");
$query2 = mysqli_query($conn, "SELECT * FROM noticeboard");




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


      <link rel="stylesheet" type="text/css" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
      <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
      <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>



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

  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {

  .intro{
    height: 1500px;
  }
}
|  </style>
<style>
  
  .carousel-item {
  height: 82vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div  id="mobile-logo" style="width:100%;height:12%;background-color:white">
	
      
  <p  class="visible-lg"  style="display:inline;float:left;left:3%;top:15%;position: relative;"> <a href=""><img src="https://www.mahapragyapublicschool.com/wp-content/uploads/2016/10/cropped-cropped-mahapragya_logo.jpg" width="75px" height="85px" style="margin-right:10px;" alt="My Logo">
     <font style="font-size:27px;float:right;font-family: 'Lato';font-weight: 600;margin-top: 0%;line-height: 1.4;"> MAHAPRAGYA <br>PUBLIC SCHOOL</font></a></p>
<p class="d-none d-md-block"   style="display:inline;float:right;right:60%;position: relative;"><script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=04f64b1ac64cc7fbcbd3bf024e3dd1ed03eae61c'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/771291/t/2"></script>


  </p>
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

<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="width:100%;background-color:#63B8FF;font-size:18px;white-space: nowrap;">
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
          <a class="dropdown-item" href="https://secureito.com/patronmessage.php">Patron's Message</a>
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
            <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="https://secureito.com/gallery.php">Gallery </a>
      </li>
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="https://secureito.com/schoolenquiryform.php">Admission Enquiry</a>
      </li>
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="https://secureito.com/contact.html">Reach Us </a>
      </li>
      <li class="nav-item active"  style="margin-right:3%;" >
        <a class="nav-link" href="https://secureito.com/login.php">Staff Login </a>
      </li>

    
    </ul>
 
  </div>
</nav>



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
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://secureito.com/i_images/1.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://secureito.com/i_images/2.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://secureito.com/i_images/3.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://secureito.com/i_images/4.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://secureito.com/i_images/5.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://secureito.com/i_images/6.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
        <div class="carousel-item" style="background-image: url('https://secureito.com/i_images/7.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
        <div class="carousel-item" style="background-image: url('https://secureito.com/i_images/8.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
        <div class="carousel-item" style="background-image: url('https://secureito.com/i_images/9.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
        <div class="carousel-item" style="background-image: url('https://secureito.com/i_images/10.jpg ')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
  <div style="height: 30px;width: 100%;background-color: #1E90FF;position: static;">

    
<marquee width="100%" direction="left" style="font-size: 20px;color: gold;" style=" overflow: hidden;display: inline-block;
    width: 100%; 
    text-align:right;">
<span>&#8226;</span> 

This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
This is a sample scrolling text that has scrolls texts to left. <span>&#8226;</span>
</marquee>

  </div>
  <div  style="margin:auto;margin-top:45px;text-align: center;width: 50%;left:40%;margin-bottom: 50px;">
    <p style="line-height:1.3;"><font style="font-size: 45px;font-weight: 1000;font-style: lato;color: brown;">Welcome To </font><br><font style="font-size: 45px;font-weight: 1000;color: #1E90FF;">MahaPragya Public school</font> </p>
    <p style="margin-top: 25px;"><font style="font-size: 18px;font-weight: 100;font-family:'Lato';color: grey;">Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any distinction.

Creating to the nursery, primary and secondary segments, the school follows the syllabi laid by Central Board of Secondary Education (CBSE).
Based upon Acharya Mahapragya’s educational philosophy, the school aspires to be a trendsetter by promoting excellence in education. Yoga and Science of Living (Jeevan Vigyan) form an integral part of the curriculum.</font> </p>
    <a href="https://secureito.com/ourvision.html"><button type="button" class="btn btn-primary" >Read more</button></a>
  </div>









<hr>





    <div style="height: 750px;" class="d-none d-sm-block
">
   

  <div class="card" style="border:none;width:280px;height:620px;margin-top:50px;margin-right:2vw;margin-left:5vw;float:left; ">
  <img class="card-img-top" src="https://secureito.com/i_images/chairman.jpg" style="width:280px;height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Trustee Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">Dear Parents and students,

I am glad that you have a taken the right decision of admitting your child in MPS- smart choice indeed.

The school aims at imparting knowledge that would be relevant in life always for the student. It adopts a blend of both- contemporary and traditional outlook to create a positive atmosphere of learning for your child.
</p>
    <a href="https://secureito.com/Trusteemessage.html" class="btn btn-primary">Read More</a>
  </div>
</div>

  <div class="card" style="border:none;width:280px;height:620px;margin-top:50px;float:left; ">
  <img class="card-img-top" src="https://jvbi.ac.in/images/pages/teachers/img2.jpg" style="width:280px;height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Patron's Message</h4>
    <p class="card-text"style="font-weight: 200; font-family: 'Lato';color: gray;">Dear Parents and Students, 

Every child is expected to go to school for about 14 years in his/her life. During this period, what he has to learn as a human being is to develop two of in-built mechanisms of the human brain,  in the right direction at the right place (School) and with the right people (teachers.The  two mechanisms in his brain are Neo-cortex and limbic system.

</p>
    <a href="https://secureito.com/patronmessage.html" class="btn btn-primary">Read More</a>
  </div>
</div>


  <div class="card" style="width:280px;height:620px;margin-top:50px;margin-right:1vw;margin-left:2vw;float:left;border:none;">
  <img class="card-img-top" src="https://secureito.com/i_images/princi.jpg" style="width:280px;height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Principal Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any distinction.Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any</p>
    <a href="https://secureito.com/principalmessage.html" class="btn btn-primary">Read more</a>
  </div>
</div>


 

 <div class="card bg"  style="-webkit-box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);
-moz-box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);
box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);background-color:white;width:275px;height:620px;margin-top:50px;float:right;margin-right:8vw; ">
    <div class="card-body text-center">
      <h4 class="card-title">Notice Board</h4>
    </div>
    <marquee width="100%" height="100%"direction="up" color="gold" style=" overflow: hidden;display: inline-block;
    width: 100%; 
    text-align:left;margin-left:10px; ">
<?php
    
$types = array();
while ($item = mysqli_fetch_array($query1))
{
    
   
    echo '<a href="' . $item['link'] . ' " style="font-size:20px;font-weight:bold;text-align:left;margin-bottom:30px;">' . $item['title'] . '</div>';
      
    echo '<hr style="color:black">';

}



?>

</marquee>
  </div>
  

 </div>




    <div class="d-block d-sm-none" style="height: 2700px;">
   
 
  <div class="card" style="border:none;width:280px;height:620px;margin: auto; margin-top:50px;margin-bottom: 50px;">
  <img class="card-img-top" src="https://secureito.com/i_images/chairman.jpg" style="width:280px;height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Trustee's Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">I am glad that you have a taken the right decision of admitting your child in MPS- smart choice indeed.The school aims at imparting knowledge that would be relevant in life always for the student. It adopts a blend of both- contemporary and traditional outlook to create a positive atmosphere of learning for your child.
</p>
    <a href="https://secureito.com/Trusteemessage.html" class="btn btn-primary">Read More</a>
  </div>
</div>

  

  <div class="card" style="border:none;width:280px;height:620px;margin: auto; margin-bottom: 50px;">
  <img class="card-img-top" src="https://jvbi.ac.in/images/pages/teachers/img2.jpg" style="width:280px;height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Patron's Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any distinction.Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race 
</p>
    <a href="https://secureito.com/patronmessage.html" class="btn btn-primary">Read More</a>
  </div>
</div>


  <div class="card" style="width:280px;height:620px;margin-top:50px;margin: auto;border:none;margin-bottom: 50px;">
  <img class="card-img-top" src="https://secureito.com/i_images/princi.jpg" style="width:280px;height:200px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Principal Message</h4>
    <p class="card-text" style="font-weight: 200; font-family: 'Lato';color: gray;">Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any distinction.Mahapragya Public School (MPS) is the best co-educational English medium School in Mumbai, which admits children of all caste, community, religion and race without any</p>
    <a href="https://secureito.com/principalmessage.html" class="btn btn-primary">Read more</a>
  </div>
</div>

 <div class="card bg"  style="-webkit-box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);
-moz-box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);
box-shadow: -1px -1px 6px 0px rgba(163,163,163,1);background-color:white;width:275px;height:620px;margin-top:50px;margin: auto; ">
    <div class="card-body text-center">
      <h4 class="card-title">Notice Board</h4>
    </div>
     <marquee width="100%" height="100%" direction="up" color="gold" style=" overflow: hidden;display: inline-block;
    width: 100%; 
    text-align:left;margin-left:10px; ">
<?php
    
$types = array();
while ($item = mysqli_fetch_array($query2))
{
    
   
    echo '<a href="' . $item['link'] . ' " style="font-size:20px;font-weight:bold;text-align:left;margin-bottom:30px;">' . $item['title'] . '</a>';
      
    echo '<hr style="color:black">';

}



?>

</marquee>
    </div>

 </div>


 <hr style="width: 10%;height: 0.5px;background-color: gray;">

<div>
  <div style="margin:16%;margin-bottom:60px;margin-top:60px;"class="card-deck">
  <div class="card">
    <div class="card-body">
<h5 class="card-title" style="text-align: center;">      <i class="fa fa-calendar" style="text-align: center;font-size: 50px;margin-top: 20px;" aria-hidden="true"></i>
Friday Clubs</h5>
      <p class="card-text">Learn all about the extra curricular activities students can participate in through school clubs.</p>
      <a href="https://secureito.com/facalities.html">Read More|</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;"><i class="fa fa-graduation-cap" style="text-align: center;font-size: 50px;margin-top: 20px;" aria-hidden="true"></i>Academics</h5>
      <p class="card-text">
The school prides itself on its academic rigour, flexibility, and student-centric approach. CBSE allows the child to grow into a wholesome, skilled, competent individual</p>
      <a href="https://secureito.com/cirriculum.html">Read More|</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;"><i class="fa fa-flask" style="text-align: center;font-size: 50px;margin-top: 20px;" aria-hidden="true"></i>Innovations</h5>
      <p class="card-text">The school is a buzzing laboratory of experimentation at all levels. Our innovations are born out of our needs and shaped by our passion for embracing change</p>
      <a href="https://secureito.com/facalities.html">Read More|</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;"><i class="fa fa-question" style="text-align: center;font-size: 50px;margin-top: 20px;" aria-hidden="true"></i>Admission Faqs</h5>
      <p class="card-text">Have a question about admissions to MahaPragya Public School? Our FAQs section has all the answers and more to all your queries.</p>
        <a href="https://secureito.com/faq.html">Read More|</a>
    </div>
  </div>
</div>

</div>
<hr>

<div class="d-block d-sm-none">
  <p style="text-align: center;font-weight: bold;font-size: 25px;margin-top: 30px;">2020 CBSE performance highlights
</p>

  <div style="margin:16%;margin-bottom:50px;margin-top:30px;border:none;"class="card-group">
  <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
109</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">students</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
56</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 90%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
37</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 80%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
10</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 70%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 80px;">      
2</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 60%</p>
     
    </div>
  </div>
  
</div>

  </div>



<div class="d-none d-sm-block
">>
  <p style="text-align: center;font-weight: bold;font-size: 25px;margin-top: 30px;">2020 CBSE performance highlights
</p>

  <div style="margin:16%;margin-bottom:50px;margin-top:30px;border:none;"class="card-group">
  <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
109</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">students</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
56</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 90%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
37</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 80%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
10</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 70%</p>
     
    </div>
  </div>
   <div class="card" style="border:none;">
    <div class="card-body">
<h1 class="card-title" style="text-align: center;font-weight: normal;font-size: 6vw;">      
2</h1>
<hr style="width: 30%;">
      <p class="card-text" style="text-align: center;font-size: 20px;">Above 60%</p>
     
    </div>
  </div>
  
</div>

  </div>


  <hr>
  <div>
<p style="text-align: center;font-weight: bold;font-size: 25px;margin-top: 30px;margin-bottom: 50px;">Virtual Tour 2020
</p>

 <div class="owl-carousel owl-theme">

    <div class="item" ><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;color: white'">Entrance</h4><img src="https://secureito.com/i_images/entrance.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" ><h4 style="position: absolute;font-size: 30px;bottom:10px;left:30%;color:white;font-weight: normal;">Reception</h4><img src="https://secureito.com/i_images/reception.jpg" style="width:100%;height: 100%;"></div>
    <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Play Area</h4><img src="https://secureito.com/i_images/playarea.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Staircase</h4><img src="https://secureito.com/i_images/staircase.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Skating ring</h4><img src="https://secureito.com/i_images/10.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Passage</h4><img src="https://secureito.com/i_images/passage.jpg" style="width:100%;height: 100%;"></div>
     <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Auditorium</h4><img src="https://secureito.com/i_images/auditorium.jpg" style="width:100%;height: 100%;"></div>
        <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Classrooms</h4><img src="https://secureito.com/i_images/classroom.jpg" style="width:100%;height: 100%;"></div>
           <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Classrooms</h4><img src="https://secureito.com/i_images/classroom1.jpg" style="width:100%;height: 100%;"></div>
              <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Principal Room</h4><img src="https://secureito.com/i_images/principalroom.jpg" style="width:100%;height: 100%;"></div>

                 <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Sciencelab</h4><img src="https://secureito.com/i_images/sciencelab.jpg" style="width:100%;height: 100%;"></div>
                    <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Dance Hall</h4><img src="https://secureito.com/i_images/danceaarea.jpg" style="width:100%;height: 100%;"></div>
                       <div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Library</h4><img src="https://secureito.com/i_images/librrary.jpg" style="width:100%;height: 100%;"></div>
<div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Computer Lab</h4><img src="https://secureito.com/i_images/computerlab.jpg" style="width:100%;height: 100%;"></div>

<div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Washroom</h4><img src="https://secureito.com/i_images/washroom.jpg" style="width:100%;height: 100%;"></div>
<div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">WashBasin</h4><img src="https://secureito.com/i_images/washbasin.jpg" style="width:100%;height: 100%;"></div>

<div class="item" style="display:block;"><h4 style="position: absolute;font-size: 30px;bottom:0;left:30%;color:white;font-weight: normal;">Back-Entrance</h4><img src="https://secureito.com/i_images/backentrance.jpg" style="width:100%;height: 100%;"></div>
   
</div>

    <script type="text/javascript">//<![CDATA[


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    stagePadding: 50,
    nav:true,
    autoHeight:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

  //]]></script>
    
    
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