<?php
require 'connect.php';
require 'm.php';
    
?>
<!DOCTYPE html>
<html lang="en">
    <title>regester page</title>
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


<body style="background-color: #e9ecef;">
     <?php   include 'header.php'; 
     error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
    
    

 <br><br><br><br><br>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()"  method="POST" enctype="multipart/form-data">
                         
                                <div class="form-group row">
                                    <label for="number phone" class="col-md-4 col-form-label text-md-right">NUMBER PHONE</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="uphone">
                                    </div>
                                </div>      
               <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="uname">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="present_address" class="form-control" name="upassword1">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right"> confirm password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="present_address" class="form-control" name="upassword2">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right"> Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control" name="uaddress">
                                    </div>
                                </div>

          
                <div style="margin-left:180px ;" class="form-group row">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female" name="ugender" > Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male" name="ugender"> Male
                                </label>
                            </div>
                        </div>
                    </div>
          
                                    <div class="col-md-6 offset-md-4"><br>
                                         <input type="submit" class="btn btn-primary" value="regester" name="reg" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
    
          <?php
          
    if(isset($_POST['reg'])){

   $uname= majid($_POST['uname']);
     $uphone= majid($_POST['uphone']);
      $uaddress= majid($_POST['uaddress']);
       $upassword1= $_POST['upassword1'];
       $upassword2= $_POST['upassword2'];
       $ulev=1;
      // $upassword=md5($password) ;
        $ugender=$_POST['ugender'];
    $q=    mysqli_query($conect,( "SELECT * FROM `sold`  WHERE `sold`='$uphone'"));
        if($q){
            while ($row= mysqli_fetch_assoc($q)) {
           
              $namea=$row['sold'];
              
        }
       
        }
        if($uphone!= $namea){
           echo '<script>
    alert("عذرا هذا الرقم غير مسجل ليديا ,ادا كنت تضن ان هناك خطأ ما يرجي التواصل معنا") 
    </script>';
        }
 else {
     
     if(empty($uname)  or empty($upassword1) or empty($uaddress) or empty($uphone)){
            echo '<script>
    alert("لا يمكن ترك اي حقل فارغ") 
    </script>';
        } else {
            
        
         if($upassword1 !== $upassword2 ){
              echo '<script>
    alert("كلمة سر غير متطابقة") 
    </script>';            
             
     } else {
        
   
       
    $ins="INSERT INTO `user` (`id`, `name`, `tel`, `adress`, `pass`, `rol`, `gender`, `sold`)"
            . " VALUES (NULL, '$uname', '$uphone', '$uaddress', '$upassword1', '$ulev', '$ugender', '0')";
    $qins= mysqli_query($conect, $ins) ;
    if($qins){
       echo '<div class="alert alert-success" role="alert">
 your data has been insert !
</div> ';   
       echo '<script>
    alert("تم تسجيل معلوماتكم بنجاح , سيتم اضافة بيانات حسابك لاحقا ") ;
    
    </script>';
     
    } else {
        
    
        echo '<div class="alert alert-danger" role="alert">
 sorry eroor password !
</div> '; 
    } }
      }
      
     
 }
      
        
        
        
        
        
    }
    ?>
            </div>
        </div>
    </div>

</main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function validform() {

        var a = document.forms["my-form"]["full-name"].value;
        var b = document.forms["my-form"]["email-address"].value;
        var c = document.forms["my-form"]["username"].value;
        var d = document.forms["my-form"]["permanent-address"].value;
        var e = document.forms["my-form"]["nid-number"].value;

        if (a==null || a=="")
        {
            alert("Please Enter Your Full Name");
            return false;
        }else if (b==null || b=="")
        {
            alert("Please Enter Your Email Address");
            return false;
        }else if (c==null || c=="")
        {
            alert("Please Enter Your Username");
            return false;
        }else if (d==null || d=="")
        {
            alert("Please Enter Your Permanent Address");
            return false;
        }else if (e==null || e=="")
        {
            alert("Please Enter Your NID Number");
            return false;
        }

    }
    </script>


    </body>
</html>



