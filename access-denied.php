<?php include 'includes/header.php'; ?>
<p>Sorry. The username or password was wrong.<br>
You can <a href="signup.php">create an account</a> if you don't have one already.
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