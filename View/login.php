<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Login</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->url; ?>usertemp/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->url; ?>usertemp/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo $this->url; ?>usertemp/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo $this->url; ?>usertemp/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo $this->url; ?>usertemp/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="<?php echo $this->url; ?>usertemp/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="<?php echo $this->url; ?>usertemp/https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo $this->url; ?>usertemp/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo $this->url; ?>usertemp/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo $this->url; ?>usertemp/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?php echo $this->url; ?>usertemp/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="logo"><a href="<?php echo $this->url; ?>usertemp/index.html"><img src="<?php echo $this->url; ?>usertemp/images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_3">
                           <div class="shoping_bag"><a href="#"><img src="<?php echo $this->url; ?>usertemp/images/user-icon.png"></a>
                              <span class="padding_left_40"><a href="#"><img src="<?php echo $this->url; ?>usertemp/images/search-icon.png"></a></span>
                           </div>
                           <div id="myNav" class="overlay">
                              <a href="<?php echo $this->url; ?>usertemp/javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                              
                 <div class="overlay-content">
                                 <a href="<?php echo $this->url  ?>controller/usercontroller/">Home</a>
                                 <a href="<?php echo $this->url  ?>controller/usercontroller/about">About</a>
                                 <a href="<?php echo $this->url  ?>controller/usercontroller/contact">Contact</a>     
                                 <?php 
                                 session_start();
                                    if(isset($_SESSION['admin']))
                                    {?>
                                    <a href="<?php echo $this->url  ?>controller/usercontroller/logout">Add Post</a>
                                     <a href="<?php echo $this->url  ?>controller/usercontroller/viewpost">View Post</a>
                                      <a href="<?php echo $this->url  ?>controller/usercontroller/logout">Logout</a>
                                    <?php }
                                 
                                    if(isset($_SESSION['user']))
                                    {?>
                                    <a href="<?php echo $this->url  ?>controller/usercontroller/logout">Logout</a>
                                    <?php }
                                    else
                                    { ?>
                                       <a href="<?php echo $this->url  ?>controller/usercontroller/login">Login</a>
                                       <?php
                                    }
                                 ?><a href="<?php echo $this->url  ?>controller/usercontroller/register">Register</a>
                                 
                              </div>
                       
                           </div>
                           <span class="navbar-toggler-icon"></span>
                           <span onclick="openNav()"><img src="<?php echo $this->url; ?>usertemp/images/toogle-icon.png" class="toggle_menu"></span>
                        </div>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="banner_taital_section">
                        <h1 class="design_taital">We Do Design Blog For Business</h1>
                        <div class="contact_bt"><a href="#">Register</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="banner_img"><img src="<?php echo $this->url; ?>usertemp/images/banner-img.png"></div>
                           </div>
                           <div class="carousel-item">
                              <div class="banner_img"><img src="<?php echo $this->url; ?>usertemp/images/banner-img.png"></div>
                           </div>
                           <div class="carousel-item">
                              <div class="banner_img"><img src="<?php echo $this->url; ?>usertemp/images/banner-img.png"></div>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
         <div class="col-lg-3">
         </div>
               <div class="col-lg-6">
                  <div class="contact_main">
                     <h1 class="contact_taital">Login</h1>
                     <form action="" method="post">
                        
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Password" name="password">
                        </div>
                   <div class="send_bt">
                           <input type="submit" class="btn-btn primary"  name="login" value="login">
                        </div>
                        
                     </form>
                   
                  </div>
               </div>
              <div class="col-lg-3">
         </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_main">
               <div class="footer_logo"><a href="<?php echo $this->url; ?>usertemp/index.html"><img src="<?php echo $this->url; ?>usertemp/images/footer-logo.png"></a></div>
               <div class="footer_menu">
                  <ul>
                     <li><a href="<?php echo $this->url; ?>usertemp/index.html">Home</a></li>
                     <li><a href="<?php echo $this->url; ?>usertemp/about.html">About</a></li>
                     <li><a href="<?php echo $this->url; ?>usertemp/blogs.html">Blog</a></li>
                     <li><a href="<?php echo $this->url; ?>usertemp/contact.html">Testimonial</a></li>
                     <li><a href="<?php echo $this->url; ?>usertemp/contact.html">Contact</a></li>
                  </ul>
               </div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="<?php echo $this->url; ?>usertemp/images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="<?php echo $this->url; ?>usertemp/images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="<?php echo $this->url; ?>usertemp/images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="<?php echo $this->url; ?>usertemp/images/instagram-icon.png"></a></li>
                  </ul>
               </div>
            </div>
            <h1 class="subscribe_text">Subscribe Now</h1>
            <div class="input_bt">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Enter Your Email" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                     <button class="btn btn-outline-secondary" type="button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
               </div>
            </div>
            <div class="location_text">
               <ul>
                  <li>
                     <a href="#"><img src="<?php echo $this->url; ?>usertemp/images/call-icon.png">
                     <span class="padding_15">Call +01 1234567890</span></a>
                  </li>
                  <li>
                     <a href="#"><img src="<?php echo $this->url; ?>usertemp/images/mail-icon.png">
                     <span class="padding_15">demo@gmail.com</span></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">© 2020 All Rights Reserved.<a href="<?php echo $this->url; ?>usertemp/https://html.design"> Free  html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="<?php echo $this->url; ?>usertemp/js/jquery.min.js"></script>
      <script src="<?php echo $this->url; ?>usertemp/js/popper.min.js"></script>
      <script src="<?php echo $this->url; ?>usertemp/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo $this->url; ?>usertemp/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo $this->url; ?>usertemp/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?php echo $this->url; ?>usertemp/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo $this->url; ?>usertemp/js/custom.js"></script>
      <!-- javascript --> 
      <script src="<?php echo $this->url; ?>usertemp/js/owl.carousel.js"></script>
      <script src="<?php echo $this->url; ?>usertemp/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
              
         $(".zoom").hover(function(){
              
         $(this).addClass('transition');
         }, function(){
              
         $(this).removeClass('transition');
         });
         });
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>  
   </body>
</html>