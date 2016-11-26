<?php 
	include '../includes/header-loggedin.php';

	//UPLOAD
	$url = $_GET['url']; 
	$description = $_GET['description'];
	$url_files = $_GET['url-files'];

	$file = mysqli_query($db, "SELECT files FROM ideas WHERE url='$url' ");
	$files = mysqli_fetch_row($file);
	$url_files = $files['0'] . "<p><a href=\"$url_files\" target=\"_blank\">" . $description . "</a></p>";
	

	$sql = mysqli_query($db, "UPDATE ideas SET files='$url_files' WHERE url='$url' ");

	//NOTIFICATION
	$post = mysqli_query($db,"SELECT PostedBy FROM ideas WHERE url='$url' ");
	$postedBy = mysqli_fetch_row($post);
	$postedBy = $postedBy['0'];

	$notif = mysqli_query($db, "SELECT notifications FROM users WHERE name='$postedBy'");
	$notification = mysqli_fetch_row($notif);

	$ideat = mysqli_query($db, "SELECT ideatitle FROM ideas WHERE url='$url' ");
	$ideatitle = mysqli_fetch_row($ideat);
	$ideatitle = $ideatitle['0'];

	$newNotification = $username . " uploaded files to <a href=\"ideas/$url.php\"> " . $ideatitle . "</a> on " . date("Y/m/d") . " at " . date('H:i');

	$updateNotifications = "<p>" . $newNotification . "</p>" . $notification['0'];

	$query2 = mysqli_query($db,"UPDATE users SET notifications = '$updateNotifications' WHERE name = '$postedBy' ");

?>
<h3>Files successfully uploaded</h3>
<div class="col-6 grey-box"><p>Your files with description "<i><?php echo $description ?></i>" has been successfully uploaded. <br><br>
Go back to the <a href="list-of-ideas.php">list</a> to look at other ideas or go back to the <a href="ideas/<?php echo $url ?>.php">idea page</a>.</p></div>