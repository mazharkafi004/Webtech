<html>

<body>
    <h3>Looks like you are logged In!!!!<br>
        congratulations</h3>

</body>

</html>

<?php
include_once "config.php";


$var = $_GET['data'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    $name =  $_REQUEST['name1'];
    $email = $_REQUEST['email1'];
    $pass = $_REQUEST['pass1'];
    $hash1 = password_hash($pass, PASSWORD_BCRYPT);
    $sql = "UPDATE datatable SET name='$name', email='$email',password='$hash1' WHERE id='$var' ";

    if ($conn->query($sql)) {
       header('Location: home.php');
        }


        $conn->close();
    
}

?>
<html>

<body>

    <button><a href="logout.php">Logout?</a></button>
</body>

</html>