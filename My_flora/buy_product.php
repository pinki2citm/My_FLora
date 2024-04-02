<?php
include 'nav.php';
?>
    <br>
    <h2 class="title">Proceed to buy the product</h2>
    <div class="row">
      <div class="col-2">
        <form class="form" action="shop_now.php" method="post">
          <h2><i class="fa fa-user"></i>Name</h2>
          <input type="text" name="name" placeholder="Enter Your name"  required> 
          <h2> <i class="fa fa-envelope"></i> Email</h2>
          <input type="email" name="email" placeholder="Enter your email"  required> <br>
          <h2><i class="fa fa-map"></i> Address</h2>
          <input type="text" name="address" placeholder="Enter Your address"  required> <br>
          <h2><i class="fa fa-phone"></i> Contact number</h2>
          <input type="text" name="number" placeholder="Enter Your Contact number" required> <br>
        <button class="btn" type="submit" name="buy_now">Place order</button><br>
         </form>
      </div>
    </div>
<?php
include 'footer.php';
?>
