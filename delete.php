<html>

<body>
    <h3>Looks like you are logged In!!!!<br>
        congratulations</h3>

</body>

</html>
<?php
include_once "config.php";


$var = $_GET['data'];
//echo $var;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {


    $sql = "DELETE from datatable  WHERE id='$var' ";

    if ($conn->query($sql)) {
        header('Location: home.php');
    }
} ?>
<html>

<body>

    <button><a href="logout.php">Logout?</a></button>
</body>

</html>