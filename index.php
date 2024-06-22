<?php 
session_start();
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>eoc</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                     <div class="full">
                        <div class="logo">
                           <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
                   <!--navigation bar-->
                   <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Faculty.php">Faculty</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Offers.php">Offers</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <li class="nav-item">
                     <a class="login_btn hide_btn"  href="logout.php">Log out</a>
                       </li>
                           </ul>
                           
                        </div>
                     </nav>
                      <!--end navigation bar-->
                     <div class="right_button">
                     <li class="nav-item">
                     <a class="login_btn"  href="logout.php">Log out</a>
                       </li>
                        <!-- <a class="login_btn" href="signup.html">Login</a> -->
                        <!-- <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">    
                           <div class="col-md-7">
                              <div class="text-bg">
                                 <h1> <span class="yellow"> welcome </span>  <br> i grow</h1>
                                 <p>At our company I GROW, we understand that every investor is unique, with distinct goals and risk tolerances. That's why we're dedicated to providing personalized investment strategies tailored to your individual needs, whether you're planning for retirement, seeking to grow your wealth, or aiming to preserve capital.</p>
                                 <a class="read_more" href="contact.php">Contact</a><a class="read_more" href="about.php">About Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="text-bg">
                                 <h1> <span class="yellow"> welcome </span>  <br> i grow</h1>
                                 <p>At our company I GROW, we understand that every investor is unique, with distinct goals and risk tolerances. That's why we're dedicated to providing personalized investment strategies tailored to your individual needs, whether you're planning for retirement, seeking to grow your wealth, or aiming to preserve capital.</p>
                                 <a class="read_more" href="contact.php">Contact</a><a class="read_more" href="about.php">About Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="text-bg">
                                 <h1> <span class="yellow"> welcome </span>  <br> i grow</h1>
                                 <p>At our company I GROW, we understand that every investor is unique, with distinct goals and risk tolerances. That's why we're dedicated to providing personalized investment strategies tailored to your individual needs, whether you're planning for retirement, seeking to grow your wealth, or aiming to preserve capital.</p>
                                 <a class="read_more" href="contact.php">Contact</a><a class="read_more" href="about.php">About Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <Marquee class="TAGLINE">Unlocking Your Financial Potential: Where Vision Meets Investment. We're More Than Just Numbers - We're Your Partners in Prosperity. With Tailored Strategies and Expert Guidance, We Navigate the Path to Your Financial Freedom. Invest with Confidence, Secure Your Tomorrow, and Build a Legacy That Endures. Welcome to a World Where Your Dreams Take Root and Flourish.</Marquee>
            <!-- <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a> -->
         </div>
      </section>
      <!-- end banner -->
      <!-- service section -->
      <div class="service">
         
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><img src="images/heading_icon.png" alt="#"/><span class="yellow">Providing Facilities</span> <br> <span class="appp_l">Economical & financial Services </span></h2>
                     <p>Investment companies typically offer a range of services tailored to meet the diverse financial needs and goals of their clients. Here are some common services provided by investment companies:</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="service_box">
                     <i><img src="images/service_icon1.png" alt="#"/></i>
                     <div class="service_text">
                        <h3>Financial Planning: </h3>
                        <p>Offering comprehensive financial planning services to assess current financial situations, set financial goals, and develop personalized strategies to achieve those goals.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="service_box">
                     <i><img src="images/service_icon2.png" alt="#"/></i>
                     <div class="service_text">
                        <h3>Investment Management:</h3>
                        <p>Managing investment portfolios on behalf of clients, which may include asset allocation, portfolio diversification, and ongoing monitoring and rebalancing. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="service_box">
                     <i><img src="images/service_icon3.png" alt="#"/></i>
                     <div class="service_text">
                        <h3>Wealth Management: </h3>
                        <p> Providing holistic wealth management solutions, including investment management, estate planning, tax planning, risk management, and charitable giving strategies.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="service_box border_bottom1">
                     <i><img src="images/service_icon4.png" alt="#"/></i>
                     <div class="service_text">
                        <h3>  Risk Management:  </h3>
                        <p>Assessing clients' risk tolerance and providing strategies to manage investment risk through diversification, asset allocation, and other risk mitigation techniques. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end service section -->
     
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <a class="logo2" href="index.php"><img src="images/logo2.png" alt="#"/></a>
                     <p>Thank you for considering I GROW as your trusted partner in financial prosperity. We're dedicated to providing personalized investment solutions and expert guidance to help you achieve your financial goals. Whether you're planning for retirement, building wealth, or securing your family's future, our team is here to support you every step of the way. Reach out to us today to start your journey toward financial success.
                     </p>
                  </div>
                  <div class="col-md-3">
                     <div class="fid_box">
                        <h3>Useful Link </h3>
                        <ul class="use_link">
                           <li class="active"><a  href="index.php">Home</a></li>
                           <li><a href="about.php">About</a></li>
                           <li><a href="Faculty.php">Faculty</a></li>
                           <li><a href="Offers.php">Offers</a></li>
                           <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="fid_box">
                        <h3>Contact  </h3>
                        <ul class="location_icon">
                           <li><a href="Javascript:void(0)"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> address update <br>coming soon</li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a><br>
                              (+91)  98347 82344<br> (+91) 77759 13544
                           </li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> Igrow002@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
                     </form>
                  
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>

