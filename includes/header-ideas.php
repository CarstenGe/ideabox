<?php session_start(); ?>
<!DOCTYPE html>
<?php include '../../includes/connect.php'; ?>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.png" />
	<title>Ideabox</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
	<header>
		<a href="index.php" class="logo">Ideabox</a>
		<nav>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../list-of-ideas.php">List of ideas</a></li>
				<li><a href="../submit.php">Submit an idea</a></li>
				<div class="dropdown" style="float:right;">
					<li><a href="../account.php">
					<?php 
						$username = $_SESSION["username"];
					?>
					&#9881;
				</a></li>
					<div class="dropdown-content">
					    <a href="../account.php">Your profile</a>
					    <!--<a href="#">Settings</a>-->
					    <a href="../logout.php">Logout</a>
					</div>
			</ul>
		</nav>
	</header>