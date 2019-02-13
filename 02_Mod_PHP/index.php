<!-- <!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Page Title</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G"
      crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/brands.css" integrity="sha384-1KLgFVb/gHrlDGLFPgMbeedi6tQBLcWvyNUN+YKXbD7ZFbjX6BLpMDf0PJ32XJfX"
      crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0"
      crossorigin="anonymous">
   <link href="slick/slick.css" rel="stylesheet">
   <link href="slick/slick-theme.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
</head>

<body>



   <div class="headwrap">

      <header>
         <img src="img/logo.png" srcset="img/logo1x.png 1x, img/logo2x.png 2x, img/logo3x.png 3x" alt="logo">
         <div class="phone">
            <a href="tel:8017241381">801-724-1381</a>
         </div>
      </header>
   </div>


   <div class="navwrap">
      <div class="topnav" id="myTopnav">
         <a href="#" class="active">HOME</a>
         <a href="#">CRUISES</a>
         <a href="#">BOOK</a>
         <div class="dropdown">
            <button class="dropbtn">AGENTS
               <i class="fas fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
               <a href="#">Tom</a>
               <a href="#">Leslie</a>
               <a href="#">Andy</a>
            </div>
         </div>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
         </a>

         <div class="search">
            <input type="search" name="search" id="search" placeholder="Search...">
            <button><i class="fas fa-search fa-2x"></i></button>
         </div>
      </div>
   </div>




   <main> -->


      <?php 
      $title="Home";
      include "_top.php";
      ?>

      <div class="mySlider">
         <picture>
            <source srcset="images/slider01h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider01s.jpg" alt="slider">
         </picture>

         <picture>
            <source srcset="images/slider02h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider02s.jpg" alt="slider">
         </picture>

         <picture>
            <source srcset="images/slider03h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider03s.jpg" alt="slider">
         </picture>

         <picture>
            <source srcset="images/slider04h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider04s.jpg" alt="slider">
         </picture>

         <picture>
            <source srcset="images/slider05h.jpg" media="(min-width: 29.25rem)">
            <img srcset="images/slider05s.jpg" alt="slider">
         </picture>
      </div><!-- end slider -------------------- -->

      <!-- <div class="slider"></div> -->

      <h2 id="blog">Recent Blog Articles</h2>
      <div class="articles">

         <div class="art1">
            <a href="#">
               <div class="titleOverlay">
                  <h2>The Pinapple</h2>
               </div>
               <div class="publishDate">
                  <p>April, 1 2018</p>
               </div>
            </a>
         </div>

         <div class="art2">
            <a href="#">
               <div class="titleOverlay">
                  <h2>How to Relax</h2>
               </div>
               <div class="publishDate">
                  <p>April, 2 2018</p>
               </div>
            </a>
         </div>

         <div class="art3">
            <a href="#">
               <div class="titleOverlay">
                  <h2>Best Beach Resorts</h2>
               </div>
               <div class="publishDate">
                  <p>April, 3 2018</p>
               </div>
            </a>
         </div>

         <div class="art4">
            <a href="#">
               <div class="titleOverlay">
                  <h2>Pool Hacks</h2>
               </div>
               <div class="publishDate">
                  <p>April, 4 2018</p>
               </div>
            </a>
         </div>

      </div>
      
      <?php
       include "_bot.php"
      ?>

   <!-- </main>

   <div class="footer">
      <footer>
         <div class="info">
            <div class="contact">
               <h2>Contact Us</h2>
               <a href="https://goo.gl/maps/mk7e7VAjnpw">
               <p>CABOT CRUIZES</p>
               <p>2907 Santa Monica Blvd,</p>
               <p>Santa Monica, CA 90404</p>
               </a>

               <br>
               <h2>Phone:</h2>
               <p>1-800-555-1234</p>

               <br>

               <h2>Hours of Operation:</h2>
               <p>Monday - Friday 9am - 4pm</p>
            </div>

            <div class="newsletter">
               <h2>News Letter</h2>
               <p>Subscribe to our email list and stay up-to-date with our hottest offers and latest specials.</p>

               <div class="subscribe">
                  <input type="email" name="" id="subscribeEmail" required>
                  <button type="submit">Subscribe</button>
               </div>
            </div>


            <div class="why">
               <h2>Why Cabot Cruises?</h2>
               <p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.
                  We can help
                  you with all inclusive vacations including discounted cruises.</p>
               <br>
               <p>We do not sell travel to residents of Deleware, Iowa, Florida, Hawaii and Washington state
                  because those
                  states are just wierd. If you are a resident of one of these states, call your congressman and
                  tell them to
                  change the regulations. </p>
            </div>

         </div>
      </footer>
   </div>
   <div class="copyright">
      <div class="social">
         <i class="fab fa-facebook-square fa-3x"></i>
         <i class="fab fa-instagram fa-3x"></i>
         <i class="fab fa-pinterest fa-3x"></i>
         <i class="fab fa-twitter-square fa-3x"></i>
         <i class="fab fa-youtube-square fa-3x"></i>
      </div>
      <p>&copy; 2019 Manuel Espinoza</p>
   </div>








   <script src="slick/jquery-3.3.1.js"></script>
   <script src="slick/slick.min.js"></script>
   <script>
      $(document).ready(function () {
         $('.mySlider').slick({
            autoplay: true,
            dots: true,
            arrows: false,
            cssEase: 'ease-out',
            speed: 2000,
            autoplaySpeed: 8000
         });
      });
   </script>
   <script src="js/company.js" type="application/ld+json">
   </script>
   <script src="js/menuToggle.js"></script>
</body>

</html> -->