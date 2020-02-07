<?php
require './connect.php';

  // Default Error is empty
  $error = "";

  if(isset($_POST['login']) && $_SERVER["REQUEST_METHOD"] == "POST"){

    $name = htmlentities( $_POST['name'] );
    
if( empty($name) ){

      $error = "empty";

    }else{
  
         $red3="SELECT * FROM `sold` WHERE `name`='$name'";
 $q3=$conect->query($red3) ;
      if($q3){
        while ($row3= mysqli_fetch_assoc($q3)) {
         
           $solde=$row3['sold'];
           
        }
           
      } 
        
        $red="SELECT * FROM `opera` WHERE `nam`='$name'";
 $qq2=$conect->query($red) ;
    if($qq2){
        $red2="SELECT * FROM `opera` WHERE `nam`='$name'";
 $qq=$conect->query($red2) ;
      if($qq2){
           while ($row2= mysqli_fetch_assoc($qq)) {
         
           $name2=$row2['nam'];}
      }
      
      
$t="SELECT SUM(nomber) FROM `opera` WHERE `nam` ='$name'";
 $q2=$conect->query($t) ;
    if($q2){
       while ($row3= mysqli_fetch_assoc($q2)) {
           
              $totalf=$row3['SUM(nomber)'];
    }
    $prix=$totalf*0.25 ;
    }
   ?>
<!DOCTYPE html>
<html lang="en">
    <title>result</title>
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
<style type="text/css" >
    #home{
     
    
      height: 800px;
      margin: 1%;
      padding:1%;
    }
    img{
        float: left;
    }
    #date{
        
        float: right;
      
    }  #name{
        font-size: 20px;
    }
    #pp{
            font-size: 12px;
            color: darkmagenta;
        }
        #in{
        width: 70px;
        font-size: 12px;
        height: 30px
        }
       
</style>

<body><br>
    <div id="home" >
        <img src="js/logo.png"> 
        <p id="date"> Le : <?PHP echo date("d").'/ ' .date("m")."/ " .date("Y");  ?></p><br><br>
        <center> <h3> Relevé de Compte   </h3></center><br>
        
        <p id="name">   <?php echo $name2;?> <br>
             
            A été payé : <?php echo  $solde; ?> DH  </p>  <br>
        
        
        <p id="pp"> Nous avons l’honneur de vous communiquer ci-dessous le relevé de votre compte :</p>
         <table class="table table-striped table-hover">
                <thead>
                    <cen
                    <tr>
                        <th>id</th>
                        <th>modules</th>						
			<th>Page</th>
			<th>prix</th>
                        
                        <th>date</th>
			
                    </tr>
                </thead>
              
                <tbody>
                    <tr>
                        <?php
                             while ($row= mysqli_fetch_assoc($qq2)) {
           $id=$row['id'];
           $name2=$row['nam']; 
           $modul=$row['mat'];
           $nomber=$row['nomber'];
           $mt=$row['mt'];
            $date= $row['date']; 
                    $newdat=mb_substr( "$date " , 0 , 11 , "utf8" );
         
       ?>
                        <td><?php echo $id;  ?></td>
                         <td> <?php echo $modul;?></td>
                        <td><?php echo $nomber;?></td> 
                        <td> <?php echo $mt; ?></td>
                       
                        <td> <?php echo $newdat; ?></td>
                    </tr>
       
                             <?php  }}}} ?> 
                        <tr>
                
                        <td>TOTAL</td>
                        <td> </td> 
                        <td><?php echo $totalf; ?> </td>
                        <td> <?php echo  $prix;?> DH</td>
                        <td> </td>
                    </tr>
                     </tbody>
                    
         </table>
        <br><div id="az" >
       <div class="alert alert-primary" role="alert">  &emsp; sold restant: <?php $e=$solde-$prix; echo $e." DH"; ?> &emsp; il ya  : <?php echo $e/0.25; ?> Page restant</div>
       <?php 
    if($e>0){
        echo ' <div class="alert alert-success" role="alert">Le Serviceest  disponible </div>'; 
  
    } else {
          echo ' <div class="alert alert-danger" role="alert"> Le service est suspendu . Le crédit est insuffisant </div>'; 
  
    }
    
    
    ?></div>
       <br>
       <center> <p style="color: red; font-size: 11px;"> Sauf erreur ou omission de notre part </p><input id="in" class='btn btn-outline-dark ' type="button" onclick="window.print();" value="imprimé" > </center>
    </div><br>
    <script type="text/javascript">
        fun p(){
           window.print(); 
        }
    </script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    </script>

    </body>
</html>
