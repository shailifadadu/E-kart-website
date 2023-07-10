<?php
require_once "db.php";
try{
  if(isset($_POST['register'])){
  if($_POST["u_pass"] === $_POST["u_cpass"])
  {
  $sql = "INSERT INTO user(u_name,u_email, u_pass,u_cpass) VALUES (:u_name, :u_email, :u_pass, :u_cpass)"; //query
  $res = $pdo->prepare($sql); // query prepare by PDO
  $res->bindParam(':u_name', $_REQUEST['u_name']);
  $res->bindParam(':u_email', $_REQUEST['u_email']);
  $res->bindParam(':u_pass', $_REQUEST['u_pass']);
  $res->bindParam(':u_cpass', $_REQUEST['u_cpass']);
  if($res->execute())
  {
    echo '<script type ="text/JavaScript">';  
			echo 'alert("You have successfully registered ")';  
			echo '</script>';
      header('location:login.php');
  }
}

else{
  echo '<script type ="text/JavaScript">';  
			echo 'alert("Password and Confirm Password are not matched !")';  
			echo '</script>';
}
  }
  }
catch(PDOException $e1){
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register</title>

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

    <!-- register form section starts -->
    <section class="register">
      <form method="post">
        <h3>Register now</h3>
        <input
          type="text"
          name="u_name"
          placeholder="Enter your name"
          id=""
          class="box"
        />
        <input
          type="email"
          name="u_email"
          placeholder="Enter your Email"
          id=""
          class="box"
        />
        <input
          type="password"
          name="u_pass"
          placeholder="Enter your Password"
          id=""
          class="box"
        />
        <input
          type="password"
          name="u_cpass"
          placeholder="Confirm your Password"
          id=""
          class="box"
        />
        
        <input type="submit" name="register" value="register now" class="btn" />
      
        <p>Already have an account?</p>
        <a href="login.php" class="btn link">Login Now</a>
      </form>
    </section>
    <!-- register form section ends -->

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
