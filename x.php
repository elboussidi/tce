
<!DOCTYPE html>
<html lang="en">
    <title>login page</title>
     <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    
</head>


<body>
    
           <?php 
           if(isset($_SESSION['id']) ){
               $id=$_SESSION['id'];
           }
               ?>
<?php

$tt2="SELECT SUM(nomber) FROM `opera` WHERE `id pr` ='$id'";
 $q2=$conect->query($tt2) ;
    if($q2){
       while ($row3= mysqli_fetch_assoc($q2)) {
           
              $totalf=$row3['SUM(nomber)'];
    }
    }   
      $tt="SELECT SUM(mt) FROM `opera` WHERE `id pr` ='$id' ";
 $q=$conect->query($tt) ;
    if($q){
       while ($row2= mysqli_fetch_assoc($q)) {
           
              $totalo=$row2['SUM(mt)'];
    }
    }
   $reddatad="SELECT * FROM `user` WHERE `id`='$id'" ;
   
 $qdatad=$conect->query($reddatad) ;
    if($qdatad){
        
       while ($row= mysqli_fetch_assoc($qdatad)) {
           
              $soldm=$row['sold'];
              $date=$row['date'];
    
       }}
       $rest=$soldm-$totalo;
?>

<div class="jumbotron">
<div class="row w-100">
        <div class="col-md-3">
            <div class="card border-info mx-sm-1 p-3">
               <!-- <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div> -->
                <div class="text-info text-center mt-3"><h4>عدد الوراق</h4></div>
                <div class="text-info text-center mt-2"><h1><?php echo $totalf ; ?></h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-success mx-sm-1 p-3">
               <!-- <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div> -->
                <div class="text-success text-center mt-3"><h4>الرصيد المتبقي</h4></div>
                <div class="text-success text-center mt-2"><h1><?php echo $rest  ." DH"; ?></h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-danger mx-sm-1 p-3">
     
                <div class="text-danger text-center mt-3"><h5>الرصيد المستهلك</h5></div>
                <div class="text-danger text-center mt-2"><h1><?php echo $totalo ." DH"; ?></h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-warning mx-sm-1 p-3">
                <div  class="card border-warning shadow text-warning p-1 my-card" ><span ><center  style=" padding: 8px; "> <?php echo mb_substr( "$date" , 0 , 11 , "utf8" ) ; ?> </center></span></div>
                <div class="text-warning text-center mt-3"><h4>الرصيد الحالي</h4></div>
                <div class="text-warning text-center mt-2"><h1><?php echo $soldm ." DH" ; ?></h1></div>
            </div>
        </div></div></div>



   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>


    </body>
</html>


