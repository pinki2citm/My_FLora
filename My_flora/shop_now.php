<?php
include 'nav.php';
if ( isset( $_POST[ 'buy_now' ] ) )
 {
   $user_name = $_POST [ 'name' ];
  $user_email = $_POST [ 'email' ];
 $user_address = $_POST [ 'address' ];
   $user_contact = $_POST[ 'number' ];

    $con = mysqli_connect( 'localhost', 'root' );
    mysqli_select_db( $con, 'my_flora' );
    $q = "INSERT INTO shop_table (buyer_name,buyer_email,buyer_address, buyer_contact) values
     ('$user_name','$user_email', '$user_address', '$user_contact')";

    $result = mysqli_query( $con, $q );
    if ( $result == 1 )

  {  echo "<center><h2> Hello,
        Thank you for your order. We will send a confirmation 
        when your order ships. If you would like to view 
        the status of your order or make any changes to it, 
        please visit Your Orders.</h2></center>";
}
    else
    echo 'Something is wrong! Please try again later.';

}

?>
