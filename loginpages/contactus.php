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
    <link rel="stylesheet" type="text/css" href="contactus.css">
    <link rel="icon" href="image/LOGO FINAL.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
       integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Whey Queen Supplments | Contact Us</title>
</head>
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
    <!-- About Section -->
    <div class="w3-row-padding"></div>
  <h1 align="center" style="font-family: 'Bebas Neue', cursive; font-size: font-size: 80px" >OUR TEAM</h1>
<div class="container-fluid padding">
 <div class="row text-center padding">
   <div class="col-xs-12 col-sm-6 col-md-4">
     <img src="image/celestial.jpg" height="300" width="300" class="borders">
     <h3 style="font-family: 'Bebas Neue', cursive; font-size: 35px">CELESTIAL</h3>
     <h4 style="font-family: 'Bebas Neue', cursive; font-size: 30px">Full-stack Developer</h4>

   </div>
   <div class="col-xs-12 col-sm-6 col-md-4">
     <img src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2Froxas.PNG?v=1619538092315" height="300" width="300" class="borders"> 
     <h3 style="font-family: 'Bebas Neue', cursive; font-size: 35px">ROXAS</h3>
     <h4 style="font-family: 'Bebas Neue', cursive; font-size: 30px">Back-end Developer</h4>
   </div>
   <div class="col-xs-12 col-sm-6 col-md-4">
     <img src="image/WHEIBAY/Team/Cerwin.jpg" height="300" width="300" class="borders">
     <h3 style="font-family: 'Bebas Neue', cursive; font-size: 35px">LABADAN</h3>
     <h4 style="font-family: 'Bebas Neue', cursive; font-size: 30px">Front-end Developer</h4>

   </div>
 </div>
<hr class="my-4">
</div>
<div class="container-fluid padding" style="color: black;">
        <br><br>
        <div class="row text-center padding">
        <div class="col-lg-6">
          <img src="image/WHEIBAY/Team/Boniza.jpg" height="300" width="300" class="borders"> 
          <h3 style="font-family: 'Bebas Neue', cursive; font-size: 35px">BONIZA</h3>
          <h4 style="font-family: 'Bebas Neue', cursive; font-size: 30px">Full-stack Developer</h4>
          </div>
        <div class="col-lg-6">
          <img src="image/WHEIBAY/Team/Rizza.jpg" height="300" width="300" class="borders"> 
          <h3 style="font-family: 'Bebas Neue', cursive; font-size: 35px">CASTANEDA</h3>
          <h4 style="font-family: 'Bebas Neue', cursive; font-size: 30px">Front-end Developer</h4>
          </div>
  </div>
          </div>
 <br><br><br><br>            
<!-- Contact Section -->
 <div class="container pt-3">
 <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact Us</h3>
 </div>
 <form>
   <div class="form-group col-4">
     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
   </div>
   <div class="form-group col-4">
     <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
   </div>
   <div class="form-group col-4">
     <input type="email" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter Subject">
   </div>
   <div class="form-group col-7">
     <input type="email" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp" placeholder="Enter Message">
   </div>
   <div class="container pt-3 ml-0">
   <button type="submit" class="btn btn-primary">Submit</button>
   </div>
     </form>
 <br>
 <div class="container pt-3 ml-0">
 <div class="w3-container w3-padding-32" id="about">
   <h3  style="font-family: 'Bebas Neue', cursive;" class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
   <p style="font-family: 'Bebas Neue', cursive;">
     Email Address: whey.queeen@gmail.com
   </p>
   <p style="font-family: 'Bebas Neue', cursive;">
     Contact Number:09074529315
   </p>
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