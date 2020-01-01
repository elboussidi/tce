
<body ><?php session_start(); ?>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#myinfo"> <i class="fa fa-home fa-2x"  aria-hidden="true"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span > <i class="fa fa-home" aria-hidden="true"></i>menu
          </span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mr-auto "  >
            <li class="nav-item   ">
                <a class="nav-link" href="page.php"><img src="js/logo.png"><b>TCE 101</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
    <a class="nav-link " href="page.php"  >Home</a>
            </li
            <li class="nav-item">
                <a class="nav-link" href="#service">admin</a>
              </li> <li class="nav-item">
                <a class="nav-link" href="#business">Contact</a> 
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="#price">aboute</a>
              </li>
             
          </ul>
         
          
           <?php 
           if(isset($_SESSION['rol']) ){
               
          
           
           if ($_SESSION['rol']==1 or $_SESSION['rol']==2 ){
               $sname=$_SESSION['name'];
              
               $id=$_SESSION['id'];
             echo "
          <a href='prof.php?id=$id'> <button class='btn btn-outline-success my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#exampleModal'>  $sname </button></a>
            &emsp;    <a href='logout.php'> <button class='btn btn-outline-danger my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#exampleModal'>log out</button></a>
               ";
           } }
         else {
             echo 'لم يتم تسجيل دخول بعد ';
        
          } 
           ?>  
        
          
        </div>
      </nav>   

