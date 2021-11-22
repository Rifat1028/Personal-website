<?php
 $insert=false;

 
     define("DB_HOST", "localhost");
     define("DB_USERNAME", "root");
     define("DB_PASSWORD", "");
     define("port", "4000");

      
     
    
 
     $connection = mysqli_connect(DB_HOST.":".port, DB_USERNAME, DB_PASSWORD);

     if(!$connection){
         die("Connection failed due to " . mysqli_connect_error());  
     }
    

?>