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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="article.css" />
    <link
      rel="icon"
      href="https://cdn.glitch.com/e4fa8393-6a2f-4f21-8abc-dbe8b105143b%2FLOGO%20FINAL.png?v=1619803347662"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
       integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Whey Queen Supplments | Article</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md sticky-top">
      <div class="container">
        <a class="navbar-brand" href="home.php"
          ><img
            src="https://cdn.glitch.com/e4fa8393-6a2f-4f21-8abc-dbe8b105143b%2FLOGO%20FINAL.png?v=1619803347662"
            style="width: 80px;height: 60px"
        /></a>
        <button
          class="navbar-toggler navbar-dark"
          type="button"
          data-toggle="collapse"
          data-target="#main-navigation"
        >
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
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                PRODUCTS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="preworkout.php" target="_blank"
                  >Pre-Workout</a
                >
                <a class="dropdown-item" href="multivitamins.php" target="_blank"
                  >Multi-Vitamins</a
                >
                <a class="dropdown-item" href="massgainers.php" target="_blank"
                  >Mass Gainers</a
                >
                <a
                  class="dropdown-item"
                  href="proteinshakes.html"
                  target="_blank"
                  >Protein Shakes</a
                >
                <a class="dropdown-item" href="creatine.php" target="_blank"
                  >Creatine</a
                >
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
    <!-- Articles-->
    <div class="container-fluid padding" style="color:white;">
      <br />
      <h2
        style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;"
      >
        ARTICLES
      </h2>
      <br />
    </div>

    <div class="site-container">
      <div class="article-container">
        <!-- Articles1-->
        <article class="article-card">
          <figure class="article-image">
            <img
              src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%201%20IMAGE%20FINAL.png?v=1619929967260"
              alt="art1"
            />
          </figure>
          <div class="article-content">
            <a href="article1.php" class="card-category"
              >UNDERSTANDING THE BASICS OF MUSCLE RECOVERY</a
            >
            <h3 class="card-title">Muscle Recovery</h3>
            <p class="card-excerpt">
              Protein metabolism is never static. The body simultaneously
              degrades and synthesizes proteins.
            </p>
          </div>
        </article>
        <!-- Articles2-->
        <article class="article-card">
          <figure class="article-image">
            <img
              src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%202%20IMAGE%20FINAL.png?v=1619934592566"
              alt="art1"
            />
          </figure>
          <div class="article-content">
            <a href="article2.php" class="card-category"
              >UNDERSTANDING THE BASICS OF PROTEIN</a
            >
            <h3 class="card-title">The Basics of Protein</h3>
            <p class="card-excerpt">
              Dietary protein is an essential macronutrient, which is required
              by all healthy adults on a daily basis.
            </p>
          </div>
        </article>
        <!-- Articles3-->
        <article class="article-card">
          <figure class="article-image">
            <img
              src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%203%20IMAGE%20FINAL.png?v=1619934603101"
              alt="art1"
            />
          </figure>
          <div class="article-content">
            <a href="article3.php" class="card-category"
              >ELECTROLYTES: SHOULD I SUPPLEMENT WITH ELECTROLYTES?</a
            >
            <h3 class="card-title">Bodies Fluid Balance</h3>
            <p class="card-excerpt">
              Sweat is primarily made up of water and also contains variable
              amounts of electrolytes (minerals).
            </p>
          </div>
        </article>
        <!-- Articles4-->
        <article class="article-card">
          <figure class="article-image">
            <img
              src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%204%20IMAGE%20FINAL.png?v=1619934604184"
              alt="art1"
            />
          </figure>
          <div class="article-content">
            <a href="article4.php" class="card-category"
              >UNDERSTANDING GOLD STANDARD 100% WHEY PROTEIN™</a
            >
            <h3 class="card-title">What is Whey Protein?</h3>
            <p class="card-excerpt">
              Whey is a Dairy Protein derived from cow’s milk. Cow’s milk is
              made up of approximately 88% water and variable amounts of the
              three macronutrients..
            </p>
          </div>
        </article>

        <div class="site-container">
          <div class="article-container">
            <!-- Articles5-->
            <article class="article-card">
              <figure class="article-image">
                <img
                  src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%205%20IMAGE%20FINAL.png?v=1619934604198"
                  alt="art1"
                />
              </figure>
              <div class="article-content">
                <a href="article5.php" class="card-category"
                  >THE BASICS OF CREATINE</a
                >
                <h3 class="card-title">Creatine Sources</h3>
                <p class="card-excerpt">
                  Creatine is made in the body and even found in the foods we
                  eat..
                </p>
              </div>
            </article>
          </div>
        </div>
        <div class="site-container">
          <div class="article-container">
            <!-- Articles6-->
            <article class="article-card">
              <figure class="article-image">
                <img
                  src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%201%20IMAGE%20FINAL.png?v=1619929967260"
                  alt="art1"
                />
              </figure>
              <div class="article-content">
                <a href="article1.php" class="card-category"
                  >MUSCLE REBUILDING</a
                >
                <h3 class="card-title">Building Blocks Of Muscles</h3>
                <p class="card-excerpt">
                  Muscular hypertrophy relates to muscle growth. The human body
                  does not build new cells..
                </p>
              </div>
            </article>
          </div>
        </div>
        <div class="site-container">
          <div class="article-container">
            <!-- Articles7-->
            <article class="article-card">
              <figure class="article-image">
                <img
                  src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%202%20IMAGE%20FINAL.png?v=1619934592566"
                  alt="art1"
                />
              </figure>
              <div class="article-content">
                <a href="article2.php" class="card-category"
                  >PROTEIN QUALITY</a
                >
                <h3 class="card-title">Sufficient Quantities</h3>
                <p class="card-excerpt">
                  When it comes to protein quality, not all protein sources are
                  created equal...
                </p>
              </div>
            </article>
          </div>
        </div>
        <div class="site-container">
          <div class="article-container">
            <!-- Articles8-->
            <article class="article-card">
              <figure class="article-image">
                <img
                  src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%204%20IMAGE%20FINAL.png?v=1619934604184"
                  alt="art1"
                />
              </figure>
              <div class="article-content">
                <a href="article4.php" class="card-category"
                  >WHY TAKE WHEY PROTEIN?</a
                >
                <h3 class="card-title">Protein Importance in Body Building</h3>
                <p class="card-excerpt">
                  Protein is required on daily basis because Amino Acids cannot
                  be stored in the body.
                </p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container-fluid padding">
        <div class="row text-center">
          <div class="col-md-4">
            <img
              src="https://cdn.glitch.com/e4fa8393-6a2f-4f21-8abc-dbe8b105143b%2FLOGO%20FINAL.png?v=1619803347662"
              style="width: 80px;height: 60px;"
            />
            <hr class="light" />
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              0123-456-789
            </p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              WheyQueenSupplements@gmail.com
            </p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              Aurora Boulevard
            </p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              Quezon City
            </p>
          </div>
          <div class="col-md-4">
            <hr class="light" />
            <h5 style="font-family: 'Bebas Neue', cursive; font-size: 25px;">
              Company Hours
            </h5>
            <hr class="light" />
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              Weekdays: 7:00 am - 9:00 pm
            </p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              Weekends: 9:00 am - 9:00 pm
            </p>
          </div>
          <div class="col-md-4">
            <hr class="light" />
            <h5 style="font-family: 'Bebas Neue', cursive; font-size: 25px;">
              Branches
            </h5>
            <hr class="light" />
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              Quezon City
            </p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              Pasig City
            </p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              Marikina City
            </p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              San Mateo, Rizal
            </p>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 20px;">
              Antipolo, Rizal
            </p>
          </div>
          <div class="col-12">
            <hr class="light-100" />
            <h5 style="font-family: 'Bebas Neue', cursive; font-size: 30px;">
              &copy; WheyQueenSupplements.com
            </h5>
          </div>
        </div>
      </div>
    </footer>

    <!-- links -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
