 <?php
require './connect.php';


?> <?php   include './header.php'; 
   if(isset($_SESSION['rol'])){
          $i= $_SESSION['rol'] ;

          
  } else {
       echo '<script> alert("لا ليس لكم تصريح الوولوج لهده الصفحة ");  location.replace ("index.php"); </script>';
       
}
?>
<!DOCTYPE html>
<html lang="en">
    <title>profile</title>
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
   
    <br><br><br>
    

   
    
  <?php include 'x.php'; ?> 

    <!--  menu  -->
   
   
        <div class='row'>
  <div class='col-3'>
    <div class='nav flex-column nav-pills' id='v-pills-tab' role='tablist' aria-orientation='vertical'>
    <?php include 'slaid.php'; ?>
    
    </div>
  </div>
        
      
        <div class="col-9">
        <div class="panel -info">
     <?php 
if(isset($_GET['id'])){
    $ids=$_SESSION['id'];
    
  $red="SELECT * FROM `user` WHERE `id` ='$ids'";
 $qq=$conect->query($red) ;
    if($qq){
        while ($row= mysqli_fetch_assoc($qq)) {
            $id=majid2($conect, $row['id']);
              $name= majid2($conect,$row['name']);
                  $email=majid2($conect, $row['tel']);
                    $lev= majid2($conect,$row['rol']);                  
                  $position= majid2($conect,$row['adress']);
                    $gender=majid2($conect,$row['gender']);
                
                     
   } }   
   
   
        }      
  ?>  
<div class='container emp-profile  '>
            <form method='post'>
                <div class='row'>
                    <div class="col-md-4">
                        <div class="profile-img" style="height:150px; ">
                            <?php
                            if($gender = "male"){
                              echo '  <img width="150px"  height="150px"src="m.png" alt="no pic"/>';
                                
                            } else {
                                 echo '  <img width="150px"  height="150px"src="f.png" alt="no pic"/>';
                            }
                             
                          ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      <?php echo $name ;  ?>
                                    </h5>
                                    <h6>
                                           
                                    </h6>
                                   
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class='row'>
                    <div class="col-md-4">
                        <div class="profile-work"><br><br>
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            
                           
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>     <?php echo $id;  ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>     <?php echo $name;  ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>tel</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>     <?php echo $email;  ?><a href="updatnum.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>"> chang</a></p>
                                            </div>
                                        </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>     <?php echo $gender;  ?></p>
                                            </div>
                                        </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>adress</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>     <?php echo $position;  ?></p>
                                            </div>
                                        </div>
                                        </div>
                            </div>
                           
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
                  
        </div>    
        </div>
    
 

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    </script>

<?php include './footer.php'; ?>
    </body>
</html>


