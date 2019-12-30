 <?php
require 'connect.php';
require 'm.php';
?>
<!DOCTYPE html>
<html lang="en">
    <title>add operation</title>
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


<body>
    <?php   include 'header.php'; ?>
    <br>
   
 <?php require './x.php';  ?>
    <!--  menu  -->
    
    <br><br>
    
   
        <div class='row'>
  <div class='col-3'>
    <div class='nav flex-column nav-pills' id='v-pills-tab' role='tablist' aria-orientation='vertical'>
    <?php include 'slaid.php'; ?>
    
    </div>
  </div>
        
      
        <div class="col-9">
        <div class="panel -info">
       
     
<?php   
//  
//  if(isset($_SESSION['lev'])){
//        $se=$_SESSION['lev'];
//    } else {
//          echo '<script> alert(" ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("../index.php"); </script>'; 
//    }


if(isset($_GET['id']) and isset($_GET['name'])  ) {
$idn=$_GET['id'];
$namen=$_GET['name'];
}
if(isset($_SESSION['name'])){
    $nameprof=$_SESSION['name'];
}
?>




<div class="container">
 
        <div class="col-md-12">  
                        <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div> 
                <table class="table"> <div class="alert alert-info" role="alert"> &emsp; &emsp; &emsp; &emsp; operation de  : <?php echo $namen; ?> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; nember id :<?php echo $idn; ?></div>
                <thead>
                    <tr>
                        
                        
                             <th>
                           nomber de fell
                        </th>
                       
                             <th>
                           matiar
                        </th>
                         
                       
                        
                    </tr>
                </thead>
                <br>
                <tbody>
                <form  method="POST">
                    <tr class="active">
                       
                          <td>
                              <input class="form-control" type="number" maxlength="2" name="nm" >
                            
                       
                           
                        <td>
                                <select name='mat' class="form-control">  
                                <option>calculs comm</option>
                                <option>gestion des doc</option>
                                <option>environnement</option>
                                <option>comptabilité</option>
                            </select>
                        </td> 
                       
                    </tr>
                    
                           
                </tbody>  
              
             
                
            </table>
        </div>
    </div>
</div>
          <center> <input  class="btn btn-success" type="submit"  name="add" value="add" > </center> 
            
            
            
              </form>
                
                
                
                <?php 
                if(isset($_POST['add'])){
               
                     $mat= majid($_POST['mat']);  
                       $nm= majid($_POST['nm']) ;  
                      
                            $mt=$nm*0.25 ;
                             if(empty($mat) or empty($nm) ){
                                 echo ' <div class="col-md-8 offset-md-2"><div class="alert alert-danger" role="alert"> 
                                 لايمكن ترك حقل فارغ</div>';
                             }else{
                                 
                             
                             


     
                $ad="INSERT INTO `opera` (`id`, `id pr`, `nomber`, `mt`, `mat`, `date`) VALUES (NULL, '$idn', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP)";
                $adq=$conect->query($ad) ;
                if($adq){
                    echo ' <br>  <div class="col-md-8 offset-md-2"><div class="alert alert-success" role="alert"> ok note has been added </div>';
                } else {
                     die("error add".mysqli_error($conect));  
                    // echo '<div class="alert alert-danger" role="alert"> error add</div></div>';    
                             
}}
                 }
                ?>
                <br><br>
<?php include 'footer.php'; ?>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    </script>

    </body>
</html>


