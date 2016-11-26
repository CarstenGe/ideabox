<?php include 'includes/header.php'; ?>
You've successfully created an account, now you can <a href="login.html">login</a> below
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