<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Contact-Us KIRCT Kilimanjaro Hospital </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="contact.php">
            <span>
              KIRCT KILIMANJARO HOSPITAL
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                 <div class="dropdown show">
              <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  About Us
                </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="about.php">About Us</a>
             <a class="dropdown-item" href="manangement.php">Manangement</a>
             <a class="dropdown-item" href="gallery.php">Image Gallery</a>
            </div>
          </div>
              </li>
              <li class="nav-item">
               <div class="dropdown show">
              <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  Services
                </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="outpatient.php">Out Patient</a>
             <a class="dropdown-item" href="diagnostics.php">Diagnostics</a>
             <a class="dropdown-item" href="surgery.php">Surgery</a>
             <a class="dropdown-item" href="pharmacy.php">Pharmacy</a>
             <a class="dropdown-item" href="dialysis.php">Dialysis</a>
             <a class="dropdown-item" href="sleep.php">Sleep Clinic</a>
             <a class="dropdown-item" href="infertility.php"> Infertility</a>
             </div>
            </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="doctors.php">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php"><span class="sr-only">(current)</span> Contact Us</a>
              </li>
            
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">

          <?php 
          $Msg = "";
          if (isset($_GET['error'])) 
          {
            $Msg = "Please Fill in the Blank Field!";
            echo '<div class="alert alert-danger">'.$Msg.'</div>';
          }

          if (isset($_GET['success'])) 
          {
            $Msg = "You Message Has Been Sent!";
            echo '<div class="alert alert-success">'.$Msg.'</div>';
          }
         ?>
         
          <div class="form_container contact-form">
            <form action="process.php" method="post">
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input type="text" name="fname" placeholder="Your Full Name" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <input type="text" name="phone" placeholder="Phone Number" />
                  </div>
                </div>
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" />
              </div>
              <div>
                  <input type="text" name="subject" placeholder="Subject" />
                  </div>
              <div>
                <input type="text" name="msg" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button name="btn-send">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3905.015451894182!2d8.592865774530484!3d11.834191538794407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11ac2fea61b58c85%3A0x8b14d0c0723c2d15!2sKirct%20Kilimanjaro%20Hospital!5e0!3m2!1sen!2sng!4v1707735992711!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="https://maps.app.goo.gl/bZY4asapqWN4bjmv5">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="tel: +234-9036264188">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +234-9036264188
                </span>
              </a>
              <a href="mailto: kirctkilimanjarohospital@gmail.com">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  kirctkilimanjarohospital@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="https://www.facebook.com/profile.php?id=61553794686047">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/KirctHospital">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.youtube.com/@KKHospital1">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/kirctkilimanjarohospital">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              KIRCT Kilimanjaro Hospital is a private hospital located at the Kano Independent Research Centre Trust (KIRCT) in Kano, Nigeria. 
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="index.php">
                Home
              </a>
              <a class="" href="about.php">
                About Us
              </a>
              <a class="" href="departments.php">
                Our Services
              </a>
              <a class="" href="doctors.php">
                Doctors
              </a>
              <a class="" href="contact.php">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 footer_col ">
         <img src="images/kklogo.png" alt="" height="200" width="200">
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Kirct kilimanjaro Hospital<br><br></a>
            &copy; <span id="displayYear"></span> Govern By
            <a href="https://kirct.com/">KIRCT</a>
        </p>
       
      </div>  
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>