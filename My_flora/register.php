<?php
include 'nav.php';
?>
    <br>
    <h2 class="title">Welcome to My_flora</h2>
    <div class="row">
      <div class="col-2">
        <form class="form" action="validate_register.php" method="post">
          <h2><i class="fa fa-user"></i>First Name</h2>
          <input type="text" name="first_name" placeholder="Enter Your First name"  required> 
          <h2><i class="fa fa-user"></i>Last Name</h2>
          <input type="text" name="last_name" placeholder="Enter Your Last name"  required> 
          <h2> <i class="fa fa-envelope"></i> Email</h2>
          <input type="email" name="email" placeholder="Enter your email"  required> <br>
          <h2><i class="fa fa-lock"></i> Password</h2>
          <input type="password" name="password" minlength="5" maxlength="10" placeholder="Enter password"  required> <br>
          <h2><i class="fa fa-lock"></i> Re-enter the Password</h2>
          <input type="password" name="re-password" minlength="5" maxlength="10" placeholder="Re-enter the password" required> <br>
        <button class="btn" type="submit" name="register">Register</button><br>
        
         </form>
      </div>
    </div>
<?php
include 'footer.php';
?>
