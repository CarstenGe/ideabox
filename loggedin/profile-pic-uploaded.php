<?php include "../includes/header-loggedin.php";
	$profile_pic = $_GET['url-profile-pic'];
	$sql = mysqli_query($db, "UPDATE users SET profilepic='$profile_pic' WHERE name='$username' ");

	if ($sql) {
		header("Location:account.php");
	}
	else {
		header("Location:error.php");
	}
?>