 <?php
require 'connect.php';
require './m.php';
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
 
    <br><br>
    
  
       
<?php   
//  
//  if(isset($_SESSION['lev'])){
//        $se=$_SESSION['lev'];
//    } else {
//          echo '<script> alert(" ليس لكم تصريح الوولوج لهده الص�?حة ");  location.replace ("../index.php"); </script>'; 
//    }



?>




<div class="container">
 
        <div class="col-md-12">  
                        <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div> 
                <table class="table"> <div class="alert alert-info" role="alert"> </div>
                <thead>
                    <tr>
                        
                          
                             <th>
                           Page
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
                                <option>calculs-commerciaux</option>
                                <option>gestion des documents</option>
                                <option >environnement</option>
                                <option selected>comptabilité</option>
                                </select>
                        </td> 
                       
                    </tr>
                    
                           
                </tbody>  
              
             
                
            </table>
        </div>
   
          <center> <input  class="btn btn-success" type="submit"  name="add" value="add" > </center> 
            
            
            
              </form>
                <br><hr><br>
                
              <form action="" method="POST">

                <div class="form-group row">
                    
                    
                  <label for="email_address" class="col-md-4 col-form-label text-md-right"></label>
                  <div class="col-md-6">
                      <select name="nama"  class="form-control">
 <option> Said</option><option> Youness</option><option> Nour-Eddin</option><option> Abdelmajid</option>
<option>Faisal </option><option>Hicham </option><option>Nouhaila </option><option> Rachida</option>
 <option>Ghizlan </option><option>Kabira </option><option>Omaima </option><option>Khalid </option>
  <option>Saadia </option> <option> Zenbe</option> <option>Iman</option><option>Sokaina </option>   
  <option>Amina </option><option>Nihal </option><option>Samira </option><option> Fatima-Zahra</option>
  <option> Saida</option><option>Meryam</option><option>Naima</option><option>Ayoub</option>
  
  
                      </select>
                 <br> </div>
                  
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="nsold"> 
                    </div>
                </div>

                
                 <div class="col-md-6 offset-md-4">
                  <input type="submit" name="updat"  value="updat" class="btn btn-primary">

                </div>
              </div>

            </form>
                
                
                <?php 
                 if(isset($_POST['updat'])){
                    $nama=majid($_POST['nama']);
                     $nsold= majid($_POST['nsold']); 
                     
                if(empty($nama) or empty($nsold) ){
                                 echo ' <div class="col-md-8 offset-md-2"><div class="alert alert-danger" role="alert"> 
                                 لايمكن ترك حقل �?ارغ</div>';
                             }else{
                $nn="UPDATE `sold` SET `sold`='$nsold' WHERE `name`='$nama'";
                $qnn= mysqli_query($conect, $nn);
                if($qnn){
                     echo ' <br>  <div class="col-md-8 offset-md-2"><div class="alert alert-success" role="alert"> sold has been updat </div>';         
                 } else {
                      die("error update sold".mysqli_error($conect));  
                 }}}
                if(isset($_POST['add'])){
                   
                     $mat= majid($_POST['mat']);  
                       $nm= majid($_POST['nm']) ;  
                      
                            $mt=$nm*0.25 ;
                             if(empty($mat) or empty($nm) ){
                                 echo ' <div class="col-md-8 offset-md-2"><div class="alert alert-danger" role="alert"> 
                                 لايمكن ترك حقل �?ارغ</div>';
                             }else{
                                 
                             
                             


     
                $ad="
             INSERT INTO `opera` (`id`, `nam`, `nomber`, `mt`, `mat`, `date`)
        VALUES 
        (NULL, 'Said', '$nm', '$mt', '$mat',CURRENT_TIMESTAMP), 
        (NULL, 'Youness', '$nm', '$mt', '$mat',CURRENT_TIMESTAMP), 
        (NULL, 'Nour-Eddin', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP),
        (NULL, 'Abdelmajid', '$nm', '$mt', '$mat',CURRENT_TIMESTAMP), 
        (NULL, 'Faisal', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP), 
        (NULL, 'Hicham', '$nm', '$mt', '$mat',CURRENT_TIMESTAMP), 
        (NULL, 'Nouhaila', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP),
        (NULL, 'Rachida', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP), 
        (NULL, 'Ghizlan', '$nm', '$mt', '$mat',CURRENT_TIMESTAMP), 
        (NULL, 'Kabira', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP), 
        (NULL, 'Omaima', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP), 
        (NULL, 'Khalid', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP), 
        (NULL, 'Saadia', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP), 
        (NULL, 'Zenbe', '$nm', '$mt', '$mat',CURRENT_TIMESTAMP ),
        (NULL, 'Iman', '$nm', '$mt', '$mat',CURRENT_TIMESTAMP), 
        (NULL, 'Sokaina', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP),
        (NULL, 'Amina', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP),
        (NULL, 'Nihal', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP), 
        (NULL, 'Samira', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP),
        (NULL, 'Fatima-Zahra', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP),
        (NULL, 'Saida', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP),
        (NULL, 'Meryam', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP), 
        (NULL, 'Naima', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP),
        (NULL, 'Ayoub', '$nm', '$mt', '$mat', CURRENT_TIMESTAMP)
                    ";
                $adq=$conect->query($ad) ;
                if($adq){
                    echo ' <br>  <div class="col-md-8 offset-md-2"><div class="alert alert-success" role="alert"> operation ajoute </div>';
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


