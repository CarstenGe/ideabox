<?php session_start() ;?>
<!DOCTYPE html>
<?php include '../includes/connect.php'; ?>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png" />
	<title>Ideabox</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<img src="../img/logo.png">
	</header>

<?php
$username = $_SESSION["username"];
$sql = mysqli_query($db,"DELETE FROM users WHERE name='$username' ");
?>
<p>Your account has been successfully deleted.</p>