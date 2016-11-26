<?php include '../includes/header-loggedin.php'; ?>
<p>Are you sure you want to delete your account? This cannot be undone!</p>
<div class="delete-idea">
	<form method="post" action="account-deleted.php">
		<input type="submit" value="Yes, delete it">
	</form>
</div>
<div class="delete-button">
	<a href="javascript:history.go(-1)">No, go back</a>
</div>