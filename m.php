<?php

$localhost="localhost";
$username="root";
$password="";
$database="tce";
$conect=mysqli_connect($localhost,$username,$password,$database);

if(!$conect){
    die("عذرا لم يتم الاتصال بقاعدة البيانات");
}
 else {
 //  echo 'تم الاتصال بنجاح  ';
 }
 
  
 

function majid($var){
   // $var= htmlspecialchars($var);
    $var = trim($var);
    $var = addslashes($var);
    $var = strip_tags($var);
    $var = stripslashes($var);
    $var = htmlentities($var);
    
    $var= str_replace("insert", "",$var) ;
     $var= str_replace("set", "",$var) ;
      $var= str_replace("update", "",$var) ;
       $var= str_replace("select", "",$var) ;
        $var= str_replace("union", "",$var) ;
         $var= str_replace("and", "",$var) ;
          $var= str_replace("into", "",$var) ;
           $var= str_replace("or", "",$var) ;
            $var= str_replace("where", "",$var) ;
             $var= str_replace("like", "",$var) ;
              $var= str_replace("'", "",$var) ;
               $var= str_replace("into", "",$var) ;
                $var= str_replace(">", "",$var) ;
                 $var= str_replace("<", "",$var) ;
                  $var= str_replace("*", "",$var) ;
        
    return $var;
}



function majid2 ($conect,$var2){
    $var2= mysqli_real_escape_string($conect,$var2);
      return $var2;
}


?>