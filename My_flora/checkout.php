<?php
include 'nav.php';
?>
    <br>
    <h1 class="title">Please fill the form to proceed...</h1>
    <div class="row">
        <div class="col-2">
            <form class="form">
                <h2><i class="fa fa-user"></i> Your Good Name</h2>
                <input type="text" placeholder="Enter Your name"  required> <br>
                <h2><i class="fa fa-envelope"></i> your Email</h2>
                <input type="email" placeholder="Enter your email"  name="email"required> <br>
                <h2><i class="fa fa-phone"></i> Your contact number</h2>
                <input type="text" placeholder="Enter contact number"  name="email"required> <br>
                <h2><i class="fa fa-map"></i> Your Address</h2>
                <input type="address" placeholder="Enter your address" name="password" required>
                <br>
              <button class="btn">Place your order</button>
               
               </form>
        </div>
    </div>
    
   <?php
   include 'footer.php';
   ?>