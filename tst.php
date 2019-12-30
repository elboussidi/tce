<?php

require './connect.php';

$red="SELECT sum(sold) FROM `user`  ";
 $qq=$conect->query($red) ;
    if($qq){
        echo $row[ sum(sold)]; 
    }
        ;