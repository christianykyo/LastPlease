<?php
include '../sweett/proses-login.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>You're &mdash; Sweet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">S w e e t</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#flavor-section" class="nav-link">Flavor</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <?php
                                    if(isset($_SESSION['logged']))
                                    {
                                        echo '<li><a href="http://localhost/sweet/sweett/logout.php" class="nav-link">Log Out</a></li>';
                                    }
                                    ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('images/Gelato 1.png');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Welcome to Sweet !</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">If u have a bad day, just eat an ice cream. Then your bad day will dissapear. And I can see your beautiful smile again.</p>
                </div>
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  
                  <?php
                                if(isset($_SESSION['logged']))
                                {
                                    echo '<a style="color:#c8a684";></a>';
                                } else {
                                  ?>
                                  <form action="proses-login.php" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">L O G I N</h3>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" class="btn btn-primary btn-pill" value="Login">
                    </div>
                  </form>
                                
                <?php
                }
                                ?>

                </div>
                <?php
                                
                                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    
    <div class="site-section courses-title" id="flavor-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Flavor</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="images/1. Caramel.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rp 20.000,00</span>
                <h3><a href="http://localhost/sweet/buy/index.php">Caramel</a></h3>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="images/2. Vanilla.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rp 18.000,00</span>
                <h3><a href="http://localhost/sweet/buy/index.php">Vanilla</a></h3>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="images/3. Coklat.png" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rp 18.000,00</span>
                <h3><a href="http://localhost/sweet/buy/index.php">Chocolate</a></h3>
              </div>
            </div>



            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="images/4. Blueberry.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rp 21.000,00</span>
                <h3><a href="http://localhost/sweet/buy/index.php">Blueberry</a></h3>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="images/5. Strawberry.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rp 21.000,00</span>
                <h3><a href="http://localhost/sweet/buy/index.php">Strawberry</a></h3>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href=""><img src="images/6. Coffee.jpeg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">Rp 20.000,00</span>
                <h3><a href="http://localhost/sweet/buy/index.php">Coffee</a></h3>
              </div>
            </div>

          </div>

         

        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">About Us</h2>
            <p>Hanya cafe ice cream kecil di pinggir jalan raya besar, cocok untuk menaikkan mood kalian yang sedang rusak. Menyediakan varian rasa ice cream yang manis, untuk membuat mood kalian kembali. Cocok untuk tempat kencan atau berkumpul dengan keluarga dan sahabat.</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/Place 1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">P L A C E</h2>
            <p class="mb-4">Tempat yang nyaman untuk bersantai dan melepas lelah.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon"></span></span>
              <div><h3 class="m-0">Jl. Raya Sawahan Pojok-Garum</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon"></span></span>
              <div><h3 class="m-0">Kabupaten Blitar</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/Place 2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">E V E N T S</h2>
            <p class="mb-4">Kegiatan atau acara yang selalu kami adakan untuk menghibur kalian.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon"></span></span>
              <div><h3 class="m-0">Saturday Night Live Acoustic</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon"></span></span>
              <div><h3 class="m-0">Monday Night Live Band</h3></div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="site-section" id="contact-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Contact Us</h2>
            <p class="mb-5">It's easy to find us.</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/Ig.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Instagram</h3>
                <p>Kami akan mengupdate menu baru dan memposting event-event yang akan kami laksanakan di Instagram.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/Twt.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Twitter</h3>
                <p>Kalian bisa memesan online lewat DM Twitter kami.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/Yt.png" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">YouTube</h3>
                <p>Kami akan berbagi tips-tips dan sedikit resep di Channel YouTube kami.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Sweet</h3>
            <p>Hanya cafe ice cream kecil di pinggir jalan raya besar, cocok untuk menaikkan mood kalian yang sedang rusak. Menyediakan varian rasa ice cream yang manis, untuk membuat mood kalian kembali. Cocok untuk tempat kencan atau berkumpul dengan keluarga dan sahabat.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Social Media</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="https://www.instagram.com/min__moiing/" target="_blank">Instagram</a></li>
              <li><a href="https://www.youtube.com/channel/UC9rMiEjNaCSsebs31MRDCRA" target="_blank">YouTube</a></li>
              <li><a href="https://twitter.com/BTS_twt" target="_blank">Twitter</a></li>
            </ul>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made <i class="icon-heart" aria-hidden="true"></i> by <a href="#home-section">Sweet</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>