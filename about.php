<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>about</title>

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

    <!-- about section starts -->
    <section class="about">
      <div class="image">
        <img src="images/about-img.png" alt="" />
      </div>
      <div class="content">
        <h3>Our Story</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores
          cupiditate repudiandae id sapiente enim nihil velit, at nulla sit
          tempora eum quidem officia possimus dicta unde! Repellat saepe
          voluptatibus pariatur.
        </p>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus,
          molestias hic culpa inventore totam aperiam! Optio magni ratione
          perspiciatis esse?
        </p>
        <a href="#" class="btn">read more</a>
      </div>
    </section>
    <!-- about section ends -->

    <!-- faq section starts -->
    <section class="faq">
      <h1 class="heading">questions & <span>answers</span></h1>
      <div class="accordion-container">
        <div class="accordion">
          <div class="accordion-heading">
            <h3>How to make websites?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordioin-content">
            Identify your website goals. Identify your target audience. Define
            your unique selling proposition. Secure a domain name (and hosting).
            Pick a website builder. Create and collect design elements. Create
            content for your core website pages.
          </p>
        </div>

        <div class="accordion">
          <div class="accordion-heading">
            <h3>How to place order online?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordioin-content">
            Select Proceed to Checkout after you have reviewed the items in your
            Shopping Cart. If prompted, sign in to your account or create a new
            account if this is your first order. Enter a shipping address.
            Choose a shipping method. Enter your payment information. ... Review
            your order details.
          </p>
        </div>

        <div class="accordion">
          <div class="accordion-heading">
            <h3>How to pay online?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordioin-content">
            Once you are at the payment checkout, you need to choose “Pay Using
            Debit/ Credit Card. ... Then, type the 16-digit Debit Card number
            which is on the front side of your Debit Card. ... Once you've
            entered the Debit Card details, you may be asked for a CCD, CVV, or
            similar security code.
          </p>
        </div>

        <div class="accordion">
          <div class="accordion-heading">
            <h3>Is online payment safe?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordioin-content">
            Every time an online payment is made, there's a small risk that
            hackers might secretly steal a buyer's bank or payment information.
            If they do, they can use that account to make fraudulent payments to
            their accounts, purchase items or get access to cash.
          </p>
        </div>

        <div class="accordion">
          <div class="accordion-heading">
            <h3>How to contact service center?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordioin-content">
            Ask how they are and use their name if they give it. Explain your
            problem clearly, but don't take too much time, because call center
            workers are strongly encouraged to deal with calls swiftly. It's
            smart to try to elicit sympathy and get them on your side. Patiently
            follow the directions they give you
          </p>
        </div>
      </div>
    </section>
    <!-- faq section ends -->

    <!-- review section starts -->
    <section class="review">
      <h1 class="heading">clients <span>review</span></h1>
      <div class="swiper review-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <img src="images/pic-1.jpg" alt="" />
            <h3>John Deo</h3>
            <span>Designer</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
              nostrum officiis ratione veritatis quia aliquid tempora earum
              provident dolore hic!
            </p>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-2.jpg" alt="" />
            <h3>Olivia</h3>
            <span>Designer</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Voluptatem perferendis harum aliquid, officia nobis pariatur illo
              hic temporibus maiores facilis, modi ex asperiores enim eius
              deleniti. Rerum molestiae iure delectus?
            </p>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-3.jpg" alt="" />
            <h3>James</h3>
            <span>Designer</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
              commodi, eius eos consequuntur exercitationem pariatur?
            </p>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-4.jpg" alt="" />
            <h3>Sophia</h3>
            <span>Designer</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
              placeat consectetur illo esse repellendus officiis cum facilis
              perferendis. Voluptatum, eius vel magni quis est vitae laboriosam
              ullam. Quidem cum, obcaecati officia voluptatibus qui animi autem?
            </p>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-5.jpg" alt="" />
            <h3>William</h3>
            <span>Designer</span>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
              nostrum officiis ratione veritatis quia aliquid tempora earum
              provident dolore hic!
            </p>
          </div>

          <div class="swiper-slide slide">
            <img src="images/pic-6.jpg" alt="" />
            <h3>Mia</h3>
            <span>Designer</span>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem
              tenetur unde earum molestias, eum dolor nemo iste soluta est atque
              sunt ducimus sint cum corporis architecto rem fugiat. Ullam,
              dignissimos.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- review section ends -->

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
