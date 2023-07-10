<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- swiper css link -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- cusom css file link -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="cart.css">
  </head>
  <body>
    <!-- header section starts -->

    <header class="header">
      <a href="home.php" class="logo"><i class="fas fa-store"></i>E-kart</a>

      <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box" class="fas fa-search"></label>
      </form>

      <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="login.php" class="fas fa-user"></a>
        <a href="#" class="fas fa-heart"></a>
       <a href="cart.php" class="fas fa-shopping-cart cart"><span>0</span></a> 
    </header>

    <!-- header section ends -->

    <!-- cart.js file linkikng -->
    <script src="cart.js"></script>

    <!-- side-bar section starts -->

    <div class="side-bar">
      <div id="close-side-bar" class="fas fa-times"></div>

      <div class="user">
        <img src="images/user-img.jpg" alt="" />
        <h3>XYZ</h3>
        <a href="#">log out</a>
      </div>

      <nav class="navbar">
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="products.php"><i class="fas fa-angle-right"></i>products</a>
        <a href="contact.php"><i class="fas fa-angle-right"></i>contact</a>
        <a href="login.php"><i class="fas fa-angle-right"></i>login</a>
        <a href="register.php"><i class="fas fa-angle-right"></i>register</a>
        <a href="cart.php"><i class="fas fa-angle-right"></i>cart</a>
      </nav>
    </div>

    <!--side-bar section ends -->

    <!-- home section starts -->

    <section class="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/home-img-1.jpg" alt="" />
            </div>
            <div class="content">
              <span>upto 50% off</span>
              <h3>smartphones</h3>
              <a href="#" class="btn">shop now</a>
            </div>
          </div>

          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/home-img-2.jpg" alt="" />
            </div>
            <div class="content">
              <span>upto 50% off</span>
              <h3>smartwatch</h3>
              <a href="#" class="btn">shop now</a>
            </div>
          </div>

          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/home-img-3.jpg" alt="" />
            </div>
            <div class="content">
              <span>upto 50% off</span>
              <h3>headphones</h3>
              <a href="#" class="btn">shop now</a>
            </div>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!-- home section ends -->

    <!-- banner section starts -->
    <section class="banner">
      <div class="box-container">
        <a href="#" class="box">
          <img src="images/banner-1.jpg" alt="" />
          <div class="content">
            <span>special offers</span>
            <h3>upto 50% off</h3>
          </div>
        </a>

        <a href="#" class="box">
          <img src="images/banner-2.jpg" alt="" />
          <div class="content">
            <span>special offers</span>
            <h3>upto 50% off</h3>
          </div>
        </a>

        <a href="#" class="box">
          <img src="images/banner-3.jpg" alt="" />
          <div class="content">
            <span>special offers</span>
            <h3>upto 50% off</h3>
          </div>
        </a>
      </div>
    </section>
    <!-- banner section ends -->

    <!-- arrivals section starts -->

    <section class="arrivals">
      <h1 class="heading">new <span>arrivals</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/arrival-1.jpg" class="main-img" alt="" />
            <img src="images/arrival-1-hover.jpg" class="hover-img" alt="" />
          </div>
          <div class="content">
            <h3>HD Television</h3>
            <div class="price">₹50,000 <span>₹62,000</span></div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/arrival-2.jpg" class="main-img" alt="" />
            <img src="images/arrival-2-hover.jpg" class="hover-img" alt="" />
          </div>
          <div class="content">
            <h3>hp laptop</h3>
            <div class="price">₹55,000 <span>₹60,599</span></div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/arrival-3.jpg" class="main-img" alt="" />
            <img src="images/arrival-3-hover.jpg" class="hover-img" alt="" />
          </div>
          <div class="content">
            <h3>new smartphone</h3>
            <div class="price">₹25,000<span>₹32,500</span></div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/arrival-4.jpg" class="main-img" alt="" />
            <img src="images/arrival-4-hover.jpg" class="hover-img" alt="" />
          </div>
          <div class="content">
            <h3>new printer</h3>
            <div class="price">₹17,000<span>₹20,000</span></div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/arrival-5.jpg" class="main-img" alt="" />
            <img src="images/arrival-5-hover.jpg" class="hover-img" alt="" />
          </div>
          <div class="content">
            <h3>new headphones</h3>
            <div class="price">₹1,500<span>₹3,999</span></div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/arrival-6.jpg" class="main-img" alt="" />
            <img src="images/arrival-6-hover.jpg" class="hover-img" alt="" />
          </div>
          <div class="content">
            <h3>new speakers</h3>
            <div class="price">₹1,999<span>₹3,999</span></div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- arrivals section ends -->

    <!-- footer section starts -->

    <section class="quick-links">
      <a href="home.php" class="logo"><i class="fas fa-store"></i>E-kart</a>
      <div class="links">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="products.php">products</a>
        <a href="contact.php">contact</a>
        <a href="login.php">login</a>
        <a href="register.php">register</a>
        <a href="cart.php">cart</a>
      </div>

      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
      </div>
    </section>

    <section class="credit">
      <p>created by <span>web designer</span> | all rights reserved!</p>

      <img src="images/card_image.png" alt="" />
    </section>

    <!-- footer section ends -->

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>
  </body>
</html>
