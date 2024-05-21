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
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

      <!-- FOR MODAL -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <link type="text/css" rel="stylesheet" href="trackorder.css">

     
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	 
	 <!--Fonts-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
       integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	 <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
	 
	 <!-- ICON -->
	 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="style.css">

     <link type="text/css" rel="stylesheet" href="1milktea.css">
	 
	 <!-- CALENDAR -->	
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./javascript-calendar.css" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
     <style>
     @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
          /* Cart body background */
          body{
            background: url('image/backg.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
            color:white;
            
          }
     h1{
        font-family: 'Bebas Neue', cursive;
     }
      .jumbotron{
        background-color: black;
      }
     </style>

     <title>WHEY QUEEN | THANK YOU PAGE</title>
<link rel="icon" href="./images/logotitle.png"  type="image/png">
</head>
    
<body>
<nav class="navbar navbar-light navbar-expand-md bg-dark justify-content-between">
<a class="navbar-brand">
    <img src="./images/headerlogo.png" width="130" alt="">
  </a>
</nav>

<div class="jumbotron mt-5 text-center">
  <h1 class="display-2">Thank You!</h1>
  <p class="lead"><strong>Dear <b style="color: #bb4546;"><?php echo $email; ?></b>, Please check your email</strong> for further instructions on how to complete your order.</p>
  <hr class="w-25"style="margin: auto;" style="border-width:0;"/>
  <p>
    Having trouble? <a href="contactus.php?clear=1">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-warning btn-sm" href="home.php?clear=1" role="button">Continue to homepage</a>
    <a class="btn btn-danger btn-sm"  type="button"data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-info" style="margin-right:3%;"></i>Order details</a>
  </p>
</div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">
                <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                <div class="px-4 py-5">
                    <h5 class="text-uppercase text-dark"><?php echo $email; ?></h5>
                    <h4 class="mt-5 theme-color mb-5 text-dark">Thanks for your order</h4> <span class="text-dark">Payment Summary</span>
                    <div class="mb-3">
                        <hr style="border-width:0; color:#f7b193;">
                    </div>

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

                        orderElement($row['product_name'], $sub, $val);

                        $grand += $sub;
                        $tax = 0.12;
                        $taxable = ($grand * $tax);
                        $grand_T = $grand + $taxable + $ship;

                    }//foreach     
                ?>
                      <?php ?>
                        <div class="d-flex justify-content-between text-dark"> <small>Shipping</small> <small>₱ <?php echo number_format($ship,2); ?></small> </div>
                        <div class="d-flex justify-content-between text-dark"> <small>Tax</small> <small>₱ <?php echo number_format($taxable,2); ?></small> </div>
                        <div class="d-flex justify-content-between mt-3 text-dark"> <span class="font-weight-bold">Total</span> <span class="font-weight-bold">₱ <?php echo number_format($grand_T,2);?></span> </div>

                </div>
            </div>
        </div>
    </div>
</div>