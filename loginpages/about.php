<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'wheyqueenlogin');


$id = $_SESSION['id'];
$fname = $email = $password = '';
$sql = "SELECT * FROM usertables WHERE id='$id'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["id"];
		$email = $row["name"];
		$password = $row['password'];
	}
}

//Connection database for cart
require_once ('../products_connection/CreateDb.php');
require_once ('../products_connection/component.php');

// create instance of Createdb class // For Index webpage
$database = new CreateDb("Productdb", $tablename="Preworkout",
                         $tablename1="multivitamins",
                         $tablename2="massgainers",
                         $tablename3="proteinshakes",
                         $tablename4="creatine");

if(!(isset($_SESSION['cart']))){
  $_SESSION['cart'] = array();
}//if cart

if(isset($_GET['clear'])) {
  $_SESSION['cart'] = array();
}//clear cart

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="about.css">
    <link rel="icon" href="image/LOGO FINAL.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
       integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Whey Queen Supplments | About</title>
</head>
<style>
  div.gallery {
   border: 1px solid #ccc;
 }
 
 div.gallery:hover {
   border: 1px solid #777;
 }
 
 div.gallery img {
   width: 100%;
 
 }
 
 div.desc {
   padding: 15px;
   text-align: center;
 }
 
 * {
   box-sizing: border-box;
 }
 
 .responsive {
   padding: 0 6px;
   float: left;
   width: 24.99999%;
 }
 
 @media only screen and (max-width: 700px) {
   .responsive {
     width: 49.99999%;
     margin: 6px 0;
   }
 }
 
 @media only screen and (max-width: 500px) {
   .responsive {
     width: 100%;
   }
 }
 
 .clearfix:after {
   content: "";
   display: table;
   clear: both;
 }
 </style>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md sticky-top">
        <div class="container">
        <a class="navbar-brand" href="home.php"><img src="image/LOGO FINAL.png" style="width: 80px;height: 60px"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">CONTACT US</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PRODUCTS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="preworkout.php" target="_blank">Pre-Workout</a>
                    <a class="dropdown-item" href="multivitamins.php" target="_blank">Multi-Vitamins</a>
                    <a class="dropdown-item" href="massgainers.php" target="_blank">Mass Grainers</a>
                    <a class="dropdown-item" href="proteinshakes.php" target="_blank">Protein Shakes</a>
                    <a class="dropdown-item" href="creatine.php" target="_blank">Creatine</a>
                  </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="article.php">ARTICLE</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $email; ?></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <!-- CART ICON -->
             <a href="cart.php"class="nav-item nav-link active mx-0 mt-2">
            <h5 class="cart" style="color: black;">
            <i class="fas fa-shopping-cart pl-1"></i>
            <?php

           if (isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo "<span id=\"cart_count\" class=\" positioncart text-dark bg-danger px-2 rounded-pill \">$count</span>";
            }else{
              echo "<span id=\"cart_count\" class=\"text-dark\">0</span>";
            }
        ?>
    </h5>
    </a>
    <!-- CART ICON --> 
            <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
          </ul>
        </div>
        </div>
      </nav>
    <!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">
  <br>
    <!-- Project Section -->
    <div class="container pt-3 ml-0">
    <div class="w3-container w3-padding-32" id="projects">
       <h2 style="font-family: 'Bebas Neue', cursive;">Other services available in our gym</h2>
    </div>
    </div>
    </div>
  <br>
    <div class="container pt-3 ml-0">
    <div style="padding:6px;">
    <p style="font-size: 20px;"> These are the other programs or services you can avail to our gym each programs includes personal coach and schedule.</p>
      <p style="font-size: 15px;">You may contact us for more information.</p>
  </div>
  </div>
    <br>
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_forest.jpg">
        <img src="image/AT.jpeg" width="600" height="300">
      <div class="desc">Athletic Training</div>
    </div>
  </div>
  
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_forest.jpg">
        <img src="image/CT.jpeg" alt="Forest" width="600" height="300">
      </a>
      <div class="desc">Cross Training</div>
    </div>
  </div>
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_lights.jpg">
        <img src="image/STRC.jpg" alt="Northern Lights" width="600" height="300">
      </a>
      <div class="desc">Strength and Conditioning</div>
    </div>
  </div>
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_mountains.jpg">
        <img src="image/WL.jpg" alt="Mountains" width="600" height="300">
      </a>
      <div class="desc">Weight Loss</div>
    </div>
  </div>
  
  <div class="clearfix"></div>
  
  
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  
  
        <div class="container padding" style="color: white;">
        <div class="row padding">
          <div class="col-lg-6">
            <h2 style="font-family: 'Bebas Neue', cursive; font-size:45px; color: orangered;">About Us</h2>
            <br>
            <p style="font-family: 'Bebas Neue', cursive; font-size:25px;">Whey Queen Supplements was Established on April 20, 2006 By Mr Edward James Ballacillio. Our goal is to motivate everyone who want to be fit and healthy. To provide a quality service and products to all of the customers we will have. We will assure that all of the customers who will avail our services and products will meet their satisfaction and expectation. Whey Queen Supplement is not just a store but also a home for all of the body builders, Intructors, Mentors, Coaches and etc.</p>
          </div>
          <div class="col-lg-6">
            <img src="https://cdn.glitch.com/e4fa8393-6a2f-4f21-8abc-dbe8b105143b%2FLOGO%20FINAL.png?v=1619881586345" class="img-fluid" style="width: 600px; height: 500px;">
          </div>
        </div>
      </div>
    <!-- Footer -->
    <footer>
      <div class="container-fluid padding">
        <div class="row text-center">
          <div class="col-md-4">
            <img src="image/LOGO FINAL.png" style="width: 80px;height: 60px;">
            <hr class="light">
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">0123-456-789</p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">WheyQueenSupplements@gmail.com</p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">Aurora Boulevard</p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">Quezon City</p>
          </div>
          <div class="col-md-4">
            <hr class="light">
            <h5 style="font-family: 'Bebas Neue', cursive; font-size: 25px;">Company Hours</h5>
            <hr class="light">
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">Weekdays: 7:00 am - 9:00 pm</p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">Weekends: 9:00 am - 9:00 pm</p>
          </div>
           <div class="col-md-4">
            <hr class="light">
            <h5 style="font-family: 'Bebas Neue', cursive; font-size: 25px;">Branches</h5>
            <hr class="light">
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">Quezon City</p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">Pasig City</p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">Marikina City</p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">San Mateo, Rizal</p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">Antipolo, Rizal</p>
          </div>
          <div class="col-12">
            <hr class="light-100">
            <h5 style="font-family: 'Bebas Neue', cursive; font-size: 30px;">&copy; WheyQueenSupplements.com</h5>
          </div>
        </div>
      </div>
      </footer>

  <!-- links -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>