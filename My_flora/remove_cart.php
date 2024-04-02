<?php

if ( isset( $_POST[ 'remove_cart' ] ) )
 {
    $cart_image = $_POST[ 'cart_image' ];
    $con = mysqli_connect( 'localhost', 'root' );
    mysqli_select_db( $con, 'my_flora' );
    $q = "DELETE FROM cart_table WHERE cart_image='$cart_image'";
    $status = mysqli_query( $con, $q );
    mysqli_close($con);

if($status==1)
    {
        $_SESSION['cart_count'] = $_SESSION['cart_count'] - 1;
    header('location:cart.php');}
 }
else
echo "Something is wrong, Please try again later.";
?>