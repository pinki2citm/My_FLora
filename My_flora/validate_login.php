<?php
include 'nav.php';
if ( isset( $_POST[ 'login' ] ) )
 {
    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];
    $password_encrypted = base64_encode( $password );
    $con = mysqli_connect( 'localhost', 'root' );
    mysqli_select_db( $con, 'my_flora' );
    $q = "select first_name from user_detail where email='$email' and
      password='$password_encrypted'";
    $result = mysqli_query( $con, $q );
    $num = mysqli_num_rows( $result );
    $name = mysqli_fetch_array( $result );

    $_SESSION[ 'user_name' ] = $name[ 0 ];

    mysqli_close( $con );
}

if ( isset( $_SESSION[ 'user_name' ] ) )
 {
    header( 'location:index.php' );
} else
echo '<center><h1>Your data is wrong! Please try again!<h1></center>';
?>