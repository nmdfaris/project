<?php
    //START A SESSION
    session_start();

    include('../server.php');

    $productID = $_REQUEST['productID'];

    $sql_productInformation = "SELECT * FROM product WHERE product_id='$productID'";
    $res_productInformation = mysqli_query($conn, $sql_productInformation);
    $row_productInformation = mysqli_fetch_array($res_productInformation);

    $uid = $submitOut = $productID = "";

    $productID = $_REQUEST['productID'];

    if(isset($_SESSION["member"]) === true){
        //SET USER INFORMATION
        $uid = $_SESSION['uid'];
        
        $sql_userInformation = "SELECT * FROM user WHERE uid='$uid'";
        $res_userInformation = mysqli_query($conn, $sql_userInformation);
        $row_userInformation = mysqli_fetch_array($res_userInformation);

        $username = $row_userInformation['username'];
      
    }else{
        header("location: ../index.php");
        exit;
    }

    //GET PRODUCT INFORMATION;
    $sql_productInformation = "SELECT * FROM product WHERE product_id='$productID'";
    $res_productInformation = mysqli_query($conn, $sql_productInformation);
    $row_productInformation = mysqli_fetch_array($res_productInformation);

    $productName = $row_productInformation['name'];
    $productPrice = $row_productInformation['price'];
    $productPicture = $row_productInformation['picture'];
    $productDescription = $row_productInformation['description'];

    //Ops something wrong quote is normally something wrong in DBMS ya

    if(isset($_POST['submit'])){
      $address = mysqli_real_escape_string($conn, $_POST['address']);
      $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
      $address = addslashes($address);
      $quantity = addslashes($quantity);

      $sql_insert = "INSERT INTO cart (customer_id, product_id, address, quantity) VALUES ('$uid', '$productID', '$address', '$quantity')";
      
      if(mysqli_query($conn, $sql_insert)){
        $submitOut = "New successfully added!";
        header("location: profile.php");

      }else{
        $submitErr = "Ops! Something Wrong!";
      }
  }

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
    <link rel="stylesheet" href="add_cart.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    <style>
      input[type=text], select, input[type=number] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }
    </style>
    
    
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
    
    <section id="main-container-for-add-cart">
    <br><br>
      <div id="add-cart-main-container">
        <div class="add-cart-main-container-top">
            <div class="add-cart-main-container-left">
                <div class="add-cart-image-container">
                  <image id="add-cart-image" src='../resource/product_pic/<?php echo $productPicture; ?>'></image>
                </div>
            </div>

            <div class="add-cart-main-container-right">
              <h3 style="text-align: center;"><?php echo $productName; ?></h3>
              <p style="text-align: center;"><?php echo $productDescription; ?></p>
              <p style="text-align: center;">RM<?php echo $productPrice; ?></p>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div>
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="lname">Quantity</label>
            <input type="number" id="lname" name="quantity" placeholder="Product quantity..">

            <label for="lname">Address</label>
            <input type="text" id="lname" name="address" placeholder="Your address..">
            
            <label for="country">Payment Method</label>
            <select id="country" name="payment">
              <option value="cash">Cash on Delivery</option>
            </select>
            <input type="submit" name="submit" value="Submit">
          </form>
        </div>
      </div>
    </section>
    <br><br>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-315d"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © 2021. All Rights Reserved by Golden Scoop Sdn Bhd (169609-A)<br>A-16-1 Tower A, Northpoint Office, Wilayah Persekutuan, 1, Medan Syed Putra Utara, Mid Valley City, 59200 Kuala Lumpur, Federal Territory of Kuala Lumpur
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>