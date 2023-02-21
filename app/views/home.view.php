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
            <li><a href="<?=ROOT?>">Home</a></li>
            <li><a href="<?=ROOT?>/Services">Services</a></li>
            <li><a href="<?=ROOT?>/About">About</a></li>
            <!-- <li><a href="/Blog">Blog</a></li>
            <li><a href="/Gallery">Gallery</a></li>
            <li><a href="/Contact">Contact</a></li> -->
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
            <li><a href="">Services</a></li>
            <li><a href="">About</a></li>
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
            <span class="designation">The gateway to all online services for the Lycean community.</span>
            <!-- <span class="designation">A directory of online applications and services for the Lycean community.</span> -->

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
              <div class="img-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- SERVICES SECTION start -->
      <br><br><br>

      <section class="mh-services" id="mh-services">
        <div class="container">
          <div class="row">
            <div class="section-title col-md-12">
              <h3>Online Services</h3>
            </div>
            <!-- <br><br><br><br><br> -->
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
                    <span>ARC Online Resources</span>
                  </li>
                </ul>
              </div>

              <div class="mh-service-gallery col-sm-12" id="service-gallery">
                <div class="serviceContainer row" >

                  <div class="col-md-4 student">
                    <a href="https://aims.lpu.edu.ph/lpumnl/students/" target="_blank" >
                      <div class="single-service">
                        <i class="fa fa-user-ninja"></i><br>
                        <h2>AIMS Student Portal</h2>
                        <p><strong style="font-weight:regular;">Student Access Module</strong><br>This module is exclusively for students only</p>
                      </div>
                    </a>
                  </div>
                  <!-- <?php foreach ($services as $service):?>
                    <div class="col-md-4 parent">
                      <div class="single-service">
                        <i class="fa fa-laptop"></i>
                        <h2><?=$service->name?></h2><br>
                        <p><?=$service->description?></p>
                      </div>
                    </div>
                  <?php endforeach;?> -->
                  <div class="col-md-4 parent">
                    <div class="single-service">
                      <i class="fa fa-user-group"></i><br>
                      <h2>AIMS Parent Portal</h2>
                      <p>Parent Module</p>
                    </div>
                  </div>
                  <div class="col-md-4 faculty">
                    <div class="single-service">
                      <i class="fa fa-chalkboard-user"></i><br>
                      <h2>AIMS Faculty Portal</h2>
                      <p>Faculty Management Module</p>
                    </div>
                  </div>
                  <div class="col-md-4 student">
                    <div class="single-service">
                      <i class="fa fa-laptop"></i><br>
                      <h2>myLPU e-Learning Portal</h2>
                      <p>Provides powerful tools to deliver engaging contents and activities for online learning.</p>
                    </div>
                  </div>
                  <div class="col-md-4 student faculty admin alumni">
                    <div class="single-service">
                      <i class="fa fa-laptop"></i><br>
                      <h2>Campus Mail</h2>
                      <p>Microsoft 365 account login</p>
                    </div>
                  </div>
                  <div class="col-md-4 faculty admin">
                    <div class="single-service">
                      <i class="fa fa-laptop"></i><br>
                      <h2>Employee Portal</h2>
                      <p>P&A Grant Thornton</p>
                    </div>
                  </div>
                  <div class="col-md-4 library">
                    <div class="single-service">
                      <img src="<?=ROOT?>/assets/images/follett.png" alt="image-logo"><br>
                      <h2>Online Public Access Catalog</h2>
                      <p>Search for over 70,000 books, 5,000 CDs/DVDs, 1,000 periodical articles, 200 graduate theses and 600 eBooks within the library’s collection. </p>
                    </div>
                  </div>
                  <div class="col-md-4 library">
                    <div class="single-service">
                      <img src="<?=ROOT?>/assets/images/science-direct.png" alt="image-logo"><br>
                      <h2>ScienceDirect </h2>
                      <p>Multi-disciplinary full-text scientific database offering journal articles and book chapters from nearly 2,500 journals and more than 30,000 book chapters.</p>
                    </div>
                  </div>
                  <div class="col-md-4 library">
                    <div class="single-service">
                      <img src="<?=ROOT?>/assets/images/emerald.jpeg" alt="image-logo"><br>
                      <h2>Emerald Insight</h2>
                      <p>Dedicated research platform for Emerald publications in Marketing; Public Policy and Environmental Management; and Tourism and Hospitality. </p>
                    </div>
                  </div>
                  <div class="col-md-4 library">
                    <div class="single-service">
                    <img src="<?=ROOT?>/assets/images/gale.png" alt="image-logo"><br>
                      <h2>Gale Academic One File</h2>
                      <p><strong>Academic OneFile</strong> has millions of peer-reviewed full-text multidisciplinary content in PDF and HTML.</p><br>
                      <p><strong>Gale eBooks</strong> has encyclopedias and specialized reference sources for multidisciplinary research. </p>
                    </div>
                  </div>
                  <div class="col-md-4 library">
                    <div class="single-service">
                      <img src="<?=ROOT?>/assets/images/mendeley.png" alt="image-logo"><br>
                      <h2>Mendeley</h2>
                      <p>A reference management tool that is used to manage citations (i.e. books, articles, and many more) which can be uploaded to the program and imported onto a Word document. </p>
                    </div>
                  </div>
                  <div class="col-md-4 library">
                    <div class="single-service">
                    <img src="<?=ROOT?>/assets/images/Scopus.png" alt="image-logo"><br>
                      <h2>Scopus</h2>
                      <p>The largest abstract and citation database of peer-reviewed literature: scientific journals, books and conference proceedings. </p>
                    </div>
                  </div>
                  <div class="col-md-4 library">
                    <div class="single-service">
                      <i class="fa fa-laptop"></i><br>
                      <h2>AORA</h2>
                      <p><strong>Ask Online Reference Assistance</strong> Students may ask our virtual librarians their concerns about but not limited to library services, collection, and operations.  </p>
                    </div>
                  </div>
                  <div class="col-md-4 library">
                    <div class="single-service">
                      <i class="fa fa-laptop"></i><br>
                      <h2>Thesis and Research Assistance</h2>
                      <p>Have concerns regarding your thesis? Need to access our databases? How to use them? APA citation? Additional resources? Our communication channels are always open for your concerns! Simply leave us a message and your librarians will serve. </p>
                    </div>
                  </div>
                  <div class="col-md-4 library">
                    <div class="single-service">
                      <i class="fa fa-laptop"></i><br>
                      <h2>Virtual Help Desk</h2>
                      <p>Need advise with your assignments, projects, lessons? No problem!  Students get the privilege of inviting a librarian to their study session via virtual communication channels. We will do our utmost to aid you in your needs. </p>
                    </div>
                  </div>
                </div>
              </div>

              

              <!-- <div class="mh-service-gallery col-sm-12" id="service-gallery">
                <div class="serviceContainer row" >
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
              </div> -->
            </div>
          </div>
        </div>
      </section>







  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

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
        if (sc > 150) {
          $(".header").addClass("sticky");
        } else {
          $(".header").removeClass("sticky");
        }
      });

      $(window).on("load", function(){
        var $container = $('.serviceContainer');
        $container.isotope({
          filter: '*',
          animationOptions: {
            queue: true
          }
        });

        $('.services-nav li').click(function(){
          $('.services-nav .current').removeClass('current');
          $(this).addClass('current');
          var selector = $(this).attr('data-filter');
          $container.isotope({
            filter: selector,
            animationOptions: {
              queue: true
            }
          });
          return false;
        });

      });

      $('#service-item').mixItUp();

    });
  </script>
</body>
</html>