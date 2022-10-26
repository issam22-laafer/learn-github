<?php
include("../controller/signupcontrol.php");
// include("../../model/signup_model.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css" />
    <script src="jquery-3.6.0.min.js"></script>
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
        <a href="signin.php">sign in</a>
      </div>
    </nav>

    <
    <section class="sign_section">
      <div class="container">
        <h2>sign up</h2>
        <?php
        if(isset($mssg)){
          echo $mssg;
        }
         
        ?>
        <form action="" method="POST">
          <label for="name">
            Name <input type="text" id="name" placeholder="Name" name="name" />
          </label>
          <label for="last_name">
            Last name
            <input type="text" id="last_name" placeholder="Last name" name="lastname" />
          </label>
          <label for="username">
            Username <input type="text" id="username" placeholder="Username" name="username" />
          </label>
          <label for="email">
            Email <input type="email" id="email" placeholder="Email" name="email" />
          </label>
          <label for="password">
            Password
            <input type="password" id="password" placeholder="Password" name="password" />
          </label>
       
          <div class="sign_buttons">
            <input type="submit" name="submit" value="Sign Up" />
            <input type="reset" value="Reset" />
          </div>
        </form>
      </div>
    </section>
  </body>
</html>
