<?php

session_start();

include("signup.php");
if(empty($_SESSION['username'])){
  header('Location. login.php');
}

?>


<!DOCTYPE html>
<html>
<head>

  <title>Validated Login Form</title>

  <link rel="stylesheet" href="css/login.css">
 <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  <script src="js/validation.js"></script>

</head>
<body>

  <h1 class="head">Welcome Back!</h1>
  <img src="img/2.jpg" class="image">
  <div class="container">
    <img src="img/logo.png">
    <h1 class="label"><span style="color:white ; font-style:Sans-serif; font-weight: medium;">Member Login</span></h1>


    <form class="login_form" method="POST" action="login.php">

      <div class="font">Username</div>
      <input type="text" name="user_name" id="username" onkeyup="nospaces(this)" required>
      <div class="font font2">Password</div>
      <span><input type="Password" id="password" name="pass_word" required></span>

      <i class="far"  id="hide" onclick="show()"></i>
      <i class="far"  id="show" onclick="show()"></i>
       <input type="submit" class="button" value="Login" name='login'>

      <p class="paspas">Log in as</p>
      <a href="admin.php"><input type = "button" class="button" value="Admin Login"></a>
    </form>


   <a href="#"><p class="forgot">Forgot password?</p></a>
    <div class="box">
    <input type="checkbox">
          <label for="checkbox" > Remember me</label>
  </div>
    <button onclick="document.getElementById('bg-modal').style.display = 'block'" id="button" class="button3">Sign Up</button>
</div>
   <div id="bg-modal" class="modal">

        <div action="" class="form">

      <h1 class="sign"><span style="color:white ;font-weight: normal;">SIGN</span>
      <span style="color: black; font-weight: bold;">UP</span></h1>
      <div onclick="document.getElementById('bg-modal').style.display = 'none'"class="close">+</div>
        <div id="contactform">


          <form id="contactform" method="POST" tabindex="1">

          <p class="contact"><label>Name</label></p>
         <input type="text" id= "names" name="fname" placeholder="Full Name" required="" tabindex="2">

          <p class="contact" type="number"><label>Age</label></p>
          <input type="text" id="ages" name="age" placeholder="Age" required="" onkeypress="javascript:return isNumber(event)" tabindex="3">

          <p class="contact"><label>Date of Birth</label></p>
          <td><input type="date" name="dob" tabindex="4"></td>

          <p class="contact"><label>Gender</label></p>

          <td><input type="radio" name="gender" value="Male" tabindex="5"> Male </td>
          </tr>

          <td><input type="radio" name="gender" value="Female" tabindex="6"> Female </td>

          <p class="contact"><label>Email</label></p>
          <input type="email" name="email" placeholder="example@example.com" required="" tabindex="7">

           <p class="contact"><label>Create a username</label></p>
         <input type="text" id="usernames" name="username" placeholder="Username" required="" onkeyup="nospaces(this)" tabindex="8">


      <p class="contact"><label>Password</label></p>
         <input type="password" id = "password1" class ="contact" name="password" oninput="checkPass()" required="" tabindex="9">
        <p id="txt2"></p>
          <p class="contact"><label for="confirmpass">Confirm your password</label></p>
           <input type="password" id="password2" class ="contact" name="cpassword"  required="" tabindex="10">

           <p class="contact"><label>Phone</label></p>
          <input type="tel" class="phonum" name="phone" required="" value="+63" maxlength="10" onkeypress="javascript:return isNumber(event)" tabindex="11" >

          <button  tabindex="12"  onclick="sign()" class="button3">Submit</button> <br>


</form>

</body>
</html>
