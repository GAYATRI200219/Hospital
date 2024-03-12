<?php
include('hospital_function.php');
session_start(); 
?>
<!-- slider  -->
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="icon" href="avengers.png">

  <link rel="stylesheet" href="assects/css/normalize.css">
  <link rel="stylesheet" href="assects/css/medinova.css">
  <link rel="stylesheet" href="assects/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assects/bootstrap/css/bootstrap-grid.min.css">
   <link rel="stylesheet" href="assects/font-awesome-4.7.0/css/font-awesome.min.css">

<!-- owl carousel link -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="manifest" href="site.webmanifest">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
</head>
<body>
  <header>
  <!--1st header part-->
<div class="accordion c" id="accordionExample">
        <button class="btn  btn-block text-center text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          For more details on Covid 19 Vaccination/Consultation/Treatment click here.<i class="fa fa-arrow-down" aria-hidden="true"></i> 
        </button>
    </div>
<form action="header_form_action.php" method="post">
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="container">
      <div class="form-row">
    <div class="col-md-3 mb-3">
      <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value=""  name="fastname">
    </div>
    <div class="col-md-3 mb-3">
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="" name="lastname">
    </div>
    <div class="col-md-3 mb-3">
      <div class="input-group">
        <input type="email" class="form-control" id="validationTooltipUsername" placeholder="Useremail" aria-describedby="validationTooltipUsernamePrepend" name="useremail">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <button name="submit" type="submit" class="book-an" value="submit">
Submit Now <span style="vertical-align: middle;float: right; padding-right:7px;"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
     </button>   
   </div>    
</div>

          </div>
    </div>
  </div>
</form>
   <!--3rd  header part-->
  <div class="container-fluid " id="myHeader">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  p-0">
      <div class="container  ">
        <a href="#" class="navbar-brand top-logo">
              <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-hospital-o" aria-hidden="true"></i>Medinova</h1>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> 
        </button>

        <div  class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="mx-auto text-primary"></div>
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a href="#" class="nav-link active_menu">Home</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link ">About</a>
              </li>
              <li class="nav-item">
                <a href="service.php" class="nav-link ">Services</a>
              </li>
              <li class="nav-item">
                <a href="pricing.php" class="nav-link ">Packages</a>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                  <span><i class="fa fa-caret-down"></i></span>
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                  <a class="dropdown-item " href="blog.php">Blog Grid</a>
                  <a class="dropdown-item" href="booking.html">Blog Detail</a>
                  <a class="dropdown-item" href="apporent.php">Apporment</a>
                  <a class="dropdown-item" href="testimonial.html">Our Doctor</a>
                  <a class="dropdown-item" href="404_page.html"></a>
                </div>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link ">Contact Us</a>
              </li>
              <?php
              if(!isset($_SESSION['username']))
              {
               ?> 
              <li class="nav-item">
                <a href="user_login.php" class="nav-link ">Login</a>
              </li>
              <?php
              }
              else
              {
                ?>
                  <li class="nav-item dropdown ">
                <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $_SESSION['username']; ?>
                  <span><i class="fa fa-caret-down"></i></span>
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                  <a class="dropdown-item " href="#">profile</a>
                  <a class="dropdown-item" href="#">password change</a>
                  <a class="dropdown-item" href="user_logout.php">logout</a>
                  
                </div>
              </li>
              <?php
            }
            ?>
             




              <?php
              if(!isset($_SESSION['username']))
              {
               ?> 
              <li class="nav-item">
                <a href="registration.php" class="nav-link btn btn-primary rounded-pill px-4 font-weight-bold">register</a>
              </li>
              
              <?php
            }
              ?>

            </ul>
           

          </div>
      </div>
     
    </nav>
  </div>
 
</header>