<?php
    //START A SESSION
    session_start();

    include('../server.php');

    $uid = $status = "";

    if(!empty($_REQUEST['status'])){
      $status = $_REQUEST['status'];
    }

    if(!empty($status)){
        echo '<script>alert("Incorrect Email or Password!")</script>';
    }

    if(isset($_SESSION["member"]) === true){
        //SET USER INFORMATION
        $uid = $_SESSION['uid'];
        
        $sql_userInformation = "SELECT * FROM user WHERE uid='$uid'";
        $res_userInformation = mysqli_query($conn, $sql_userInformation);
        $row_userInformation = mysqli_fetch_array($res_userInformation);

        $username = $row_userInformation['username'];
    }
    
    //TO GET AMOUNT OF UNPAID CART
    // $cartAmount = 0;
    
    // $sql_getCartAmount = "SELECT * FROM cart WHERE uid='$uid' AND status='unpaid'";
    // $res_getCartAmount = mysqli_query($conn, $sql_getCartAmount);

    // if(mysqli_num_rows($res_getCartAmount) > 0){
    //     while($row = mysqli_fetch_array($res_getCartAmount)){
    //         $cartAmount = $cartAmount + 1;
    //     }
    // }

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Ice Cream Shop, Vanilla ice-cream, ​Ice cream &amp;amp; vegan ice cream, ​Ice cream delivery to all 50 states, Order Preparation, Contact Us">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Baskin-Robbins_logo.svg.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="index.php" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-image u-sticky u-header" id="sec-2fcf" data-image-width="1200" data-image-height="675"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1024" data-image-height="1024">
          <img src="images/Baskin-Robbins_logo.svg.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse u-custom-font u-font-montserrat" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-font-montserrat u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="Products.php" style="padding: 10px 20px;">Products</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Ice-Cream.php">Ice Cream</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Sundaes.php">Sundaes</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="cakes.php" style="padding: 10px 20px;">Cakes</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="career.php" style="padding: 10px 20px;">Career</a>
</li><li class="u-nav-item"><a class="u-active-palette-1-base u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Products.php">Products</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Ice-Cream.php">Ice Cream</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sundaes.php">Sundaes</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="cakes.php">Cakes</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="career.php">Career</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-2">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2a02"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-2a02" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <?php
              if(empty($uid)){
                echo '<ul class="u-nav u-unstyled u-nav-5"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-grey-5 u-text-grey-5 u-text-hover-palette-2-base" href="../index.php" style="padding: 10px 20px;">LOGIN</a>';
              }else{
                echo '<ul class="u-nav u-unstyled u-nav-5"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-grey-5 u-text-grey-5 u-text-hover-palette-2-base" href="profile.php" style="padding: 10px 20px;">Welcome, '.$username.'!</a>';
              }
            ?>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php">LOGIN</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    <section class="u-align-left u-clearfix u-image u-section-1" src="" data-image-width="3984" data-image-height="2656" id="carousel_0269">
      <h1 class="u-text u-text-default u-text-palette-1-base u-title u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">BASKIN ROBBINS</h1>
      <p class="u-text u-text-default u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">What's NEW<br>
      </p>
      <div id="carousel-bd35" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
        <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
          <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="1"></li>
          <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="2"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
          <div class="u-active u-carousel-item u-container-align-center u-container-style u-image u-image-contain u-slide u-image-1" data-image-width="1200" data-image-height="630">
            <div class="u-container-layout u-container-layout-1"></div>
          </div>
          <div class="u-align-center u-carousel-item u-container-style u-image u-shading u-slide u-image-2" data-image-width="1200" data-image-height="628">
            <div class="u-container-layout u-container-layout-2"></div>
          </div>
          <div class="u-align-center u-carousel-item u-container-style u-image u-shading u-slide u-image-3" data-image-width="1000" data-image-height="600">
            <div class="u-container-layout u-container-layout-3"></div>
          </div>
        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-1" href="#carousel-bd35" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
          <span class="sr-only">+Previous</span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-2" href="#carousel-bd35" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
          <span class="sr-only">+Next</span>
        </a>
      </div>
      <p class="u-text u-text-custom-color-2 u-text-default u-text-3"> Every year in March, we celebrate Happy BRand Day to mark the anniversary of Baskin-Robbins! In celebration of 78 years of scooping and making memories together, we are sharing what we do best - VARIETY. Since 1945, we've created more than 1,000 unique and delicious ice creams in a variety of flavors, and today we've handpicked 31 of Malaysians' favorites along with their stories to share more about each unique flavor identity.<span style="font-weight: 700;"></span>
      </p>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-3 u-section-2" id="carousel_2b7a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <div class="u-border-6 u-border-white u-image u-image-circle u-image-1" alt="" data-image-width="687" data-image-height="1031" data-animation-out="0"></div>
                <h4 class="u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">Ice Cream</h4>
                <p class="u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-out="0"> Explore all of our ice cream and beverage treats you know, love, and crave. Choose from any of the delicious flavors available in our dipping case. </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-video-cover">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <div class="u-border-6 u-border-white u-image u-image-circle u-image-2" alt="" data-image-width="512" data-image-height="512" data-animation-out="0"></div>
                <h4 class="u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1000">Cakes</h4>
                <p class="u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-out="0"> Get your dose of happiness today with dozens of&nbsp;<b>designs and flavors</b>&nbsp;to choose from!<br>Guaranteed taste and satisfaction, only at Baskin-Robbins.
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-video-cover">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <div class="u-border-6 u-border-white u-image u-image-circle u-image-3" alt="" data-image-width="512" data-image-height="512" data-animation-out="0"></div>
                <h4 class="u-text u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1000">Handpacked</h4>
                <p class="u-text u-text-6" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-out="0"> Bring home your favorite Baskin-Robbins ice cream to enjoy whenever you want! Handpacked ice cream is available in pint, quart, half gallon and value cuts.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-image u-section-3" id="carousel_11ef" data-image-width="3984" data-image-height="2656">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-palette-1-base u-shape u-shape-circle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-27 u-white u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h2 class="u-text u-text-default u-text-1"> Caramel Praline Cheesecake <br>
                  </h2>
                  <p class="u-text u-text-2">
                    <a onclick="" class="bucket u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" rel="baskinrobbins:icecream/flavors,baskinrobbins:icecream/flavors/seasonal">Indulgent vanilla cheesecake flavoured ice cream swirled with a caramel ribbon and praline pecans</a>
                  </p>
                  <a href="Ice-Cream.php#carousel_5c4f" class="u-active-black u-border-3 u-border-active-black u-border-hover-black u-border-palette-2-light-2 u-btn u-button-style u-hover-black u-none u-text-active-white u-text-body-color u-text-hover-white u-btn-2">learn more</a>
                </div>
              </div>
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-33 u-image-1" data-image-width="600" data-image-height="900" data-animation-out="0">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-border-12 u-border-palette-5-light-2 u-preserve-proportions u-shape u-shape-circle u-white u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-4" id="carousel_3110" data-image-width="3984" data-image-height="2656">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Order Preparation</h2>
        <div class="u-border-6 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
        <p class="u-large-text u-text u-text-variant u-text-2"> Pick-up orders made before 4 p.m. can be ready for SAME DAY PICK UP. Please indicate your preferred pick-up date and time prior to checking out. We will send a notification as soon as your order is ready for pick up.&nbsp;<br>
        </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-5" id="carousel_1d95" data-image-width="3984" data-image-height="2656">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-shape u-shape-circle u-white u-shape-1"></div>
        <img src="Brownie-Sundae-ala-mode.jpg">
        <div class="u-align-left u-container-style u-group u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text u-text-default u-text-1"> Cakes</h3>
            <p class="u-text u-text-2">Get your dose of happiness today with dozens of&nbsp;<b>designs and flavors</b>&nbsp;to choose from!<br>Guaranteed taste and satisfaction, only at Baskin-Robbins.
            </p>
            <a href="cakes.php#carousel_bcfc" class="u-active-black u-border-3 u-border-active-black u-border-hover-black u-border-palette-2-light-2 u-btn u-button-style u-hover-black u-none u-text-active-white u-text-body-color u-text-hover-white u-btn-1">Learn more</a>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-light-1 u-section-6" id="sec-8f8f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-align-left u-text u-text-default u-text-1">Follow Us</h3>
                  <p class="u-align-center u-text u-text-default u-text-2">Follow us on social media to be aware of any updates and promotions about Baskin Robbins :)</p>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <div class="u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/MYBaskinRobbins/"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cb49"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-cb49"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/BaskinRobbins?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8b00"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-8b00"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c127"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c127"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-315d"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © 2021. All Rights Reserved by Golden Scoop Sdn Bhd (169609-A)<br>A-16-1 Tower A, Northpoint Office, Wilayah Persekutuan, 1, Medan Syed Putra Utara, Mid Valley City, 59200 Kuala Lumpur, Federal Territory of Kuala Lumpur
        </p>
      </div></footer>
    
  
</body></html>