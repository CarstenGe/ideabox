<?php 
	include '../includes/header-loggedin.php';
?>
<h3>Add biography</h3>

<div class="grey-box col-4">
	<form method="get" action="biography-uploaded.php">
		<p>Tell us something about yourself</p>
		<p><textarea required="required" name="biography"></textarea></p>
		<input type="submit" value="OK">
		<a href="javascript:javascript:history.go(-1)"><input type="button" value="Go back" class="button-full"></a>
	</form>
	<br>
</div>
<div class="grey-box col-4">
	<p>You can add a short summary of your skills and interests below, so that other people can see them. You can add links to your portfolio or work.</p>
</div>