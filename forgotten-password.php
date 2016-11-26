<?php include 'includes/header.php'; ?>
<h3>Have you forgotten your password?</h3>
<form action="forgotten-password-2.php" method="get">
	<div class="grey-box col-3">
		<p>Have you forgotten your username or password? <br>
		Enter your email below and you'll receive an email with instructions.</p>
		<p><input type="email" name="email" required="required"></p>
		<p><input type="submit" value="send email">
		<a href="javascript:javascript:history.go(-1)"><input type="button" value="Go back" class="button-full"></a></p>
	</div>
</form>