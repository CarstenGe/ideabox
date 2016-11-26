<?php 
	include '../includes/header-loggedin.php';

	$ideatitle = $_POST['ideatitle'];
	$idea = $_POST['idea'];
	$category = $_POST['category'];
	$id = $_POST['id'];
	$sql = mysqli_query($db, "UPDATE ideas SET ideatitle='$ideatitle', idea='$idea', category='$category' WHERE uid='$id' ");

	$ur = mysqli_query($db, "SELECT url FROM ideas WHERE ideatitle='$ideatitle' ");
	$url = mysqli_fetch_row($ur);
	$url = $url['0'];

	header("Location: ideas/$url.php");
?>