<?php

include 'includes/connect.php';

if(isset($_POST["submit"]))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$repeatPassword = $_POST["repeatPassword"];
	 
	$name = mysqli_real_escape_string($db, $name);
	$email = mysqli_real_escape_string($db, $email);
	$password = mysqli_real_escape_string($db, $password);
	$password = md5($password);
	$repeatPassword = mysqli_real_escape_string($db, $repeatPassword);
	$repeatPassword = md5($repeatPassword);
}
$sql = "SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$sql2 = "SELECT name FROM users WHERE name='$name'";
$result2 = mysqli_query($db,$sql2);
$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1){
	header("Location:email-exists.php");
}
elseif ($password != $repeatPassword) {
	header("Location:wrong-password.php");
}
elseif(mysqli_num_rows($result2) == 1){
	header("Location:username-exists.php");
}
else {
	$query = mysqli_query($db, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
 
	if($query){
		header("Location:account-created.php");
	}
	else {
		header("Location:signup.php");
	}
}
?>