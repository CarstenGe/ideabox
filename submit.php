<?php include 'includes/header.php'; ?>
<h1>Submit an idea</h1>
<div class="grey-box submit">
	You must be <a href="login.html">logged</a> in to submit an idea<br>
	or <a href="signup.php">sign up</a> if you don't have an account yet.
</div>
<section class="container">
  <div class="short-fields">
    <h1>Login</h1>
    <form method="post" action="login.php"> 
      <div class="grey-box">
        <p>Username</p>
        <input type="text" name="name">
        <p>Password</p>
        <input type="password" name="password">
        <p class="submit">
        <input type="submit" value="Login"></p>
      </div>
    </form>
  </div>
</section>
</body>
</html>