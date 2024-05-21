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
    <link rel="stylesheet" type="text/css" href="article.css">
    <link rel="icon" href="https://cdn.glitch.com/e4fa8393-6a2f-4f21-8abc-dbe8b105143b%2FLOGO%20FINAL.png?v=1619803347662">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
       integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Whey Queen Supplments | Article</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md sticky-top">
      <div class="container">
      <a class="navbar-brand" href="home.php"><img src="https://cdn.glitch.com/e4fa8393-6a2f-4f21-8abc-dbe8b105143b%2FLOGO%20FINAL.png?v=1619803347662" style="width: 80px;height: 60px"></a>
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
                  <a class="dropdown-item" href="MultiVitamins.php" target="_blank">Multi-Vitamins</a>
                  <a class="dropdown-item" href="massgainers.php" target="_blank">Mass Gainers</a>
                  <a class="dropdown-item" href="proteinshakes.php">Protein Shakes</a>
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
  
   <div class="container-fluid padding" style="color:white;">
        <br>
        
  <article class="articlecontent1">
 <p>
   <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;"> UNDERSTANDING GOLD STANDARD 100% WHEY PROTEIN™</h2>
What is Whey Protein?
Whey is a Dairy Protein derived from cow’s milk. Cow’s milk is made up of approximately 88% water and variable amounts of the three macronutrients: Carbohydrates (≈5%), Fat (≈4%) and Protein (≈3%). The Protein found in milk contains two types of Protein, Whey and Casein. Casein (sometimes call “Cheese Protein” as it forms the basis of the solid curds which become cheese) is the most abundant Protein in milk comprising about 80% of the total protein content. Whey is the less abundant of the two Milk Proteins making up about 20% of the total Protein. However, in today’s world of sports nutrition, Whey Protein is by far the more popular and more consumed of the two main Dairy Proteins. Whey has become so desirable due to many of its unique features including:
Whey is a High-Quality ‘Complete’ Protein: Protein is comprised of twenty-two basic building blocks called Amino Acids. Nine of those are considered Essential Amino Acids, which means they body cannot produce them and they must be consumed through the diet. A Protein which naturally contains all the Essential Amino Acids is classified as ‘Complete.’ Complete Proteins are typically prioritized by athletes and those who participate in sports as they help to support muscle recovery and rebuilding, a process known as Muscle Protein Synthesis or MPS.
Whey is Naturally Rich in Branched Chain Amino Acids (BCAAs): The BCAAs are a specific set of Essential Amino Acids, which make up about a little over one third of skeletal muscle. They include three Essential Amino Acids, Leucine, Isoleucine and Valine. A typical glass of milk has a naturally occurring 2:1:1 ratio of Leucine to Isoleucine to Valine. This is also roughly the same ratio found in skeletal muscle. Like Complete Proteins, BCAAs are sought-after and consumed by athletes and those who participate in sports as they help to signal muscles to support muscle recovery and rebuilding.
Whey is a ‘Fast’ Digesting and Absorbing Protein: Whey is also unique in the way it’s digested and absorbed. Whey Protein is often considered the ‘fast’ Protein when compared to Casein Protein. In general, due to its nature Casein Protein gels and remains more “solid” through digestion which makes Casein Protein desirable when slower digestion is wanted such as during sleep. Whey Protein typically stays liquid through digestion and, as such, takes about one hour to peak in the bloodstream after consumption. This characteristic has contributed in large part to the popularity of whey protein as it is generally quite easy to consume after strenuous our long workouts due to its thinner consistency compared to Casein Protein.    </p>
 <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">Why Take Whey Protein?</h2>
  <p>
Protein is required on daily basis because Amino Acids cannot be stored in the body. It’s essential that all healthy adults consume adequate amounts of Protein throughout each day to help meet Protein needs. Moreover, Protein is also essential when it comes to muscle. This is because physical activity increases muscle Protein breakdown. Muscles require adequate time and overall balanced nutrition including sufficient High-Quality, Complete Protein to recover optimally. Protein is one key element which can help to support muscle recovery.    </p>
     <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;"> Why Optimum Nutrition Gold Standard 100% Whey Protein?</h2>
     <p>
A Brief History of Gold Standard Whey Protein: Gold Standard 100% Whey Protein™ was not always the “Gold Standard.” Gold Standard 100% Whey Protein™ was originally known in the late 1990’s as 100% Whey Protein and was comprised of 21 grams of Whey Protein Concentrate (WPC) in each serving. As Whey Protein technology advanced as consumer sentiment progressed, Optimum Nutrition 100% Whey Protein™ evolved. As users wanted more protein per serving, 100% Whey Protein went from 21 to 22 gram of Protein per serving. As Whey Protein Isolates become available, 100% Whey Protein become a blend Whey Protein Concentrates and Whey Protein Isolates. And as Isolates gained in popularity, the ration of Concentrates to Isolates was reversed to prioritized Whey Protein Isolates. Moreover, as Whey Protein Hydrolysates emerged, 100% Whey Protein added Hydrolysates in the form of HydroWheyTM to increase the overall quality and purity of the product. Along the way, the protein quantity was increased to the 24 grams per serving it is today. In the early 2000’s, as more Whey Protein products entered the marketplace, 100% Whey Protein became Gold Standard 100% Whey Protein™ to clearly identify itself to the world as the Whey Protein of choice globally among discriminating consumers who valued the taste, texture, value and consistency that came from the meticulous attention to detail within the Optimum Nutrition owned and operated manufacturing facilities.
Gold Standard Whey Protein Today: Optimum Nutrition is one of the most highly regarded sports nutrition brands in the world building a time-honored position of quality and trust in the industry going back to its roots in Downers Grove, Illinois in the US in 1986. Optimum Nutrition Gold Standard 100% Whey™ has made its own mark in sports nutrition history by consistent transformation in respect to advancements in technology and science and listening to you as the consumer along as the way. Today Gold Standard 100% Whey is recognized as the most awarded, most reviewed protein and best-selling whey protein powder in the world. It stands apart from the rest, because of its recognizable quality and consistency. No matter where you are in the world, quality is synonymous with Optimum Nutrition Gold Standard 100% Whey™.     </p>
     <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">How to Use Whey Protein?</h2>
     <p>
Whey is complex, but using it doesn’t have to be. Optimum Nutrition Gold Standard 100% Whey™ is Instantized, meaning that it is designed to mix easily with a spoon or shaker cup. However, you can take it to the next level by boosting it, blending it, baking it, cooking with it and more. You can amp up your Whey Protein by mixing with bases beyond water to add taste and texture. For example, mixing with milk, soy milk, almond milk, rice milk, juice and more. You can also blend in wholesome foods such as chia seeds, flaxseeds, berries, greens, oats, nuts, seeds, yogurt, honey and others. You can also cook and bake with your Whey Protein by mixing it into favorite foods, everyday mealtime recipes, and baked goods. However, you use your Protein, make it yours!       </p>
     <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">When to Use Whey Protein</h2>
     <p>
Around Activity: 2-4 hours before a physical activity, aim to consume a balance of Carbohydrates plus Protein. However, the closer you approach an activity, the more the focus goes to Carbohydrates. While whole foods should always be prioritized, if time and/or digestion are a concern, Whey Protein Shales can be a good solution.  Protein can also be taken any time post-workout to help support muscle recovery. Similar to before activity, you should aim to consume a balance of Protein with Carbohydrates and prioritize whole food sources. Again, if time, digestion and/or appetite in this period are a challenge, Whey Protein Shakes can be a good solution.     </p>
     
     <p>
Nutritional Gaps: Whey Protein can be added into your daily routine to help fill nutritional gaps. Meaning if Protein needs are not met through whole food alone, then Whey Protein supplements may be used. Protein can also be used during occasions you may not have a balance of Protein with other whole food macronutrients. Therefore, Whey Protein can help balance breakfast first thing in the morning, balance meals throughout the day, and balance your snacks. A benefit of ensuring Protein with each meal and/or snack is that Protein helps with satiety or a feeling a “fullness.” In other words, use anytime of the day you want to build up your nutrition.

However, wherever and whenever you choose to incorporate it into your day and your performance, there is only one Optimum Nutrition Gold Standard 100% Whey Protein™.     </p>
     
  </article>
  </div>
  <div class="container-fluid padding" style="color:white;">
   <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">OTHER ARTICLES</h2>
  </div>
   <div class="site-container">
        <div class="article-container">
           <!-- Articles2-->
          <article class="article-card">
            <figure class="article-image">
              <img src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%202%20IMAGE%20FINAL.png?v=1619934592566" alt="art1">
            </figure>
            <div class="article-content">
              <a href="article2.php" class="card-category">UNDERSTANDING THE BASICS OF PROTEIN</a>
              <h3 class="card-title">The Basics of Protein
              </h3>
              <p class="card-excerpt">
                Dietary protein is an essential macronutrient, which is required by all healthy adults on a daily basis.
              </p>
            </div>
          </article>
           <!-- Articles3-->
          <article class="article-card">
            <figure class="article-image">
              <img src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%203%20IMAGE%20FINAL.png?v=1619934603101" alt="art1">
            </figure>
            <div class="article-content">
              <a href="article3.php" class="card-category">ELECTROLYTES: SHOULD I SUPPLEMENT WITH ELECTROLYTES?</a>
              <h3 class="card-title">Bodies Fluid Balance
              </h3>
              <p class="card-excerpt">
                Sweat is primarily made up of water and also contains variable amounts of electrolytes (minerals).
              </p>
            </div>
          </article>
          <!-- Articles7-->
           <article class="article-card">
            <figure class="article-image">
              <img src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%202%20IMAGE%20FINAL.png?v=1619934592566" alt="art1">
            </figure>
            <div class="article-content">
              <a href="article2.php" class="card-category">PROTEIN QUALITY</a>
              <h3 class="card-title">Sufficient Quantities
              </h3>
              <p class="card-excerpt">
                When it comes to protein quality, not all protein sources are created equal...
              </p>
            </div>
          </article>
<!-- Articles5-->
           <article class="article-card">
            <figure class="article-image">
              <img src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%205%20IMAGE%20FINAL.png?v=1619934604198" alt="art1">
            </figure>
            <div class="article-content">
              <a href="article5.php" class="card-category">THE BASICS OF CREATINE</a>
              <h3 class="card-title">Creatine Sources
              </h3>
              <p class="card-excerpt">
                Creatine is made in the body and even found in the foods we eat..
              </p>
            </div>
          </article>
     </div>
  </div>

    <!-- Footer -->
    <footer>
      <div class="container-fluid padding">
        <div class="row text-center">
          <div class="col-md-4">
            <img src="https://cdn.glitch.com/e4fa8393-6a2f-4f21-8abc-dbe8b105143b%2FLOGO%20FINAL.png?v=1619803347662" style="width: 80px;height: 60px;">
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