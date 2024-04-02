<?php
include 'nav.php';

if ( isset( $_POST[ 'reset_password' ] ) )
 {
    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];
    $re_password = $_POST[ 're-password' ];
    $password_encrypted = base64_encode( $password );
    if ( $password === $re_password )
 {
        $con = mysqli_connect( 'localhost', 'root' );
        mysqli_select_db( $con, 'my_flora' );
        $q = "UPDATE user_detail SET password='$password_encrypted' where 
              email='$email' ";
        $status = mysqli_query( $con, $q );
        mysqli_close( $con );

    }
    if ( $status == 1 )
 {
        echo "
     <center><h1> Your  password has been updated successfully! <br>
     <br>
     Please login to continue. </h1> </center>
        
     ";
    } else {

        echo 'Something is wrong, Please try again later.';
    }
}
?>
