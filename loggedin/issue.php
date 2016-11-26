<?php session_start();
	include '../includes/connect.php';
	$url = $_GET["url"];

	//ISSUE
	$issue = $_POST["issue"];

	$username = $_SESSION["username"];

	$i = mysqli_query($db, "SELECT issues FROM ideas WHERE url = '$url' ");
	$issu = mysqli_fetch_row($i);

	$issue4DB = $issu['0']."<p>".$username." says ". "\"$issue\"" ."<small> (on ".date("Y/m/d") . " at " . date('H:i').") </small></p>";

	$query = mysqli_query($db, "UPDATE ideas SET issues = '$issue4DB' WHERE url='$url'");

	//NOTIFICATION
	$post = mysqli_query($db,"SELECT PostedBy FROM ideas WHERE url='$url' ");
	$postedBy = mysqli_fetch_row($post);
	$postedBy = $postedBy['0'];

	$notif = mysqli_query($db, "SELECT notifications FROM users WHERE name='$postedBy'");
	$notification = mysqli_fetch_row($notif);

	$ideat = mysqli_query($db, "SELECT ideatitle FROM ideas WHERE url='$url' ");
	$ideatitle = mysqli_fetch_row($ideat);
	$ideatitle = $ideatitle['0'];

	$newNotification = $username . " reported an issue on <a href=\"ideas/$url.php\"> " . $ideatitle . "</a> on " . date("Y/m/d") . " at " . date('H:i');

	$updateNotifications = "<p>" . $newNotification . "</p>" . $notification['0'];

	$query2 = mysqli_query($db,"UPDATE users SET notifications = '$updateNotifications' WHERE name = '$postedBy' ");

	//REDIRECT
	if($query){
		header("Location: " . $_SERVER["HTTP_REFERER"]);
	}
	else {
		header("Location:error.php");
	}	
?>