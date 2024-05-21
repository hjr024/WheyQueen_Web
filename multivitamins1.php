<?php
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
    <link rel="stylesheet" type="text/css" href="multivitamins1.css">
    <link rel="icon" href="image/LOGO FINAL.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Whey Queen Supplments | Multi-Vitamins</title>
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
                    <a class="dropdown-item" href="multivitamins1.php">Multi-Vitamins</a>
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
      <!-- Information-->
  
  <br>
  <br>
 <div class="w3-row-padding">
  <div class="w3-container w3-padding-32" id="preworkout">
    <h3 style=" font-family: 'Bebas Neue', cursive; font-size: 40px; color:white;" align="center" class="w3-border-bottom w3-border-light-grey w3-padding-16">MULTI-VITAMINS</h3>
    <p style="font-family: 'Bebas Neue', cursive; font-size: 20px; color:white;" align="center">Multi-vitamins contains the range of vitamins that your body needs and this should be taken every day. People intake multi-vitamins to promote health and reduce the risk of disease.</p>
  </div>
  </div> 
  
   <!-- List Products Categories-->
  <div class="row no-gutters">
  <div class="col-6 col-md-4">
        <section class="panel">
            <header class="panel-heading">
            <br>
            <br>
            <p style="font-family: 'Bebas Neue', cursive; font-size: 45px; color:white;" align="center">Shop by Category</p>
            </header>
            <div class="panel-body">
            <div style="width:260px; margin:0 auto;">
                <ul class="nav prod-cat">
                  <ul>
                    
                     <li>
                      <a href="multivitamins1.php" class="active"><p style=" font-family: 'Segoe UI', cursive; font-size: 20px; color:white"><b>Multi-Vitamins(6)</b></p></a>
                    </li>
        
                    <li>
                        <a href="massgainers1.php" class="active"><p style=" font-family: 'Segoe UI', cursive; font-size: 20px; color:white"><b>Mass Gainers(10)</b></p></a>
                    </li>
                  
                    <li>
                        <a href="proteinshakes1.php" class="active"><p style="font-family: 'Segoe UI', cursive; font-size: 20px; color:white"><b>Protein Shakes(9)</b></p></a>
                    </li>
                  
                    <li>
                        <a href="preworkout1.php" class="active"><p style=" font-family: 'Segoe UI', cursive; font-size: 20px; color:white"><b>Pre-Workout(5)</b></p></a>
                    </li>
      
                    <li>
                        <a href="creatine1.php" class="active"><p style=" font-family: 'Segoe UI', cursive; font-size: 20px; color:white"><b>Creatine(5)</b></p></a>
                   </li>
                  </ul>
                </ul>
            </div>
              </div>
    </section></div>
    
    <!-- List Products -->
    <div class="col-sm-6 col-md-8"><div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
    <?php
       $result1 = $database->getData1();
      while($row=mysqli_fetch_assoc($result1)){
        component_logoutpreworkout(
        $row['product_name'],
        $row['product_price'], 
        $row['product_image'], 
        $row['id']);
      }
      ?>
      
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="image/b5.png" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true"><b>150TABS ON OPTI-MEN</b></a> </h6> <a href="#" class="text-muted" data-abc="true"></a>
                    </div>
                
                    <h3 class="mb-0 font-weight-semibold, red">₱1,550.00</h3>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <div class="text-muted mb-3">34 reviews</div> <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                </div>
            </div>
        </div>
      
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="image/1.png" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true"><b>60CAPS PS VITALINX</b></a> </h6> <a href="#" class="text-muted" data-abc="true"></a>
                    </div>
                    <h3 class="mb-0 font-weight-semibold, red">₱1,350.00</h3>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <div class="text-muted mb-3">34 reviews</div> <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                </div>
            </div>
        </div>
      
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2F3.png?v=1619529994977" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true"><b>FINAFLEX Pure Multi Ultimate Daily</b></a> </h6> <a href="#" class="text-muted" data-abc="true"></a>
                    </div>
                    <h3 class="mb-0 font-weight-semibold, red">₱1,400.00</h3>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <div class="text-muted mb-3">34 reviews</div> <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                </div>
            </div>
        </div>
      
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2F2.png?v=1619682027582" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true"><b>GASPARI Anavite - Ultimate Performance</b></a> </h6> <a href="#" class="text-muted" data-abc="true"></a>
                    </div>
                    <h3 class="mb-0 font-weight-semibold, red">₱1,500.00</h3>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <div class="text-muted mb-3">34 reviews</div> <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                </div>
            </div>
        </div>
      
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2F969cc637-5c70-4a78-aaa0-58b8e852aaa0.image.png?v=1619684096771" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true"><b>SAN High Potency Vitamin D3</b></a> </h6> <a href="#" class="text-muted" data-abc="true"></a>
                    </div>
                    <h3 class="mb-0 font-weight-semibold, red">₱1,500.00</h3>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <div class="text-muted mb-3">34 reviews</div> <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                </div>
            </div>
        </div>
    </div>
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
  <script> 

function showAlert() {
  var myText = "Please login First before buying!!!";
  alert (myText);
  return false;
}

</script> 
</body>
</html>