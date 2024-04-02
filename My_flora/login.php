<?php
include 'nav.php';
?>
<br>
<h2 class = 'title'>Welcome to My_flora</h2>
<div class = 'row'>
<div class = 'col-2'>
<form class = 'form' action = 'validate_login.php' method = 'post'>
<h2> <i class = 'fa fa-envelope'></i> Your Email</h2>
<input type = 'email' placeholder = 'Enter your email'  name = 'email' required> <br>
<h2><i class = 'fa fa-lock'></i> Your Password</h2>
<input type = 'password' placeholder = 'Enter your password'  name = 'password' required> <br>
<button class = 'btn' type = 'submit' name = 'login'>login</button><br>
<a href = 'forgot_password.php' class = 'btn'>Forgot Password</a>
<h2> If you don't have an account?</h2>
         <a href="register.php" class="btn">Register here</a>
         </form>
      </div>
    </div>
   <?php
   include 'footer.php';
?>

