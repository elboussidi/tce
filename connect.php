 <?php 
$localhost="localhost";//sql203.eb2a.com
$username="root";//eb2a_22046866
$password="";
$database="tce";
$conect=mysqli_connect($localhost,$username,$password,$database);

if(!$conect){
    die("عذرا لم يتم الاتصال بقاعدة البيانات");
}
 else {
   echo 'تم الاتصال بنجاح  ';
 }
  
  session_start();
  
?>   