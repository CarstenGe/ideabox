<?php include 'includes/header.php'; 

$email = $_GET['email'];
$user = mysqli_query($db, "SELECT name FROM users WHERE email = '$email' ");
$username = mysqli_fetch_row($user);
$username = $username['0'];



$message = "Hi there,\r You're username is ".$username.". For safety reasons your password will not be included in this email, but you can ". "<a href=\"loggedin/new-password.php\">" ."change it"."</a>"." to something you can remember.";
$message = wordwrap($message, 70, "\r\n");

mail($email, 'Ideabox login retrieval', $message);

?>
<h3>Email has been sent</h3>
<form action="forgotten-password-2.php" method="get">
	<div class="grey-box col-3">
		<p>An email has been sent to <?php echo $email ?> with instructions.</p>
		<p><a href="login.html">Go back to login.</a></p>
	</div>
</form>