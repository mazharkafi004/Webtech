<?php
//include_once "login_process.php";
//session_set_cookie_params(10,"/");
session_start();
$_user_id = $_SESSION['id'] ?? 0;

if ($_user_id) {
    header('Location: home.php');
    die();
}
?>

<html>
<script src="ajax.js"></script>

<body>
    <h1>Login</h1>
    <form action="login_process.php" method="post">
        E-mail: <input type="text" name="email"><br>
        Password <input type="password" name="password"><br>

        <input type="submit">
        <br>
        <button><a href="index.php">Register?</a></button>
    </form>

</body>

</html>