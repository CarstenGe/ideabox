<form method="post" action="db.php">
	<div class="grey-box">
		<p>Username</p>
		<input name="name" type="text" required="required"/>
		<p>Password</p>
		<input name="password" type="password" required="required" />
		<p>Repeat password</p>
		<input name="repeatPassword" type="password" required="required" />
		<p>Email</p>
		<input name="email" type="email" required="required" />
		<br><br>
		<div class="g-recaptcha" data-sitekey="6LcdaCITAAAAAMqwlK3lJmiLr2OTlYyD27vnh4yR"></div>
		<br>
		<input type="submit" name="submit" value="Sign up" />
	</div>
</form>