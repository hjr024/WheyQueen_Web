<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'wheyqueenlogin'); 

$name = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertables where name ='$name'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num >= 1)
{
	echo "Username already taken";
	
}else{
	$reg = "insert into usertables(name, password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";

}
//header('location:login.php');
?>