<html>
<script src="ajax.js"></script>

<body>
    <h2>You are logged In!!!</h2>
  
</body>

</html>



<?php

session_start();
include_once "config.php";
$_user_id = $_SESSION['id'] ?? 0;
if (!$_user_id) {
    header('Location: index.php');
    die();
}
?>
<?php
$sql = "SELECT name,email,id FROM datatable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        $var = $row["id"];
        //echo $var;

        echo "
        <tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "
                </td>
              <td>
               <a href='edit.php?data=$var' <button>Edit</button>  </a> 
               </td>
               <td>
               <a href='delete.php?data=$var' <button>Delete</button>  </a> 
               </td>
              
                </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
?>


<body>



    <button><a href="logout.php">Logout?</a></button>
</body>