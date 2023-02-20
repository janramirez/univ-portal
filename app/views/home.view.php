<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPU Manila - <?=$title?></title>

  <!-------------- GOOGLE FONTS LINKS --------------------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

  <!-------------- FONTAWESOME CDN LINKS --------------------->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  

  <!-------------- BOOTSTRAP CDN LINKS --------------------->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

  <!-------------- .STYLE.CSS LINKS --------------------->
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/home.style.css">

</head>
<body>

  <!-- NAVIGATION start -->
  <main class="main">
    <header class="header">
      <div class="wrap d-flex">
        <h1 class="logo">
          <a href=""><img src="<?=ROOT?>/assets/images/logo.png" alt=""></a>
        </h1>
        <nav class="menu">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/About">About</a></li>
            <li><a href="/">Services</a></li>
            <li><a href="/Blog">Blog</a></li>
            <li><a href="/Gallery">Gallery</a></li>
            <li><a href="/Contact">Contact</a></li>
          </ul>
        </nav>
      </div>
      <a href="javascript:void(0);" class="sidemenu-toggler">
        <span></span>
        <span></span>
        <span></span>
      </a>
      <div class="sidemenu">
        <a href="javascript:void(0);" class="close"></a>
        <nav>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </nav>
        <footer>
          <div class="social">
            <a href=""><img src="<?=ROOT?>/assets/images/facebook_16x16.png" alt=""></a>
            <a href=""><img src="<?=ROOT?>/assets/images/instagram_16x16.png" alt=""></a>
            <a href=""><img src="<?=ROOT?>/assets/images/twitter_16x16.png" alt=""></a>
            <a href=""><img src="<?=ROOT?>/assets/images/youtube_16x16.png" alt=""></a>
          </div>
          <p>2023-2024 Manila, Lyceum of the Philippines University</p>
          <p>Made by the ICT Applications Development Team</p>
        </footer>
      </div>
    </header>
  </main>

    <!-- HERO SECTION start -->
    <br><br><br><br><br>

    <section class="home container text-white">
      <div class="row">
        <div class="col-md-6">
          <div class="hero-text">
            <span class="title">Ahoy, Lyceans! Welcome to </span><br>
            <span class="name"><strong>The PORT</strong></span><br>
            <span class="designation">A directory of online applications and services for the Lycean community.</span>

            <div class="social-icons d-flex">
              <li><i class="fa-brands fa-facebook"></i></li>
              <li><i class="fa-brands fa-instagram"></i></li>
              <li><i class="fa-brands fa-twitter"></i></li>
              <li><i class="fa-brands fa-youtube"></i></li>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="hero-img">
            <div class="img-border">
              <img src="<?=ROOT?>/assets/images/headerimg.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- SERVICES SECTION start -->
      <br><br><br><br><br><br>

      <section class="mh-services" id="mh-services">
        <div class="container">
          <div class="row">
            <div class="section-title col-sm-12">
              <h3>Online Services</h3>
            </div>
            <br><br><br><br><br>
            <div class="part col-sm-12">
              <div class="services-nav col-sm-12" id="filter-button">
                <ul>
                  <li data-filter="*" class="current">
                    <span>All Categories</span>
                  </li>
                  <li data-filter=".student">
                    <span>Student</span>
                  </li>
                  <li data-filter=".alumni">
                    <span>Alumni</span>
                  </li>
                  <li data-filter=".parent">
                    <span>Parent</span>
                  </li>
                  <li data-filter=".faculty">
                    <span>Faculty</span>
                  </li>
                  <li data-filter=".admin">
                    <span>Admin Staff</span>
                  </li>
                  <li data-filter=".library">
                    <span>Library</span>
                  </li>
                </ul>
              </div>

              <div class="mh-service-gallery col-sm-12" id="service-gallery">
                <div class="serviceContainer row">
                  <div class="grid-item col-md-4 student">
                    <figure>
                      <img src="<?=ROOT?>/assets/images/aims.png" alt="">
                      <figcaption class="fig-caption">
                        <i class="fas fa-search"></i>
                        <h5 class="name">AIMS Portal</h5>
                        <span class="sub-title">Student Portal</span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="grid-item col-md-4 library student">
                    <figure>
                      <img src="<?=ROOT?>/assets/images/aims.png" alt="">
                      <figcaption class="fig-caption">
                        <i class="fas fa-search"></i>
                        <h5 class="name">Library</h5>
                        <span class="sub-title">Library Services</span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="grid-item col-md-4 faculty admin">
                    <figure>
                      <img src="<?=ROOT?>/assets/images/aims.png" alt="">
                      <figcaption class="fig-caption">
                        <i class="fas fa-search"></i>
                        <h5 class="name">Dorado</h5>
                        <span class="sub-title">Payroll Account</span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="grid-item col-md-4 faculty admin student">
                    <figure>
                      <img src="<?=ROOT?>/assets/images/website.png" alt="">
                      <figcaption class="fig-caption">
                        <i class="fas fa-search"></i>
                        <h5 class="name">M365 Campus Mail</h5>
                        <span class="sub-title">Microsoft365 Account</span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="grid-item col-md-4 alumni student">
                    <figure>
                      <img src="<?=ROOT?>/assets/images/bgleftbottom.png" alt="">
                      <figcaption class="fig-caption">
                        <i class="fas fa-search"></i>
                        <h5 class="name">Alumni Portal</h5>
                        <span class="sub-title">Alumni services</span>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="grid-item col-md-4 student">
                    <figure>
                      <img src="<?=ROOT?>/assets/images/bg2.jpg" alt="">
                      <figcaption class="fig-caption">
                        <i class="fas fa-search"></i>
                        <h5 class="name">Parents Portal</h5>
                        <span class="sub-title">Parents Services Portal</span>
                      </figcaption>
                    </figure>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>







  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>

  <script>
    $(document).ready(function(){
      $(".sidemenu-toggler").click(function(){
        $(".sidemenu").addClass("active");
      });

      $(".close").click(function(){
        $(".sidemenu").removeClass("active");
      });

      $(window).scroll(function(){
        var sc = $(window).scrollTop();
        if (sc > 120) {
          $(".header").addClass("sticky");
        } else {
          $(".header").removeClass("sticky");
        }
      });
    })
  </script>
</body>
</html>