<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My_flora | Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='main.js'></script>
</head>
<body>
    <header>
        <nav class="navbar">
            
           <a href="index.php">Home</a>       
           <a href="products.php">Flowers</a>       
       <?php    
       if(isset($_SESSION['user_name'])) 
       {
         echo "<a href='Admin.php'> Howdy!" . $_SESSION['user_name'] ."</a>";
         
       }
       else
       {
        echo '
        <a href="login.php">Login</a>       
        <a href="register.php">Register</a>   ';
       }
    
       ?>
        <?php    
       if(isset($_SESSION['cart_count'])) 
       {
         echo ' <a href="cart.php">
         <i class="fa fa-shopping-cart" id="cart">('.$_SESSION['cart_count'].')</i></a>';
         
       }
       else
       {
       echo ' <a href="cart.php"><i class="fa fa-shopping-cart" id="cart"></i></a>';
       }
       ?>
        </nav>

    </header>   
    <hr>