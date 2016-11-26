<?php include '../includes/header-loggedin.php'; 
$biography = $_GET['biography'];
$biography = mysqli_real_escape_string($db, $biography);

	$sql = mysqli_query($db, "UPDATE users SET biography='$biography' WHERE name='$username' ");

	if ($sql) {
		header("Location:account.php");
	}
	else {
		header("Location:error.php");
	}
?>
