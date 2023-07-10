<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact</title>

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

    <!-- contact info section starts -->
    <section class="info-container">
      <div class="box-container">
        <div class="box">
          <i class="fas fa-map"></i>
          <h3>Address</h3>
          <p>Gujarat, India - 400104</p>
        </div>

        <div class="box">
          <i class="fas fa-envelope"></i>
          <h3>Email</h3>
          <p>shailifadadu@gmail.com</p>
          <p>chaudharymadhavi184@gmail.com</p>
        </div>

        <div class="box">
          <i class="fas fa-phone"></i>
          <h3>Number</h3>
          <p>8320465868</p>
          <p>9328025270</p>
        </div>
      </div>
    </section>
    <!-- contact info section ends -->

    <!-- contact section starts -->
    <section class="contact">
      <form action="">
        <h3>Get in touch</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores
          fugiat temporibus voluptatem cumque totam excepturi esse eligendi, sit
          molestias nisi?
        </p>
        <div class="inputBox">
          <input type="text" placeholder="your name" />
          <input type="email" placeholder="your email" />
        </div>

        <div class="inputBox">
          <input type="number" placeholder="your number" />
          <input type="text" placeholder="subject" />
        </div>
        <textarea
          name=""
          placeholder="your message"
          id=""
          cols="30"
          rows="10"
        ></textarea>
        <input type="submit" value="send message" class="btn" />
      </form>

      <!-- google map -->
      <iframe
        class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.2902194147073!2d72.8776237749799!3d22.680237679415153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e5adf2c171355%3A0xe1e974ce083657fb!2sDHARMSINH%20DESAI%20UNIVERSITY!5e0!3m2!1sen!2sin!4v1681459923806!5m2!1sen!2sin"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>
    <!-- contact section starts -->

    <!-- newsletter section starts -->
    <section class="newsletter">
      <div class="content">
        <h3>Newsletter</h3>
        <p>Subscribe for weekly newsletter</p>
      </div>

      <form action="">
        <input
          type="email"
          name=""
          placeholder="Enter your Email"
          id=""
          class="email"
        />
        <input type="submit" value="Subscribe" class="btn" />
      </form>
    </section>
    <!-- newsletter section ends -->

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
