<?php include '../includes/header-loggedin.php'; ?>
<form method="get" action="new-password-2.php">
	<h3>Change your password</h3>
	<div class="grey-box col-3">
		<p>If you want to change your password, please fill out the field below.</p>
		<p>Old password</p>
		<input type="password" name="password" required="required">
		<p>Repeat password</p>
		<input type="password" name="repeat-password" required="required">
		<p>New password</p>
		<input type="password" name="new-password" required="required">
		<p><input type="submit" value="Change password">
		<a href="javascript:javascript:history.go(-1)"><input type="button" value="Go back" class="button-full"></a></p>
	</div>
</form>