<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="css/login2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
   <h1 class="head">Welcome Back!</h1>
  <img src="img/2.jpg" class="image">
  <div class="container">
    <div class="outer">

      <div class="bg-img">
            <div class="content">
              <header>Admin Login</header>
              <form method="POST" action="code.php">
                <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" placeholder="Username" id="user" name="user_name" required>
                </div>
      <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key"  placeholder="Password" id="pass2" name="password" required>
                  <span class="show">SHOW</span>
                </div>
      <div class="field">
                  <input type="submit" name="login_btn" value="LOGIN">
                </div>
      </form>

      <div class="login">
        <?php
        if(isset($_GET['error'])==true){
        echo '<font color="#f44336"><h3>Wrong Username/Password</h3></font>';
        }
        ?>
								<a href="index.php">
                  <button class="members">Go back</button>
									</a>
					</div>
      </div>
      </div>
      </div>
      <script src="js/Login.js"></script>

      </div>
    </div>

</body>
</html>
