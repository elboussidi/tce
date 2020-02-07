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



/*
INSERT INTO `sold` (`id`, `name`, `sold`) VALUES 
('1', 'Said', '2'),
('2', 'Youness', '6'), 
('3', 'Nour-Eddin', '5.5'), 
('4', 'Abdelmajid', '4'), 
('5', 'Faisal', '6.25'), 
('6', 'Hicham', '2.75'), 
('7', 'Nouhaila', '3.50'), 
('8', 'Rachida', '3.25'), 
('9', 'Ghizlane', '3.75'), 
('10', 'kabira', '-3.5'), 
('11', 'Oumaima', '1.5'), 
('12', 'Khalid', '4.25'), 
('13', 'Saadia', '8.75'), 
('14', 'Zenbe', '1'), 
('15', 'Imane', '9.25'), 
('16', 'Sokaina', '4.25'), 
('17', 'Amina', '5.25'), 
('18', 'NiHal', '4.5'), 
('19', 'Samira', '6.75'), 
('20', 'Fatima-Zahra', '1175') */?>