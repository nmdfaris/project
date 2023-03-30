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
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>career</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="career.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Baskin-Robbins_logo.svg.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="career">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-image u-sticky u-header" id="sec-2fcf" data-image-width="1200" data-image-height="675"><div class="u-clearfix u-sheet u-sheet-1">
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">LOGIN</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-valign-middle-lg u-valign-middle-md u-section-1" id="carousel_eb60">
      <div class="u-palette-5-dark-3 u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-palette-1-light-2 u-shape u-shape-rectangle u-shape-2"></div>
      <img src="images/careerimg3.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="1080" data-image-height="607">
      <div class="u-palette-3-base u-shape u-shape-rectangle u-shape-3"></div>
      <h1 class="u-text u-text-black u-title u-text-1">JOIN OUR TEAM</h1>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-a2ab">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-accordion u-expanded-width u-spacing-10 u-accordion-1">
          <div class="u-accordion-item">
            <a class="active u-accordion-link u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-palette-1-light-1 u-radius-14 u-accordion-link-1" id="link-accordion-0781" aria-controls="accordion-0781" aria-selected="true">
              <span class="u-accordion-link-text">Executive Sr. Manager</span><span class="u-accordion-link-icon u-icon u-icon-rectangle u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 42 42" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f4c1"></use></svg><svg class="u-svg-content" viewBox="0 0 42 42" x="0px" y="0px" id="svg-f4c1" style="enable-background:new 0 0 42 42;"><polygon points="42,20 22,20 22,0 20,0 20,20 0,20 0,22 20,22 20,42 22,42 22,22 42,22 "></polygon></svg></span>
            </a>
            <div class="u-accordion-active u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-1" id="accordion-0781" aria-labelledby="link-accordion-0781">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <p class="u-text u-text-1">Key Responsibilities</p>
                <ul class="u-custom-list u-text u-text-2">
                  <li>
                    <div class="u-list-icon">
                      <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                    </div>Lead outlets effectively to meet performance targets. Address issues promptly and effectively and ensure manpower needs are managed.<br>Prepare performance reports (daily, weekly and monthly) and review the performance of the outlets with focus on sales and food safety. Take appropriate action and provide support to ensure targets are met.
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                    </div>Work closely with the support functions to address manpower, logistics, finance and administrative issues.<br>Conduct ROR (Review of Operations Risks) on food safety, SOPs, product quality and health risks to ensure compliance to required standards.<br>Verifications of outlet requisitions which includes stock take report, petty cash, claim, payroll, hiring of part time<br>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="u-accordion-item">
            <a class="u-accordion-link u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-palette-1-light-1 u-radius-14 u-accordion-link-2" id="link-accordion-4c47" aria-controls="accordion-4c47" aria-selected="false">
              <span class="u-accordion-link-text">Executive Outlet Manager</span><span class="u-accordion-link-icon u-icon u-icon-rectangle u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 42 42" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f2c3"></use></svg><svg class="u-svg-content" viewBox="0 0 42 42" x="0px" y="0px" id="svg-f2c3" style="enable-background:new 0 0 42 42;"><polygon points="42,20 22,20 22,0 20,0 20,20 0,20 0,22 20,22 20,42 22,42 22,22 42,22 "></polygon></svg></span>
            </a>
            <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-2" id="accordion-4c47" aria-labelledby="link-accordion-4c47">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-3">Key Responsibilities</p>
                <ul class="u-custom-list u-text u-text-4">
                  <li>
                    <div class="u-list-icon">
                      <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                    </div>Monitor and manages store staffing levels to ensure partner development and talent acquisition to achieve and maintain store operational requirement.<br>Responsible to maintain good and profitable Cost of Goods, labor cost and controlling product damages according to guideline by Finance department.<br>Executes store operational policies and procedures, including those for cash handling and safety and security to ensure the safety of all team member during each shift.<br>Setting goals for the work group, developing organizational capability, and modelling how work together.<br>Conduct ROR (Review of Operations Risks) on food safety, SOPs, product quality and health risks to ensure compliance to required standards.<br>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="u-accordion-item">
            <a class="u-accordion-link u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-palette-1-light-1 u-radius-14 u-accordion-link-3" id="link-accordion-a910" aria-controls="accordion-a910" aria-selected="false">
              <span class="u-accordion-link-text">Executive Assistant Sr. Manager</span><span class="u-accordion-link-icon u-icon u-icon-rectangle u-text-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 42 42" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9669"></use></svg><svg class="u-svg-content" viewBox="0 0 42 42" x="0px" y="0px" id="svg-9669" style="enable-background:new 0 0 42 42;"><polygon points="42,20 22,20 22,0 20,0 20,20 0,20 0,22 20,22 20,42 22,42 22,22 42,22 "></polygon></svg></span>
            </a>
            <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-3" id="accordion-a910" aria-labelledby="link-accordion-a910">
              <div class="u-container-layout u-valign-middle u-container-layout-3">
                <p class="u-text u-text-5">Key responsibilities</p>
                <ul class="u-custom-list u-text u-text-6">
                  <li>
                    <div class="u-list-icon">
                      <div xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content">–</div>
                    </div>Assisting the Outlet Manager in executing store operations during scheduled shifts.<br>Setting goals for the work group, developing organizational capability, and modelling how work together.<br>Displays a customer come first attitude by training and holding partners accountable for delivering legendary customer service.<br>
                    <br>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="u-accordion-item">
            <a class="u-accordion-link u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-palette-1-light-1 u-radius-14 u-accordion-link-4" id="link-164a" aria-controls="164a" aria-selected="false">
              <span class="u-accordion-link-text">Executive Shift Supervisor</span><span class="u-accordion-link-icon u-icon u-icon-rectangle u-text-white u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-93c0"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-93c0"><path d="M8,10.7L1.6,5.3c-0.4-0.4-1-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3l7.2,6.1c0.1,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l7.1-6
	c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.4-1.3,0L8,10.7z"></path></svg></span>
            </a>
            <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-4" id="164a" aria-labelledby="link-164a">
              <div class="u-container-layout u-container-layout-4">
                <p class="u-text u-text-7">Key responsibilities</p>
                <p class="u-text u-text-8">Acts with integrity, honest and acknowledge that promote the culture, values and mission of Baskin-Robbins.<br>Anticipates customer and store needs by constantly evaluating environment and customer cues. Take appropriate action and provide support to ensure targets are met.<br>Executes store operational policies and procedures, including those for cash handling and safety and security to ensure the safety of all team member during each shift.<br>Follow all cash management and cash register policies and ensure proper cash management practices are followed by shift team.<br>Check bank-in reports of outlets to ensure daily sales takings are banked in on time.<br>Resolve sales and operations issues in an effective and timely manner.<br>Conduct ROR (Review of Operations Risks) on food safety, SOPs, product quality and health risks to ensure compliance to required standards.
                </p>
              </div>
            </div>
          </div>
        </div>
        <p class="u-text u-text-default u-text-9">If interested to join our team,do contact us!<span style="font-weight: 700;"></span>
        </p>
        <a href="Contact.php" class="u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-base u-none u-radius-50 u-text-body-alt-color u-text-hover-palette-3-base u-btn-1"><span class="u-icon u-text-white u-icon-5"><svg class="u-svg-content" viewBox="0 0 490.667 490.667" x="0px" y="0px" style="width: 1em; height: 1em;"><circle cx="245.333" cy="160" r="74.667"></circle><circle cx="394.667" cy="224" r="53.333"></circle><circle cx="97.515" cy="224" r="53.333"></circle><path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667h256    c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"></path><path d="M115.904,300.971c-6.528-1.387-13.163-2.304-19.904-2.304c-52.928,0-96,43.072-96,96c0,5.888,4.779,10.667,10.667,10.667    h76.629c-1.195-3.349-1.963-6.912-1.963-10.667C85.333,359.659,96.768,327.339,115.904,300.971z"></path><path d="M394.667,298.667c-6.741,0-13.376,0.917-19.904,2.304c19.136,26.368,30.571,58.688,30.571,93.696    c0,3.755-0.768,7.317-1.963,10.667H480c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"></path></svg></span>&nbsp;CONTACT
        </a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-315d"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © 2021. All Rights Reserved by Golden Scoop Sdn Bhd (169609-A)<br>A-16-1 Tower A, Northpoint Office, Wilayah Persekutuan, 1, Medan Syed Putra Utara, Mid Valley City, 59200 Kuala Lumpur, Federal Territory of Kuala Lumpur
        </p>
      </div></footer>
    
  
</body></html>