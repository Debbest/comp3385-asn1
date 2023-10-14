<?php
?>
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <div class="login-container">
      <header>
        <img src="images/logo.png" alt="logo">
      </header>

      <body>
        <form class="login-container" method="post" action="/app/controller/LoginController.php">
          <label for="username"> Username: </label>
          <input type="text" class="username" name="username">

          <label for="password">Password: </label>
          <input name="password" type="password" class="password">

          <input type="hidden" name="login">
          <button type="submit">Login</button>
        </form>
      </body>
    </div>

<?php
  include ("footer.php");
?>