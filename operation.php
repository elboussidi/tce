 <?php
require './connect.php';

   if(isset($_SESSION['rol'])){
          $i= $_SESSION['rol'] ;

          
  } else {
       echo '<script> alert("لا ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("index.php"); </script>';
       
}
?>
<!DOCTYPE html>
<html lang="en">
    <title>operation</title>
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
    <?php   include './header.php'; ?>
    <br>
   
 <?php include 'x.php'; ?> 
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
//     if(isset($_SESSION['lev'])){
//        $se=$_SESSION['lev'];
//        if($se !== "derecteur"){
//                            echo '<script> alert(" ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("../index.php"); </script>'; 
//        }
//    } else {
//          echo '<script> alert(" ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("../index.php"); </script>'; 
//    }
 
if(isset($_GET['id'])){
    $ids=$_SESSION['id'];
  $red="SELECT * FROM `opera` WHERE `id pr`='$ids'";
 $qq2=$conect->query($red) ;
    if($qq2){
      

   ?>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
		<h2>mon <b>operation</b></h2> <br>
			</div>
		<div class="col-sm-7">
                   
							
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <cen
                    <tr>
                        <th>id</th>
                        <th>nomber de feuilles</th>						
			<th>mantant</th>
			<th>modules</th>
                        <th>date</th>
			<th>Action</th>
                    </tr>
                </thead>
                <?php  while ($row= mysqli_fetch_assoc($qq2)) {
            $id=$row['id'];
              $nomber=$row['nomber'];
                  $mt=$row['mt'];
                    $mat=$row['mat']; 
                    $date= $row['date']; 
                    $newdat=mb_substr( "$date " , 0 , 11 , "utf8" );
                    ?>
                <tbody>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td> <center><h6><?php echo $nomber;?></h6></center></td>
                        <td><center><?php echo $mt  ." DH"; ?></center></td>                        
                        <td><?php echo $mat;?></td>
		<td><span class="status text-success">&bull;</span><?php ?><?php echo $newdat;?> </td>
			<td>
			<a href="#" class="btn btn-danger" title="delete" data-toggle="tooltip"> del  </a>
			
						</td>
                    </tr>
<?php   }}}?>			   
        </div>    
        </div>
           

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    </script>

    </body>
</html>


