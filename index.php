<?php 
include './header.php';
require './connect.php';
?>
 <?php 
  if(isset($_SESSION['rol'])){
          $i= $_SESSION['rol'] ;
         if($i == 1 OR $i == 2 ){
              echo '<script> alert(" تم تسجيل دخول   "); </script>';
         }
          
  }
  
    if(isset($_POST['login'])){
    $email=majid($_POST['tel']);
        $password=htmlentities( $_POST['pass']);
        
        
      $log2="SELECT * FROM `user` WHERE `tel`='$email'";
      
    $logqr2=$conect->query($log2) ;
    
    if($logqr2){
         if($logqr2->num_rows > 0);
        while ($row2 = $logqr2->fetch_assoc()) {
                $passhash= majid2($conect,$row2['pass']);
        }
        
      if (password_verify($password, $passhash)) {
      echo "Password matches.";

      $log="SELECT * FROM `user` WHERE `tel`='$email'AND `pass`='$passhash'";
      
    $logqr=$conect->query($log) ;
    
    if($logqr){
         if($logqr->num_rows > 0);
        while ($row = $logqr->fetch_assoc()) {
                $_SESSION['tel']=majid2($conect, $row['tel']);
                $_SESSION['name']=majid2($conect, $row['name']);
                $_SESSION['id']= majid2($conect, $row['id']);
                 $_SESSION['rol']= majid2($conect, $row['rol']);
                
         }//END WHILE
         if(isset($_SESSION['rol'] )){
          $aa=$_SESSION['name'];
         if ($_SESSION['rol']==1 OR $_SESSION['rol']==2) {
             echo '  <br><br><br><div width="50%"  class="alert alert-success" role="alert">
 login success <b>
 welcom </b> <h4>'.$aa.' </h4></div>';

 }
             echo '<meta http-equiv="refresh" content="4; \'/tce/page.php\' /> ';
         } else {
             echo '<br><br><br> <div class="alert alert-danger" role="alert"> 
 sorry eroor password or username !
</div> ';
        
         }      }//END IF $logqr
     
      }
      } else {
          echo 'incorecct pas';
      }
         }// END IF ISSET
     
    ?>

<!DOCTYPE html>
<html lang="en">
    <title>home page</title>
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


<body >
    
    
    <br><br><br>
    
    
    
     </div>
   
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">login</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="tel" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="pass" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <input type="submit" name="login"  value="login" class="btn btn-primary">
                                    
                                
                                <a href="#" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

    

    
    
    
    
    
     <br><br><br><br>
    <?php include 'footer.php'; ?>
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>


    </body>
</html>
