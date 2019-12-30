
<?php 
    if(isset($_SESSION['rol'])){
          $i= $_SESSION['id'] ;
        $tstlev=$_SESSION['rol'];
        $tstname=$_SESSION['name'];
    echo "  <a class='nav-link active'  href='prof.php?id=$i' role='tab' aria-controls='v-pills-home' aria-selected='true'>profile</a> 
            <a class='nav-link'   href='operation.php?id=$i' role='tab' aria-controls='v-pills-profile' aria-selected='false'>operation</a>
            <a class='nav-link'   href='pdf.php?id=$i' role='tab' aria-controls='v-pills-profile' aria-selected='false'>pdf file</a>

            ";
    
    if($tstlev == 2){
        echo "
          
        <a class='nav-link' href='adm.php' role='tab' aria-controls='v-pills-messages' aria-selected='false'>admin panel</a>
       
    ";} 
           
    }
    
    
    
    ?>