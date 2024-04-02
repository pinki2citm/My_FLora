<?php


if( isset($_POST['add_cart']))
{
   $cart_name = $_POST ['cart_name'];
    $cart_price = $_POST ['cart_price'];
    $cart_image = $_POST ['cart_image'];

    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con, 'my_flora');
    $q= "INSERT INTO cart_table (cart_name,cart_price,cart_image) values
     ('$cart_name',$cart_price, '$cart_image')";
     $status=mysqli_query($con,$q);
     mysqli_close($con);



if($status==1)
{
    $_SESSION['cart_count'] = $_SESSION['cart_count'] + 1;
header('location:cart.php');
} 
}

?>