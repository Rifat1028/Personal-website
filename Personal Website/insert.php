<?php

require 'config.php';
     // echo "Successfully connected to database";  
     if(isset($_POST['name'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $opinion = $_POST['opinion'];
     

     $sql = "INSERT INTO test.comment ( `name`, `email`, `opinion`, `date`)
      VALUES ( '$name', '$email', '$opinion', current_timestamp());";

     $result=mysqli_query($connection,$sql);

     if($connection ->query($sql) == true){
      // echo "Successfully Updated";
      $insert=true;
    }
 
}

?>