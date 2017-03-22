<?php
    # what language we shall use with the GET method

              if (!(isset($_GET['lang']))) {
                $lang = 'en';
                include $lang.'-lang.php';
              } else {
                $lang = $_GET['lang'];
                include $lang.'-lang.php';
              }           
           
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>
    <?php echo $title; ?>  
  </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">

</head><!--/head-->

<body ng-app="myApp">

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/cp-01.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php echo $slides[0][0]; ?><span><?php echo $slides[0][1]; ?></span></h1>
            <p class="animated fadeInRightBig"><?php echo $slogan; ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="index.php?lang=en"><?php echo $language[0]; ?></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="index.php?lang=bg"><?php echo $language[1]; ?></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="index.php?lang=de"><?php echo $language[2]; ?></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="index.php?lang=sr"><?php echo $language[3]; ?></a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/cp-02.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php echo $slides[1][0]; ?><span><?php echo $slides[1][1]; ?></span></h1>
            <p class="animated fadeInRightBig"><?php echo $slogan; ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us"><?php echo $menu[1]; ?></a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/cp-03.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php echo $slides[2][0]; ?><span><?php echo $slides[2][1]; ?></span></h1>
            <p class="animated fadeInRightBig"><?php echo $slogan; ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><?php echo $menu[2]; ?></a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/cp-04.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php echo $slides[3][0]; ?><span><?php echo $slides[3][1]; ?></span></h1>
            <p class="animated fadeInRightBig"><?php echo $slogan; ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#portfolio"><?php echo $menu[3]; ?></a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/cp-05.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php echo $slides[4][0]; ?><span><?php echo $slides[4][1]; ?></span></h1>
            <p class="animated fadeInRightBig"><?php echo $slogan; ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#contact"><?php echo $menu[4]; ?></a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home"><?php echo $menu[0]; ?></a></li>
            <li class="scroll"><a href="#about-us"><?php echo $menu[1]; ?></a></li>
            <li class="scroll"><a href="#services"><?php echo $menu[2]; ?></a></li>                                  
            <li class="scroll"><a href="#portfolio"><?php echo $menu[3]; ?></a></li>
            <li class="scroll"><a href="#contact"><?php echo $menu[4]; ?></a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container" style="margin-top: 70px;">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2><?php echo $services_title; ?></h2>
            <p><?php echo $services_text; ?></p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="50ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[0][0]; ?></h3>
              <p><?php echo $services[0][1]; ?></p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="150ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[1][0]; ?></h3>
              <p><?php echo $services[1][1]; ?></p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="250ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[2][0]; ?></h3>
              <p><?php echo $services[2][1]; ?></p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="350ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[3][0]; ?></h3>
              <p><?php echo $services[3][1]; ?></p>
            </div>
          </div>

        </div>
        <div class="row">

          <div class="col-sm-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[4][0]; ?></h3>
              <p><?php echo $services[4][1]; ?></p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[5][0]; ?></h3>
              <p><?php echo $services[5][1]; ?></p>
            </div>
          </div>

          <div class="col-sm-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[6][0]; ?></h3>
              <p><?php echo $services[6][1]; ?></p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[7][0]; ?></h3>
              <p><?php echo $services[7][1]; ?></p>
            </div>
          </div>

        </div>
        <div class="row">

          <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="800ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[8][0]; ?></h3>
              <p><?php echo $services[8][1]; ?></p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[9][0]; ?></h3>
              <p><?php echo $services[9][1]; ?></p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[10][0]; ?></h3>
              <p><?php echo $services[10][1]; ?></p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="950ms">
            <div class="service-icon">
              <i class="fa fa-check"></i>
            </div>
            <div class="service-info">
              <h3><?php echo $services[11][0]; ?></h3>
              <p><?php echo $services[11][1]; ?></p>
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="about-us" class="parallax" style="margin-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2><?php echo $aboutus_title; ?></h2>
            <p><?php echo $aboutus_text_1; ?></p>
            <p><?php echo $aboutus_text_2; ?></p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2><?php echo $history_title; ?></h2>
            <p><?php echo $history_text_1; ?></p>
            <p><?php echo $history_text_2; ?></p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2><?php echo $portfolio_title; ?></h2>
          <p><?php echo $portfolio_text; ?></p>
            
        </div>
      </div> 
    </div>

    <!-- PORTFOLIO -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="50ms">
          <div class="thumbnail zoom">
            <a href="#" data-toggle="modal" data-target="#rcw">
              
                <img src="images/portfolio/thmb/rcw.jpg" alt="<?php echo $portfolio[0][0]; ?>" title="<?php echo $company.' '.$portfolio[0][0]; ?>" style="width:100%">            

              <div class="caption">
                <h3><?php echo $portfolio[0][0]; ?></h3>
                <p><?php echo $portfolio[0][1]; ?></p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="150ms">
          <div class="thumbnail zoom">
            <a href="#" data-toggle="modal" data-target="#<?php echo $portfolio[1][0]; ?>">
              <img src="images/portfolio/thmb/facade.jpg" alt="<?php echo $portfolio[1][0]; ?>" title="<?php echo $company.' '.$portfolio[1][0]; ?>" style="width:100%">
              <div class="caption">
                <h3><?php echo $portfolio[1][0]; ?></h3>
                <p><?php echo $portfolio[1][1]; ?></p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
          <div class="thumbnail zoom">
            <a href="#" data-toggle="modal" data-target="#gypsum">
              <img src="images/portfolio/thmb/gypsum.jpg" alt="<?php echo $portfolio[2][0]; ?>" title="<?php echo $company.' '.$portfolio[2][0]; ?>" style="width:100%">
              <div class="caption">
                <h3><?php echo $portfolio[2][0]; ?></h3>
                <p><?php echo $portfolio[2][1]; ?></p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="350ms">
          <div class="thumbnail zoom">
            <a href="#" data-toggle="modal" data-target="#klinka">
              <img src="images/portfolio/thmb/klinka.jpg" alt="<?php echo $portfolio[3][0]; ?>" title="<?php echo $company.' '.$portfolio[3][0]; ?>" style="width:100%">
              <div class="caption">
                <h3><?php echo $portfolio[3][0]; ?></h3>
                <p><?php echo $portfolio[3][1]; ?></p>
              </div>
            </a>
          </div>
        </div>

      </div>
      <div class="row">

        <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="450ms">
          <div class="thumbnail zoom">
            <a href="#" data-toggle="modal" data-target="#painting">
              <img src="images/portfolio/thmb/painting.jpg" alt="<?php echo $portfolio[4][0]; ?>" title="<?php echo $company.' '.$portfolio[4][0]; ?>" style="width:100%">
              <div class="caption">
                <h3><?php echo $portfolio[4][0]; ?></h3>
                <p><?php echo $portfolio[4][1]; ?></p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="550ms">
          <div class="thumbnail zoom">
            <a href="#" data-toggle="modal" data-target="#underfloor_cladding">
              <img src="images/portfolio/thmb/cladding.jpg" alt="<?php echo $portfolio[5][0]; ?>" title="<?php echo $company.' '.$portfolio[5][0]; ?>" style="width:100%">
              <div class="caption">
                <h3><?php echo $portfolio[5][0]; ?></h3>
                <p><?php echo $portfolio[5][1]; ?></p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="650ms">
          <div class="thumbnail zoom">
            <a href="#" data-toggle="modal" data-target="#interior">
              <img src="images/portfolio/thmb/interior.jpg" alt="<?php echo $portfolio[6][0]; ?>" title="<?php echo $company.' '.$portfolio[6][0]; ?>" style="width:100%">
              <div class="caption">
                <h3><?php echo $portfolio[6][0]; ?></h3>
                <p><?php echo $portfolio[6][1]; ?></p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="750ms">
          <div class="thumbnail zoom">
            <a href="#">
              <img src="images/portfolio/thmb/exterior.jpg" alt="<?php echo $portfolio[7][0]; ?>" title="<?php echo $company.' '.$portfolio[7][0]; ?>" style="width:100%">
              <div class="caption">
                <h3><?php echo $portfolio[7][0]; ?></h3>
                <p><?php echo $portfolio[7][1]; ?></p>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>

    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  

  <section id="contact" ng-controller="EmailController as emlvalid">

    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2><?php echo $contact_title; ?></h2>
            
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="myForm" method="POST" action="sendemail.php" novalidate>
                <div ng-hide="emlvalid.warning">
                  <p><?php echo $contact_text_1; ?></p>
                </div>
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" 
                      placeholder="Name"
                      ng-model="user.name"
                      ng-minlength="3" 
                      ng-pattern="/^[a-zA-Z]*$/"
                      ng-required="true">
                      <span class="required">*</span>
                      <p class="error validationerror" ng-show="myForm.name.$invalid && myForm.name.$touched">
                        <?php echo $error_name; ?>
                      </p>
                      
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" 
                      placeholder="Email Address"
                      ng-model="user.email" 
                      ng-pattern="/^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/" 
                      ng-required="true">
                      <span class="required">*</span>
                     <p class="error validationerror" ng-show="myForm.email.$invalid && myForm.email.$touched">
                      <?php echo $error_email; ?>
                    </p>
                  </div>

                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" 
                  placeholder="Subject" 
                  ng-model="user.subject" 
                  ng-minlength="3"
                  ng-required="true">
                  <span class="required">*</span>
                  <p class="error validationerror" ng-show="myForm.subject.$invalid && myForm.subject.$touched">
                    <?php echo $error_subject; ?>
                  </p>
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" 
                  placeholder="Enter your message" 
                  ng-model="user.message"
                  ng-minlength="10" 
                  ng-maxlength="300"
                  ng-pattern="/^[a-zA-Z0-9\s.]*$/"
                  ng-required="true"></textarea>
                  <span class="required">*</span>
                  <p class="error validationerror" ng-show="myForm.message.$invalid && myForm.message.$touched">
                    <?php echo $error_message; ?>
                  </p>
                </div>                        
                <div class="form-group">
                  <button ng-disabled="myForm.$invalid" type="submit" ng-click="emlvalid.handleFormSubmit()" class="btn-submit">Send Now</button>
                </div>
              </form>   
              
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p><?php echo $contact_text_2; ?></p>
                <ul class="address">
                  <li><i class="fa fa-institution"></i> <span> <?php echo $company_name; ?>:</span> "CONSTRUCTION PROJEKT" EOOD </li>
                  <li><i class="fa fa-map-marker"></i> <span> <?php echo $company_address; ?>:</span> Stand Slivnitsa 2200, Gebiet Sofia, Yuriy Gargarin str. No 84 </li>
                  <li><i class="fa fa-phone"></i> <span> <?php echo $company_phone; ?>:</span> +49 151 75 666 243  </li>
                  <li><i class="fa fa-envelope"></i> <span> <?php echo $company_email; ?>:</span><a href="mailto:sloba.veber@gmail.com"> support@contructionproject.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> <?php echo $company_website; ?>:</span> <a href="#">www.contructionproject.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2017 Construction Project ltd.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Crafted by <a href="http://softweb.in.rs/">SoftWeb</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal <?php echo $portfolio[0][0]; ?> -->
  <div class="modal fade" id="rcw" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- <?php echo $portfolio[0][0]; ?> content-->
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title"><?php echo $portfolio[0][0]; ?></h4>
        </div>

        <div class="modal-body">

          <?php

          for($i=1;$i<=46;$i++) {

            if ($i == 2) {
              for ($j=1;$j<=2;$j++) {
                $k=3-$i;
          
          ?>

          <div class="thumbnail">
            <img class="img-responsive" src="images/portfolio/rcw/<?php echo $k.'-'.$j; ?>.jpg" alt="<?php echo $portfolio[0][0]; ?>" title="<?php echo $company.' '.$portfolio[0][0]; ?>">
            <div class="caption">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <p><?php echo $portfolio[0][0]; ?></p>
            </div>
          </div>

          <?php

              }
            }

          ?>

          <div class="thumbnail">
            <img class="img-responsive" src="images/portfolio/rcw/<?php echo $i; ?>.jpg" alt="<?php echo $portfolio[0][0]; ?>" title="<?php echo $company.' '.$portfolio[0][0]; ?>">
            <div class="caption">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <p><?php echo $portfolio[0][0]; ?></p>
            </div>
          </div>

          <?php
          
          }
          
          ?>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close_button; ?></button>
        </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal <?php echo $portfolio[1][0]; ?> -->
  <div class="modal fade" id="<?php echo $portfolio[1][0]; ?>" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- <?php echo $portfolio[1][0]; ?> content-->
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title"><?php echo $portfolio[1][0]; ?></h4>
        </div>

        <div class="modal-body">

          <?php for($i=1;$i<=20;$i++) { ?>

          <div class="thumbnail">
            <img class="img-responsive" src="images/portfolio/facade/<?php echo $i; ?>.jpg" alt="<?php echo $portfolio[1][0]; ?>" title="<?php echo $company.' '.$portfolio[1][0]; ?>">
            <div class="caption">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <p><?php echo $portfolio[1][0]; ?></p>
            </div>
          </div>

          <?php } ?>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close_button; ?></button>
        </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal <?php echo $portfolio[5][0]; ?> -->
  <div class="modal fade" id="underfloor_cladding" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- <?php echo $portfolio[5][0]; ?> content-->
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title"><?php echo $portfolio[5][0]; ?></h4>
        </div>

        <div class="modal-body">

          <?php for($i=1;$i<=2;$i++) { ?>

          <div class="thumbnail">
            <img class="img-responsive" src="images/portfolio/underfloor_cladding/<?php echo $i; ?>.jpg" alt="<?php echo $portfolio[5][0]; ?>" title="<?php echo $company.' '.$portfolio[5][0]; ?>">
            <div class="caption">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <p><?php echo $portfolio[5][0]; ?></p>
            </div>
          </div>

          <?php } ?>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close_button; ?></button>
        </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal <?php echo $portfolio[2][0]; ?> -->
  <div class="modal fade" id="gypsum" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- <?php echo $portfolio[2][0]; ?> content-->
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title"><?php echo $portfolio[2][0]; ?></h4>
        </div>

        <div class="modal-body">

          <?php for($i=1;$i<=11;$i++) { ?>

          <div class="thumbnail">
            <img class="img-responsive" src="images/portfolio/gypsum/<?php echo $i; ?>.jpg" alt="<?php echo $portfolio[2][0]; ?>" title="<?php echo $company.' '.$portfolio[5][0]; ?>">
            <div class="caption">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <p><?php echo $portfolio[2][0]; ?></p>
            </div>
          </div>

          <?php } ?>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close_button; ?></button>
        </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal <?php echo $portfolio[3][0]; ?> -->
  <div class="modal fade" id="klinka" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Klinka <?php echo $portfolio[3][0]; ?>-->
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title"><?php echo $portfolio[3][0]; ?></h4>
        </div>

        <div class="modal-body">

          <?php for($i=1;$i<=10;$i++) { ?>

          <div class="thumbnail">
            <img class="img-responsive" src="images/portfolio/klinka/<?php echo $i; ?>.jpg" alt="<?php echo $portfolio[3][0]; ?>" title="<?php echo $company.' '.$portfolio[3][0]; ?>">
            <div class="caption">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <p><?php echo $portfolio[3][0]; ?></p>
            </div>
          </div>

          <?php } ?>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close_button; ?></button>
        </div>

      </div>
        
    </div>
  </div>

  <!-- Modal <?php echo $portfolio[6][0]; ?> -->
  <div class="modal fade" id="interior" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- <?php echo $portfolio[6][0]; ?> content-->
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title"><?php echo $portfolio[6][0]; ?></h4>
        </div>

        <div class="modal-body">

          <?php for($i=1;$i<=6;$i++) { ?>

          <div class="thumbnail">
            <img class="img-responsive" src="images/portfolio/interior/<?php echo $i; ?>.jpg" alt="<?php echo $portfolio[6][0]; ?>" title="<?php echo $company.' '.$portfolio[6][0]; ?>">
            <div class="caption">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <p><?php echo $portfolio[6][0]; ?></p>
            </div>
          </div>

          <?php } ?>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close_button; ?></button>
        </div>

      </div>
        
    </div>
  </div>

  <!-- Modal <?php echo $portfolio[4][0]; ?> -->
  <div class="modal fade" id="painting" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- <?php echo $portfolio[4][0]; ?> content-->
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4 class="modal-title"><?php echo $portfolio[4][0]; ?></h4>
        </div>

        <div class="modal-body">

          <?php for($i=1;$i<=6;$i++) { ?>

          <div class="thumbnail">
            <img class="img-responsive" src="images/portfolio/painting/<?php echo $i; ?>.jpg" alt="<?php echo $portfolio[4][0]; ?>" title="<?php echo $company.' '.$portfolio[4][0]; ?>">
            <div class="caption">
              <button type="button" class="close" data-dismiss="modal">X</button>
              <p><?php echo $portfolio[4][0]; ?></p>
            </div>
          </div>

          <?php } ?>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close_button; ?></button>
        </div>

      </div>

  </div> 

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  
  <!--Angular -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.min.js"></script>
  <script src="js/app.js"></script>
  

</body>
</html>