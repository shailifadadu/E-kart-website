<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>products</title>

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
      </div>
    </header>

    <!-- header section ends -->

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

    <!-- category section starts -->
    <section class="category">
      <h1 class="heading">Shop by <span>category</span></h1>

      <div class="box-container">
        <a href="#" class="box">
          <img src="images/cat_img1.png" alt="" />
          <h3>Televisions</h3>
        </a>

        <a href="#" class="box">
          <img src="images/cat_img2.png" alt="" />
          <h3>Smartphones</h3>
        </a>

        <a href="#" class="box">
          <img src="images/cat_img3.png" alt="" />
          <h3>Headphones</h3>
        </a>

        <a href="#" class="box">
          <img src="images/cat_img4.png" alt="" />
          <h3>Smartwatches</h3>
        </a>

        <a href="#" class="box">
          <img src="images/cat_img5.png" alt="" />
          <h3>Games</h3>
        </a>

        <a href="#" class="box">
          <img src="images/cat_img6.png" alt="" />
          <h3>Camera</h3>
        </a>

        <a href="#" class="box">
          <img src="images/cat_img7.png" alt="" />
          <h3>Speakers</h3>
        </a>
      </div>
    </section>
    <!-- category section ends -->

    <!-- products section starts -->
    <section class="products">
      <h1 class="heading">Featured <span>products</span></h1>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/smartphone.jpg" class="main-img" alt="" />
            <img src="images/smartphone-hover.jpg" class="hover-img" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart add-cart cart1"></a>
              <a href="#" class="fas fa-search-plus"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Smartphone</h3>
            <div class="price">₹69,999 <span>₹80,000</span></div>
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
            <img src="images/camera.jpg" class="main-img" alt="" />
            <img src="images/camera-hover.jpg" class="hover-img" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart add-cart cart2"></a>
              <a href="#" class="fas fa-search-plus"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Camera</h3>
            <div class="price">₹2,496 <span>₹4,000</span></div>
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
            <img src="images/television.jpg" class="main-img" alt="" />
            <img src="images/television-hover.jpg" class="hover-img" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart add-cart cart3"></a>
              <a href="#" class="fas fa-search-plus"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Television</h3>
            <div class="price">₹11,999<span>₹20,000</span></div>
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
            <img src="images/speaker.jpg" class="main-img" alt="" />
            <img src="images/speaker-hover.jpg" class="hover-img" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart add-cart cart4"></a>
              <a href="#" class="fas fa-search-plus"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Speaker</h3>
            <div class="price">₹4,999 <span>₹8,000</span></div>
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
            <img src="images/stopwatch.jpg" class="main-img" alt="" />
            <img src="images/stopwatch-hover.jpg" class="hover-img" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart add-cart cart5"></a>
              <a href="#" class="fas fa-search-plus"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Stopwatch</h3>
            <div class="price">₹1,499 <span>₹2,000</span></div>
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
            <img src="images/smartwatch.jpg" class="main-img" alt="" />
            <img src="images/smartwatch-hover.jpg" class="hover-img" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart add-cart cart6"></a>
              <a href="#" class="fas fa-search-plus"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Smartwatch</h3>
            <div class="price">₹2,299 <span>₹5,000</span></div>
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
            <img src="images/headphone.jpg" class="main-img" alt="" />
            <img src="images/headphone-hover.jpg" class="hover-img" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart add-cart cart7"></a>
              <a href="#" class="fas fa-search-plus"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Headphone</h3>
            <div class="price">₹9,990<span>₹12,000</span></div>
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
            <img src="images/smartphone-1.jpg" class="main-img" alt="" />
            <img src="images/smartphone-1-hover.jpg" class="hover-img" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart add-cart cart8"></a>
              <a href="#" class="fas fa-search-plus"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Smartphone</h3>
            <div class="price">₹61,999 <span>₹70,000</span></div>
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
            <img src="images/ipad.jpg" class="main-img" alt="" />
            <img src="images/ipad-hover.jpg" class="hover-img" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-shopping-cart add-cart cart9"></a>
              <a href="#" class="fas fa-search-plus"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>ipad</h3>
            <div class="price">₹55,500 <span>₹75,000</span></div>
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

    <!-- products section starts -->

    <!-- product banner section starts -->
    <section class="product-banner">
      <h1 class="heading"><span>Deal</span> of the day</h1>
      <div class="box-container">
        <div class="box">
          <img src="images/product-banner.jpg" alt="" />
          <div class="content">
            <span>Special offer</span>
            <h3>Upto 50% off</h3>
            <a href="#" class="btn">Shop now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/product-banner-2.jpg" alt="" />
          <div class="content">
            <span>Special offer</span>
            <h3>Upto 50% off</h3>
            <a href="#" class="btn">Shop now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- product banner section ends -->

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
    <script src="cart.js"></script>
  </body>
</html>
