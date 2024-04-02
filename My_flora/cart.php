<?php
include 'nav.php';
?>
<br>
<?php
if(!isset($_SESSION['user_name']))
{
  echo "<center><h2>Please login to add products into cart.</h2></center>";
  $_SESSION['cart_count']=0;
}
else
{$con = mysqli_connect( 'localhost', 'root' );
mysqli_select_db( $con, 'my_flora' );
$q = 'SELECT * FROM cart_table';
$status = mysqli_query( $con, $q );
$num = mysqli_num_rows( $status ) ;
$_SESSION[ 'cart_count' ] = $num;

if ( $num )
 {
 echo "  <h1 class = 'title'>your Cart Products</h1>";
    $total_price = 0;
    while( $row = mysqli_fetch_assoc( $status ) )
 {
        $total_price += $row[ 'cart_price' ];
        ?>

        <!------ New produ cts------>
        <div class = 'row'>
        <div class = 'col-2'>

        <img src = "<?php echo $row['cart_image']?>">
        <br><br>
        <center> <h4 > <?php echo $row[ 'cart_name' ]?> </h4></center><br>
        <center> <h4 >£<?php echo $row[ 'cart_price' ]?></h4> </center>
        <form action = 'remove_cart.php' method = 'post'>
        <input type = 'hidden' value = "<?php echo $row['cart_image']?>" name = 'cart_image'>
        <button type = 'submit' name = 'remove_cart' class='btn'> Remove from cart</button>
       
      </form>
      <a href="buy_product.php" class="btn"><button >Buy now</button></a> 
        </div> </div>
        <?php
    }
    echo "<center><button class='btn'>Total_price = $total_price </button><center>";
    include 'footer.php';
}
else{
  echo"<center><h2> Your cart is empty!!</h2><center>";
}
}

?>

