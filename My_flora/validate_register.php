<?php
include 'nav.php';
if(isset($_POST['register']))
{
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
     $email = $_POST['email'];
     $password=$_POST['password'];
     $password2= $_POST ['re-password'];
     $password_encrypt=base64_encode($password);
     if($password === $password2)
     {
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con, 'my_flora');
        $q= "INSERT INTO user_detail (first_name,last_name,email,password) values
         ('$first_name','$last_name', '$email', '$password_encrypt')";
         $status=mysqli_query($con,$q);
         mysqli_close($con);
         $_SESSION['name'] = $first_name;
     }

}
?>


<?php
if($status ==1)
{
    echo "<center><h1>Successfully registered !!!</h1><center>
    Please visit to our products to celebrate your day beautifully!!.<center>
    ";
   
}
else
{
    echo "<center><h1>Something is not right!!</h1><center>";
}
?>