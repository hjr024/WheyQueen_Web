<?php
session_start();
//Connection database for cart
require_once ('products_connection/CreateDb.php');
require_once ('products_connection/component.php');

// create instance of Createdb class // For Index webpage
$database = new CreateDb("Productdb", $tablename="Preworkout",
                         $tablename1="multivitamins",
                         $tablename2="massgainers",
                         $tablename3="proteinshakes",
                         $tablename4="creatine");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home1.css">
    <link rel="icon" href="image/LOGO FINAL.png">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Whey Queen Supplement | Home</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md sticky-top">
        <div class="container">
        <a class="navbar-brand" href="home1.php"><img src="image/LOGO FINAL.png" style="width: 80px;height: 60px"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home1.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about1.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus1.php">CONTACT US</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PRODUCTS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="preworkout1.php" target="_blank">Pre-Workout</a>
                    <a class="dropdown-item" href="multivitamins1.php" target="_blank">Multi-Vitamins</a>
                    <a class="dropdown-item" href="massgainers1.php" target="_blank">Mass Grainers</a>
                    <a class="dropdown-item" href="proteinshakes1.php" target="_blank">Protein Shakes</a>
                    <a class="dropdown-item" href="creatine1.php" target="_blank">Creatine</a>
                  </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="article_0.php">ARTICLE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginpages/login.php">LOG-IN</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
      <!-- Carousel -->
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/slide1final.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/slide2final.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/slide3final.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  <!-- BEST SELLER -->
  <div class="dividera">
  <div class="container-fluid padding" style="color:white;">
    <br>
    <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">BEST SELLERS</h2>
    <hr style="border: 1px solid orangered; width: 1400px;">
    <br><br>
    <div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="image/b1.png" style="width: 250px;height: 250px;"><br>
        <h3 style="text-align: center; font-family: 'Bebas Neue', cursive;">USN Anabolic Mass - Ultimate impact weight gainer</h3>
        <h5 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 25px;">$61.00</h5>
        <button onclick="document.getElementById('id11').style.display='block'" class="bgbutton bgbutton3" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">View Item</button></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="image/b2.png" style="width: 250px;height: 250px;"><br>
        <h3 style="text-align: center; font-family: 'Bebas Neue', cursive;">SAN 100% Pure Titanium Whey 2lbs</h3>
        <h5 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 25px;">$34.00</h5>
        <button onclick="document.getElementById('id12').style.display='block'" class="bgbutton bgbutton3" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">View Item</button></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <img src="image/b3.png" style="width: 250px;height: 250px;"><br>
        <h3 style="text-align: center; font-family: 'Bebas Neue', cursive;">6LBS FINAFLEX SUPER MASS GAINER</h3>
        <h5 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 25px;">$59.00</h5>
        <button onclick="document.getElementById('id13').style.display='block'" class="bgbutton bgbutton3" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">View Item</button></a>
      </div>
    </div>
  </div>
  <div class="container-fluid padding" style="color: white;">
    <br><br>
    <div class="row text-center padding">
    <div class="col-lg-6">
        <img src="image/b4.png" style="width: 250px;height: 250px;"><br>
        <h3 style="text-align: center; font-family: 'Bebas Neue', cursive;">ON Opti-women nutrient optimization system</h3>
        <h5 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 25px;">$26.00</h5>
        <button onclick="document.getElementById('id14').style.display='block'" class="bgbutton bgbutton3" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">View Item</button></a>
      </div>
      <div class="col-lg-6">
        <img src="image/b5.png" style="width: 250px;height: 250px;"><br>
        <h3 style="text-align: center; font-family: 'Bebas Neue', cursive;">150TABS ON OPTI-MEN.</h3>
        <h5 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 25px;">$32.00</h5>
        <button onclick="document.getElementById('id15').style.display='block'" class="bgbutton bgbutton3" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">View Item</button></a>
      </div>
    </div>
    <br>
  </div>
</div>
<br>
<!-- BEST SELLER MODAL -->
  <div id="id11" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="modal-header">
        <h3 class="modal-title">Best Seller!</h3>
      </div>
    <div class="modalrow">
      <div class="modalcolumn">
      <div class="imgcontainer">
      <img src="image/b1.png" alt="Car" class="avatar">
      </div>
      </div>
      <div class="modalcolumn"><br>
      <h2>USN Anabolic Mass - Ultimate impact weight gainer</h2>
      <h3>$61.00</h3><br>
      <h4>USN Anabolic Mass is formulated to offer a muscle mass catalyst, a plateau breakthrough system. High protein drink is provided with a mixture of amino acids, minerals, sugars and sweetener.

        12 Lbs. Value Pack. Up To 1280 Calories per Serving. 55g Protein. Up To 252g Carbs per Serving. Up To 11.2g BCAAs per Serving. Natural Cocoa. All-In-One. The Ultimate High-Impact Mass Gainer. 55g Premium 6-Stage Multi-Protein Matrix. Premium Formulation For: The Ultimate High-Impact Mass Gainer. All-In-One Catalyst for Optimal Results.</h4><br>
      </div>
    </div>
    <div class="containera">
    <button type="button" onclick="document.getElementById('id11').style.display='none'" class="cancelbtn">Exit View</button>
    <button class="button">Add Item</button>
    </div>
    </form>
  </div>

  <div id="id12" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="modal-header">
        <h3 class="modal-title">Best Seller!</h3>
      </div>
    <div class="modalrow">
      <div class="modalcolumn">
      <div class="imgcontainer">
      <img src="image/b2.png" alt="Car" class="avatar">
      </div>
      </div>
      <div class="modalcolumn"><br>
      <h2>SAN 100% Pure Titanium Whey 2lbs</h2>
      <h3>$34.00</h3><br>
      <h4>PURE TITANIUM WHEY is engineered to be the best possible whey protein blend for maximum muscle growth.

        The quick-digesting nature of PURE TITANIUM WHEY means rapid absorption into the bloodstream, and that makes it the ultimate choice for getting key anabolic and anti-catabolic nutrients into your system as fast as possible. Plus, the anabolic effect of this ultra-potent protein blend has long-lasting effects — up to 4 hours.</h4><br>
      </div>
    </div>
    <div class="containera">
    <button type="button" onclick="document.getElementById('id12').style.display='none'" class="cancelbtn">Exit View</button>
    <button class="button">Add Item</button>
    </div>
    </form>
  </div>

  <div id="id13" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="modal-header">
        <h3 class="modal-title">Best Seller!</h3>
      </div>
    <div class="modalrow">
      <div class="modalcolumn">
      <div class="imgcontainer">
      <img src="image/b3.png" alt="Car" class="avatar">
      </div>
      </div>
      <div class="modalcolumn"><br>
      <h2>6LBS FINAFLEX SUPER MASS GAINER</h2>
      <h3>$59.00</h3><br>
      <h4>FINAFLEX MASS GAINER is a Super Weight Gainer Drink Mix designed to help you pack on MASS! The MASS GAINER formula is loaded with calories, protein, and carbohydrates; everything you need to promote size and strength gains. Tired of choking down weight gainers that taste like cardboard? Don’t worry we built MASS GAINER to taste great, delivering a milkshake-like taste each and every time you drink it! Get with the program, GET FINAFLEX MASS GAINER!</h4><br>
      </div>
    </div>
    <div class="containera">
    <button type="button" onclick="document.getElementById('id13').style.display='none'" class="cancelbtn">Exit View</button>
    <button class="button">Add Item</button>
    </div>
    </form>
  </div>

  <div id="id14" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="modal-header">
        <h3 class="modal-title">Best Seller!</h3>
      </div>
    <div class="modalrow">
      <div class="modalcolumn">
      <div class="imgcontainer">
      <img src="image/b4.png" alt="Car" class="avatar">
      </div>
      </div>
      <div class="modalcolumn"><br>
      <h2>ON Opti-women nutrient optimization system</h2>
      <h3>$26.00</h3><br>
      <h4>Opti-Women has been designed as a comprehensive Nutrient Optimization System complete with botanicals, antioxidants, and other gender-focused components.* By packing 40 active ingredients into one pill, much more than a multi has been created.</h4><br>
      </div>
    </div>
    <div class="containera">
    <button type="button" onclick="document.getElementById('id14').style.display='none'" class="cancelbtn">Exit View</button>
    <button class="button">Add Item</button>
    </div>
    </form>
  </div>

  <div id="id15" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="modal-header">
        <h3 class="modal-title">Best Seller!</h3>
      </div>
    <div class="modalrow">
      <div class="modalcolumn">
      <div class="imgcontainer">
      <img src="image/b5.png" alt="Car" class="avatar">
      </div>
      </div>
      <div class="modalcolumn"><br>
      <h2>150TABS ON OPTI-MEN.</h2>
      <h3>$32.00</h3><br>
      <h4>Opti-Men is a comprehensive Nutrient Optimization System providing 75+ active ingredients in 4 blends specifically designed to support the nutrient needs of active men. Each serving includes free form amino acids, antioxidant vitamins, essential minerals and botanical extracts in foundational amounts that can be built upon through consumption of a healthy balanced diet. Think of Opti-Men® as key multivitamin support for your fit lifestyle.</h4><br>
      </div>
    </div>
    <div class="containera">
    <button type="button" onclick="document.getElementById('id15').style.display='none'" class="cancelbtn">Exit View</button>
    <button class="button">Add Item</button>
    </div>
    </form>
  </div>
      <br>
      <hr style="border: 1px solid orangered; width: 1400px;">
    <!-- 5 Category -->
    <div class="container-fluid padding" style="color: white;">
        <br>
        <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">SHOP BY CATEGORY</h2>
        <br><br>
        <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="image/preworkout.png" style="width: 250px;height: 200px;"><br>
            <a href="preworkout1.php" target="_blank"><button type="button" class="btn btn-outline-warning" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">See All</button></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="image/wheyprotein.png" style="width: 250px;height: 200px;"><br>
            <a href="multivitamins1.php" target="_blank"><button type="button" class="btn btn-outline-warning" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">See All</button></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="image/massgrainers.png" style="width: 250px;height: 200px;"><br>
            <a href="massgainers1.php" target="_blank"><button type="button" class="btn btn-outline-warning" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">See All</button></a>
          </div>
        </div>
      </div>
      <div class="container-fluid padding" style="color: black;">
        <br><br>
        <div class="row text-center padding">
        <div class="col-lg-6">
            <img src="image/proteinshakes.png" style="width: 250px;height: 200px;"><br>
            <a href="proteinshakes1.php" target="_blank"><button type="button" class="btn btn-outline-warning" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">See All</button></a>
          </div>
          <div class="col-lg-6">
            <img src="image/supplements.png" style="width: 250px;height: 200px;"><br>
            <a href="creatine1.php" target="_blank"><button type="button" class="btn btn-outline-warning" style="font-family: 'Bebas Neue', cursive; font-size: 18px;">See All</button></a>
          </div>
        </div>
        <br>
      </div>
      <br>
      <br>
      <hr style="border: 1px solid orangered; width: 1400px;">
      <br>
      <br>
    <!-- Two Column (GOAL) -->
    <div class="container padding" style="color: white;">
      <div class="row padding">
        <div class="col-lg-6">
          <h2 style="font-family: 'Bebas Neue', cursive; font-size:45px; color: orangered;">Goal of Whey Queen Supplements</h2>
          <br>
          <p style="font-family: 'Bebas Neue', cursive; font-size:40px;">Our mission at Whey Queen supplements is to provide our visitors with the tools they need to build the body they want. Our commitment to a “More than just a Supplement Store” customer experience has help to build a High reputation as a Brand.</p>
        </div>
        <div class="col-lg-6">
          <img src="image/GOAL.png" class="img-fluid" style="width: 600px; height: 500px;">
        </div>
      </div>
    </div>
    <br><hr style="border: 1px solid orangered; width: 1400px;"><br>
      <!-- Company Partners -->
      <h2 align="center" style="font-family: 'Bebas Neue', cursive; font-size: 40px; color: white;">Business Partners</h2>
      <div class="container">
        <img src="image/PARTNERS.png" class="img-fluid">
      </div>
    <!-- Promotional Video -->
      <video width="400" autoplay loop>
        <source src="video/VIDEOLOOP.mp4" type="video/mp4">
      </video>
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