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
  
 
 require './m.php';

?>