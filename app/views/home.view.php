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
                  <li data-sort="random" data-filter="*" class="current">
                    <span>All Categories</span>
                  </li>
                  <?php foreach ($data['category'] as $c): ?>
                    <li data-filter=".<?= $c->Category ?>">
                      <span>
                        <?php if(ucfirst($c->Category) == 'Library') {
                          echo "ARC Online Resources";
                        } 
                          echo ucfirst($c->Category);
                        ?>
                      </span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <div class="mh-service-gallery col-sm-12" id="service-gallery">
                <div class="serviceContainer row" >

                <?php foreach ($data['services'] as $s) :?>
                  <div data-order="1" class="service-item col-md-4 <?= implode(" ", $s['categories']) ?>" id="service-item">
                    <a href="<?=$s['url']?>" target="_blank" >
                      <div class="single-service">
                        <?php if(!empty($s['image'])) {
                           echo "<img src='" . ROOT . "/assets" . "/" . $s['image'] . "' alt='service-logo'><br>";
                         } else 
                         echo "<i class='fa fa-laptop'></i>";
                        ?>
                        <h2><?=$s['title']?></h2>
                        <p><?= $s['description'] ?></p><br>
                        <div class="tags" id="tags"><p>
                          <i class="fa fa-tags" style="font-size:12px;"> <span><?= ucfirst(implode(" ", array_map('ucfirst',$s['categories']))) ?></span></i>
                        </p></div>
                      </div>
                    </a>
                  </div>

                <?php endforeach; ?>

            </div>
          </div>
        </div>
      </section>

  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

  <script type="text/javascript">
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

      // on('load') --> slow, buggy, sometimes work, most of the time not
      // $(window).on('load', function(){
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

      // });

      
    });
  </script>
</body>
</html>