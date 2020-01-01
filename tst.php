


<?php
require 'connect.php';



// creat table user

$creat= mysqli_query($conect, "CREATE TABLE `user` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `tel` INT NOT NULL , `adress` VARCHAR(100) NOT NULL , `pass` VARCHAR(100) NOT NULL , `rol` VARCHAR(100) NOT NULL , `gender` VARCHAR(100) NOT NULL , `sold` FLOAT(10) NOT NULL , `date` TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) , PRIMARY KEY (`id`)) ENGINE = InnoDB;") ;
if($creat){
    
    
    echo 'table user has been created';
    
    
}else{
    echo 'nooooo sory';
}
echo '<br><br>';
// creat table pre inscription

$creat2= mysqli_query($conect, "CREATE TABLE `sold` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `pretel` INT(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
if($creat2){
    
    echo 'table 2222 PRE INSCRIPTION ';
} else {
    echo 'table 22222';    
}



echo '<br><br>';

// creat table opera
$creat3= mysqli_query($conect, "CREATE TABLE `tce`.`opera` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `id pr` INT(100) NOT NULL , `nomber` INT(100) NOT NULL , `mt` FLOAT NOT NULL , `mat` VARCHAR(100) NOT NULL , `date` TIMESTAMP(6) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
if($creat3){
    
    echo 'table 333 opera created ';
} else {
    echo 'table 333 noo';    
}





//
//echo '<br><br>';
//$p=password_hash($upassword2, PASSWORD_DEFAULT);
//// creat table opera
//$us= mysqli_query($conect, "INSERT INTO `user` (`id`, `name`, `tel`, `adress`, `pass`, `rol`, `gender`, `sold`, `date`) VALUES (NULL, 'abdelmajid', '0677076287', 'ait amira', '$p', '2', 'male', '3', CURRENT_TIMESTAMP)");
//if($us){
//    
//    echo 'user created  ';
//} else {
//    echo 'user nooo';    
//}
//





















    
?>