<?php 
	include '../includes/header-loggedin.php';
?>
	<p>Your idea has been deleted.</p>

<?php
	$ideatitle = $_POST['ideatitle'];
	$sql = mysqli_query($db,"DELETE FROM ideas WHERE ideatitle='$ideatitle'");

?>