<?php
session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'wheyqueenlogin');

$name = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertables where name ='$name' && password = '$pass'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$name = $row["name"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $name;
	}
	header('location:home.php');
}
else
{
	header('location:login.php');
}
?>