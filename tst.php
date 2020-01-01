


<?php
require 'connect.php';
require 'm.php';
    
?>
<!DOCTYPE html>
<html lang="en">
    <title>regester page</title>
     <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
   
</head>


<body style="background-color: #e9ecef;"><?php
  $hash='$2y$10$0PLNqKtzcqSqyHI6Mlm.iODlCQVEat1DjcasVktrtMqgt8JOQE8y.';
 $password='<h1>HJH</H1>'; 
 $var = htmlentities($password);
 echo $var;
  if (password_verify($password, $hash)) {
      echo 'yes';
  } else {
      
}
  
  ?>
    </body>
</html>



