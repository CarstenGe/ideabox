<?php

include 'includes/connect.php';

// username and password sent from form 
$username=$_POST['name']; 
$password=$_POST['password']; 
$password = md5($password);

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($db, $username);
$password = mysqli_real_escape_string($db, $password);
$sql="SELECT * FROM users WHERE name='$username' and password='$password'";
$result=mysqli_query($db, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    header("Location:loggedin/index.php");
}
else {
	header("Location:access-denied.php");
}