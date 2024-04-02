<?php
include 'nav.php';
?>
<br>
<center><h3>Here you can easily update your password</h3></center>
<div class = 'row'>
<div class = 'col-2'>
<form class = 'form' action = 'reset_password.php' method = 'post'>
<h2> <i class = 'fa fa-envelope'></i> Your Email</h2>
<input type = 'email' placeholder = 'Enter your email'  name = 'email' required> <br>
<h2><i class = 'fa fa-lock'></i> Your New Password</h2>
<input type = 'password' placeholder = 'Enter your password'  minlength="5" maxlength="10" name = 'password' required> <br>
<h2><i class = 'fa fa-lock'></i> Re-enter the Password</h2>
<input type = 'password' placeholder = 'Re-enter the password'  name = 're-password' required> <br>
<button class = 'btn' type = 'submit' name = 'reset_password'>Reset Password</button><br>

         </form>
      </div>
    </div>
   <?php
   include 'footer.php';
?>

