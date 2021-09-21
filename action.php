

<?php
//session_start();
include_once "config.php";




    $name =  $_REQUEST['name'];
    $email =  $_REQUEST['email'];
    $password = $_REQUEST['password'];

     if ( $email && $password && $name) {
            $hash = password_hash( $password, PASSWORD_BCRYPT );
           
            $query = "INSERT INTO datatable(name,email, password) VALUES('{$name}','{$email}','{$hash}')";
          $sql=  mysqli_query($conn,$query);
    
if($sql) {
      echo "user created successfully"; 
     
      header("Location: login.php");
}




        
     }
   
        $conn->close();
  
    