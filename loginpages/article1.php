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
                  <a class="dropdown-item" href="Creatine.php" target="_blank">Creatine</a>
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
   <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;"> UNDERSTANDING THE BASICS OF MUSCLE RECOVERY</h2>
   Protein metabolism is never static. The body simultaneously degrades and synthesizes proteins. Meaning the body is constantly building and breaking down muscle protein. Not many are aware of this phenomenon, but it’s actually a natural occurrence which happens within healthy adults. The challenge comes with exercise as it could increase muscle protein breakdown. During exercise, we are physically exerting our body and muscles. In turn, that intense physical activity can lead to micro-damage or mini-tears in the muscle fibers. This is a normal response to vigorous exercise. The degree to which the breakdown occurs will depend on how rigorous the activity is as well as the level of exertion. Keep in mind that micro-tears are also an important stimulus for muscle growth to occur. We’ll talk more about that later, but let’s get to what muscle recovery really looks like.
    </p>
 <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;"> Muscle Recovery</h2>
  <p>
    Micro-damage or micro-tears in muscle may occur as a response to very intense or prolonged exercise.  The micro-tears in the muscles are an important stimulus required for muscle growth. Consequently, muscles need adequate time and nutrition to recover. Most often people tend to think muscle recovery only happens after an activity; however, muscle recovery is a 24-hour process that can take up to several days. The amount of time your muscles need to recover ultimately depends on you, your body, and type of physical activity, duration and intensity. Some may require more time than others. The amount of muscle recovery needed differs from person to person and from activity to activity.
    </p>
     <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;"> Muscle Rebuilding</h2>
     <p>
       Muscular hypertrophy relates to muscle growth. The human body does not build new cells, but rather the cells can rebuild and increase in size. Chronic hypertrophy is an increase in muscle size with long-term resistance training. It reflects actual structural changes in muscle with bigger fibers due to more protein, glycogen and water in your muscle. In order for muscle hypertrophy to occur, synthesis must be greater than breakdown and the human body requires a stimulus. A stimulus can come in the form of exercise and/or activity. Exercise can help stimulate a response for muscles to recover and rebuild. You can manipulate muscle stimulus through increased resistance training and weight training. Over time, you’ll need to progressively increase the stimulus to help muscle cells grow and continue your muscle ‘gains.’ Building muscle is not an overnight phenomenon – it takes time. Building muscle can take many weeks. The amount of time depends on many factors like training regimen, nutrition, rest, and recovery schedule.
     </p>
     <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">Protein and Muscle Recovery and Building</h2>
     <p>
       Consume complete, high-quality proteins to help support muscle recovery and building. All animal-based protein sources are considered complete proteins. Complete proteins include foods such as meat, poultry, seafood, eggs and dairy products. Soy products are also a plant-based, complete protein source. Spread your protein throughout the day (including post-exercise) across several meals and snacks. Aim for about 20 to 40 grams of protein with each eating occasion. Dietary examples include 113 gram skinless baked chicken breast = ~26 grams protein, 100 grams of lean ground beef = ~22 grams protein, and 1 large egg = ~6 grams.
     </p>
     <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">Protein Timing</h2>
     <p>
       There is a common perception that athletes need to consume protein immediately post-workout because muscle protein synthesis is limited to a specific recovery window, commonly known as the ‘anabolic window.’ However, some studies suggest muscle recovery may last for several days after intense exercise. Muscle protein synthesis (the process of muscle recovery and rebuilding) can remain elevated for up to 48 hours after exercise. Nevertheless, post-workout nutrition is a great fueling opportunity as muscles are receptive to protein following exercise. But you don’t need to slam a protein shake minutes within finishing your workout. Protein can be consumed anytime following activity. Aim to refuel with protein at a time that works best for you. Remember, muscle recovery is an ongoing process that can take up to several days.
     </p>
     <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">Protein Timing</h2>
     <p>
      There is a common perception that athletes need to consume protein immediately post-workout because muscle protein synthesis is limited to a specific recovery window, commonly known as the ‘anabolic window.’ However, some studies suggest muscle recovery may last for several days after intense exercise. Muscle protein synthesis (the process of muscle recovery and rebuilding) can remain elevated for up to 48 hours after exercise. Nevertheless, post-workout nutrition is a great fueling opportunity as muscles are receptive to protein following exercise. But you don’t need to slam a protein shake minutes within finishing your workout. Protein can be consumed anytime following activity. Aim to refuel with protein at a time that works best for you. Remember, muscle recovery is an ongoing process that can take up to several days.
     </p>
     <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">Protein Amounts</h2>
     <p>
      The body cannot store excess amino acids, therefore it’s crucial to consume sufficient amounts of protein each day. The amount you need each day really depends on you. Protein needs may change based on age, body composition and level of activity. Generally, the more active you are the more protein may be needed. In general, protein should make up about 10 to 35% of your total daily calories. Generally, healthy adults should aim to get 0.8-1 g of protein per kilogram of bodyweight each day spread across several meals and snacks. To build muscle, it’s recommended to include a combination of resistance training plus adequate nutrition including sufficient protein. For building muscle it’s recommended to consume 1.2 - 2.2 grams of protein per kilogram of bodyweight per day across several meals and snacks. And for team sports and endurance sports, aim to consume between 1.2 to 2.0 grams of protein per kilogram of bodyweight per day spread across several meals and snacks to help support recovery.
     </p>
     <h2 style="text-align: center; font-family: 'Bebas Neue', cursive; font-size: 40px;">Wrap Up</h2>
     <p>
       During exercise, muscles experience micro-damage – the level of damage depends on many factors as mentioned above. It’s important to allow muscles to adequately recover and rebuild following physical activity. Implement an appropriate routine, which includes proper rest and nutrition. Be sure to include complete high-quality proteins in your diet to help support muscle recovery. Remember, muscle recovery is an on-going process. Therefore, it’s important to look for additional opportunities beyond exercise.
     </p>
     
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
          <!-- Articles4-->
           <article class="article-card">
            <figure class="article-image">
              <img src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FARTICLE%204%20IMAGE%20FINAL.png?v=1619934604184" alt="art1">
            </figure>
            <div class="article-content">
              <a href="article4.php" class="card-category">UNDERSTANDING GOLD STANDARD 100% WHEY PROTEIN™</a>
              <h3 class="card-title">What is Whey Protein?
              </h3>
              <p class="card-excerpt">
                Whey is a Dairy Protein derived from cow’s milk. Cow’s milk is made up of approximately 88% water and variable amounts of the three macronutrients..
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