<?php
include("../controller/signin_control.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/signin.css" />
  </head>
  <body>
    <nav class="nav">
      <input type="checkbox" id="nav-check" />
      <div class="nav-header">
        <div class="nav-title">Github</div>
      </div>
      <div class="nav-btn">
        <label for="nav-check">
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>

      <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="signup.php">sign up</a>
      </div>
    </nav>

    <section class="login_section">
      <div class="container">
        <h2>Login</h2>
        <?php
        if(isset($mssg)){
          echo $mssg;
        }
        ?>
        <form action="" method="POST">
          <label for="username">
            username <input type="text" id="username" placeholder="username" name="username" />
          </label>

          <label for="password">
            Password
            <input type="password" id="password" placeholder="password" name="password" />
          </label>

          <div class="sign_buttons">
            <input type="submit" name='login' value="login" />
          
          </div>
        </form>
      </div>
    </section>
  </body>
</html>
