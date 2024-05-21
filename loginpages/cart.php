<?php
session_start();

require_once ("../products_connection/CreateDb.php");
require_once ("../products_connection/component.php");

// create instance of Createdb class // For Index webpage
$database = new CreateDb("Productdb", $tablename="Preworkout",
                         $tablename1="multivitamins",
                         $tablename2="massgainers",
                         $tablename3="proteinshakes",
                         $tablename4="creatine");

$dbc = mysqli_connect('localhost','root','', 'ProductDb');  

if(!(isset($_SESSION['cart']))){
  $_SESSION['cart'] = array();
}//if cart

if(isset($_GET['clear'])) {
  $_SESSION['cart'] = array();
}//clear cart

if(isset($_GET['pID'])) {
  $pID = $_GET['pID'];
  $quan = $_GET['quan'];

  if($quan > 0 && filter_var($quan, FILTER_VALIDATE_INT)) {
      $_SESSION['cart'][$pID] = $quan;
  } elseif($quan == 0) {
      unset($_SESSION['cart'][$pID]);
  } else {
      echo "Bad Input";
  }//if valid quan (QUANTITY)


}//isset
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

            
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="1milktea.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

        <style>
          /* Cart body background */
		       body{
            background: url('image/backg.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
            
          }

          /* CART RMOVE RESPONSIVE */
           @media (max-width: 1200px) {
	           a.removeCart{
		          margin-left:66.38% !important;
	            }
           }
           @media (max-width: 990px) {
	           a.removeCart{
		          margin-left:55.19% !important;
	            }
           }
           @media (max-width: 776px) {
	           a.removeCart{
		          margin-left:40.3% !important;
	            }
           }
           @media (max-width: 574px) {
	           a.removeCart{
		          margin-left:43.76% !important;
	            }
           }
           @media (max-width: 572px) {
	           a.removeCart{
		          margin-left:10.4% !important;
	            }
           }
           @media (max-width: 411px) {
	           a.removeCart{
		          margin-left:11.5% !important;
	            }
           }
           @media (max-width: 360px) {
	           a.removeCart{
		          margin-left:-1% !important;
	            }
           }


        </style>

    <!-- FOR REDIRECT/Remove URL PARAMS -->
    <script>    
        if(typeof window.history.pushState == 'function') {
          window.history.pushState({}, "Hide", "cart.php");
        }
      </script>


    <title>Shopping Cart - Whey Queen</title>
</head>
<body>


<nav class="navbar navbar-light navbar-expand-md bg-dark justify-content-between">
<a class="navbar-brand">
    <img src="./images/headerlogo.png" width="130" alt="">
  </a>
      <!-- CART ICON -->
    <a class="nav-item nav-link active mt-3">
    <h5 class="px-2 mt-1 cart" style="color: white;">
       <i class="fas fa-shopping-cart"></i>
         <?php

           if (isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo "<span id=\"cart_count\" class=\" positioncart text-light bg-danger px-2 py-0 rounded-pill \">$count</span>";
            }else{
              echo "<span id=\"cart_count\" class=\"text-dark\">0</span>";
            }
        ?>
   </h5>
  </a>
<!-- END OF CART ICON -->
</nav>

  <div class="pb-5">
    <div class="container">
      <div class="row">
          <a href="home.php">
            <button class="btn-light btn1 px-4 py-2 mt-5" type="button"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></button>
					</a>
          <a  class="removeCart" style="margin-left:71.726%;" href="products.php">
            <a class="btn2 px-4 py-2 mt-5" href="<?php echo htmlentities($_SERVER['PHP_SELF']);?>?clear=1"><i class="fas fa-trash-alt"></i></a>
					</a>
        <div class="col-lg-12 p-5 mb-5 bg-white rounded-bottom shadow-sm mb-5">
            
            
          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bgs">
                    <div class="p-2 px-4 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bgs">
                    <div style="text-align: center;" class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bgs">
                    <div style="text-align: center;" class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bgs">
                    <div style="text-align: center;" class="py-2 text-uppercase">SubTotal</div>
                  </th>
                  <th scope="col" class="border-0 bgs">
                    <div style="text-align: center;" class="py-2 text-uppercase">Remove</div>
                  </th>
                  
                </tr>
              </thead>
              <tbody>

                <?php
                    $grand = 0;
                    $grand_T = 0;
                    $tax = 0;
                    $taxable = 0;
                    $ship = 45;
                    $sub = 0;
                    foreach($_SESSION['cart'] as $key => $val){
                      

                        $sql="SELECT * FROM preworkout WHERE id = '$key' 
                              UNION ALL 
                              SELECT * FROM multivitamins WHERE id = '$key'
                              UNION ALL
                              SELECT * FROM massgainers WHERE id = '$key'
                              UNION ALL
                              SELECT * FROM proteinshakes WHERE id = '$key'
                              UNION ALL
                              SELECT * FROM creatine WHERE id = '$key'";
                        
                        $result = mysqli_query($dbc, $sql) or die("Bad SQL: $sql");
                        $row = mysqli_fetch_assoc($result);
                                  
                        $sub = $val*$row['product_price'];
                        $grand += $sub;
                        $tax = 0.12;
                        $taxable = ($grand * $tax);
                        $grand_T = $grand + $taxable + $ship;


                        cartElement($row['product_image'], $row['product_name'],$row['product_price'], $sub, $val, $key);

                    }//foreach     
                    if (empty($_SESSION['cart'])){
                        echo "<td colspan='6'style='border: none !important; text-align: center;'>Your have an empty cart.</td>";
                    }

                ?>
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>
    
      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bgs rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input id="coupon" type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button id="button-addon3" type="button" class="btn btn-warning px-4 rounded-pill" ><i class="fa fa-gift mr-2"></i>Apply coupon</button>
              </div>
            </div>
          </div>
          <div class="bgs rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bgs rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Items 
              </strong><strong>
              <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "$count";
                            }else{
                                echo "<h6>Price (0)</h6>";
                            }
                ?>
              
              </strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal</strong><strong>₱<?php echo number_format($grand,2); ?></strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>₱<?php echo number_format($ship,2); ?></strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>₱<?php echo number_format($taxable,2); ?></strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">₱<?php echo number_format($grand_T,2); ?></h5>
              </li>
            </ul>
            <?php
              if (empty($grand)) {
                echo "<a href=\"#\" class=\"btn btn-danger rounded-pill py-2 btn-block\">Your cart is empty</a>";
              }else{
                echo "<a onclick=\"myFunction()\" href=\"thankyou.php\" class=\"btn btn-success rounded-pill py-2 btn-block\">Procceed to checkout</a>";
              }
            ?>
             
          </div>
        </div>
      </div>

    </div>
  </div>


</body>
</html>