<?php

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
    <h1>Register</h1>
    <form action="action.php" method="post">
        Name: <input type="text" placeholder="Enter your name" name="name"><br>
        E-mail: <input type="text" placeholder="Enter your e-mail" name="email"><br>
        Password <input type="password" placeholder="Enter your password" name="password"><br>
        <input type="submit">
        <h3>Already have an account?</h3>
        <button><a href="login.php">Login</a></button>
    </form>

</body>

</html>