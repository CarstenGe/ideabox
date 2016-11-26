<?php
include "../includes/connect.php";
	session_start();
	$username = $_SESSION["username"];
	$url = $_GET["url"];

//WORKING ON THIS
$result = mysqli_query($db, "SELECT workingOnThis FROM ideas WHERE url='$url'");
	$work = mysqli_fetch_row($result);

$workingOnThis =  "<p>" . $username . " started working on this on ".date("Y/m/d")." at ".date('H:i')."</p>" . $work['0'];

$query = mysqli_query($db, "UPDATE ideas SET workingOnThis = '$workingOnThis' WHERE url='$url'");

//NOTIFICATION
$post = mysqli_query($db,"SELECT PostedBy FROM ideas WHERE url='$url' ");
$postedBy = mysqli_fetch_row($post);
$postedBy = $postedBy['0'];

$notif = mysqli_query($db, "SELECT notifications FROM users WHERE name='$postedBy'");
$notification = mysqli_fetch_row($notif);

$ideat = mysqli_query($db, "SELECT ideatitle FROM ideas WHERE url='$url' ");
$ideatitle = mysqli_fetch_row($ideat);
$ideatitle = $ideatitle['0'];

$newNotification = $username . " started working on <a href=\"ideas/$url.php\"> " . $ideatitle . "</a> on " . date("Y/m/d")." at ".date('H:i');

$updateNotifications = "<p>" . $newNotification . "</p>" . $notification['0'];

$query2 = mysqli_query($db,"UPDATE users SET notifications = '$updateNotifications' WHERE name = '$postedBy' ");

//REDIRECT

header('Location:account.php');
?>