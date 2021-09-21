<html>

<body>
    <?php

    $var = $_GET['data'];
    // echo $var;
    ?>
    <form action="act.php" method="get">
        <input type="hidden" name="data" value=<?php echo $var ?>>
        Name: <input type="text" name="name1"><br>
        Password: <input type="password" name="pass1"><br>
        E-mail: <input type="text" name="email1"><br>
        <input type="submit">
    </form>

</body>

</html>