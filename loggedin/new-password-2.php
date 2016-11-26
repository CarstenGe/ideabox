<?php include '../includes/header-loggedin.php'; 

$password = $_GET['password'];
$repeatpassword = $_GET['repeat-password'];
$newpassword = $_GET['new-password'];
$passwordDB = mysqli_query($db, "SELECT password FROM users WHERE name = '$username' ");
$passworddatabase = mysqli_fetch_row($passwordDB);
$passworddatabase = $passworddatabase['0'];

$password = md5($password);
$repeatpassword = md5($repeatpassword);
$newpassword = md5($newpassword);

if ($password != $passworddatabase) {
	header("Location:wrong-password.php");
}
else {
	$query = mysqli_query($db, "UPDATE users SET password='$newpassword' WHERE name='$username' ");
		if ($query) {
			header("Location:password-updated.php");
		}
		else {
			header("Location: error.php");
		}
}
?>