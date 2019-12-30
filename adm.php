 <?php require_once 'connect.php'; 

  if(isset($_SESSION['rol'])){
          $i= $_SESSION['rol'] ;
         if($i != 2 ){
              echo '<script> alert(" ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("page.php"); </script>';
         }
          
  } else {
       echo '<script> alert("لا ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("index.php"); </script>';
       
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <title>user List</title>
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
   
         
<?php
 
$tt2="SELECT SUM(nomber) FROM `opera` ";
 $q2=$conect->query($tt2) ;
    if($q2){
       while ($row3= mysqli_fetch_assoc($q2)) {
           
              $to=$row3['SUM(nomber)'];
    }
    }   
      $tt="SELECT SUM(mt) FROM `opera` ";
 $q=$conect->query($tt) ;
    if($q){
       while ($row2= mysqli_fetch_assoc($q)) {
           
              $totalo=$row2['SUM(mt)'];
    }
    }
   $reddatad="SELECT SUM(sold) FROM `user`" ;
   
 $qdatad=$conect->query($reddatad) ;
    if($qdatad){
        
       while ($row= mysqli_fetch_assoc($qdatad)) {
           
              $total=$row['SUM(sold)'];
   
    
       }}
       $rest=$total-$totalo;
?>

<div class="jumbotron">
<div class="row w-100">
        <div class="col-md-3">
            <div class="card border-info mx-sm-1 p-3">
             <!--   <div class="card border-info shadow text-info p-3 my-card" ></div> -->
                <div class="text-info text-center mt-3"><h5>عدد الاوراق </h5></div>
                <div class="text-info text-center mt-2"><h3><?php echo $to; ?></h3></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-success mx-sm-1 p-3">
           <!--     <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div> -->
                <div class="text-success text-center mt-3"><h6>مجموع الرصيد المتبقي</h6></div>
                <div class="text-success text-center mt-2"><h3><?php echo $rest  ." DH"; ?></h3></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-danger mx-sm-1 p-3">
               <!-- <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div> -->
                <div class="text-danger text-center mt-3"><h5>الرصيد المستهلك  </h5></div>
                <div class="text-danger text-center mt-2"><h4><?php echo $totalo  ." DH"; ?></h4></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-warning mx-sm-1 p-3">
                 <div class="text-warning text-center mt-3"><h6>مجموع الرصيد الحالي </h6></div>
                <div class="text-warning text-center mt-2"><h3><?php echo $total  ." DH"; ?></h3></div>
            </div>
        </div></div></div>



    <!--  menu  -->
    
    <br>
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
//  if(isset($_SESSION['rol'])){
//        $se=$_SESSION['rol'];
//       
//    } else {
//          echo '<script> alert(" ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("../index.php"); </script>'; 
//    }
  
  $red="SELECT * FROM `user`  ";
 $qq=$conect->query($red) ;
    if($qq){
      
    
   ?>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>List </b></h2><br>
			</div>
		<div class="col-sm-7">
                    <a href="#" class="btn btn-primary"> <span>total sold :<?php echo  $total ;?></span></a>
							
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><center>Name</center></th>						
			<th>sold</th>
                        <th>D mes a jour</th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <?php   }
                
                while ($row= mysqli_fetch_assoc($qq)) {
           
              $name=$row['name'];
                  $id= $row['id'];
                  $sold=$row['sold'] ;
                  $date=$row['date'] ;
                    $newdat=mb_substr( "$date" , 0 , 11 , "utf8" );
                    //$date_c= majid2($conect,$row['date_c']); 
                   // $newdat=mb_substr( "$date_c " , 0 , 11 , "utf8" );
                    ?>
                <tbody>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><center><?php echo $name;?></center> </td>                      
                        <td> <?php echo $sold  ." DH";?></td>     
                         <td> <?php echo $newdat;?></td>  
           
    
       
     </td>
			<td>
			<a href="del.php?ids=<?php echo $id;?>&name=<?php echo $name; ?>" class="btn btn-info" title="Settings" data-toggle="tooltip"> detait  </a>
                       <a href="add.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>" > <button type="button" class="btn btn-success">ajoute</button></a> 
                       <a href="updats.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>" > <button type="button" class="btn btn-warning">UPDATE</button></a> 
						</td>
                    </tr>
                <?php   }?>			   
        </div>    
        </div>
    
 

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    </script>

    </body>
</html>


