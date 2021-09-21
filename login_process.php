<?php

session_start();
include_once "config.php";

$conn = mysqli_connect( $servername, $username, $password, $dbname );

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 else
 {
        $email = $_POST['email'] ?? ''; 
        $password = $_POST['password'] ?? '';
         if ( $username && $password ) {
            $query = "SELECT id, password FROM datatable WHERE email='{$email}'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                $data = mysqli_fetch_assoc($result);
                $_password = $data['password'];
             $_id = $data['id'];
                if(password_verify($password,$_password)){
              $_SESSION['id'] = $_id;
                    header("Location: home.php");
                    die();
                   
                    echo "Successful";
                   
                }
            }else{
                echo "Not Found";
                  header("Location: login.php");
                 
            }

        }
        echo "Not Found";
        header("Location: login.php");
        }
?>