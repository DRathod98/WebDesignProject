<!DOCTYPE html>
<?php
session_start();
?>
<html><head>
    <link rel="stylesheet" type = "text/css" href="Styles.css">
    </head>
<body>
<?php
$_SESSION["loggin"]=0;
$_SESSION["username"] = "";
?>
Please, write your name!
<form action = "ShoppingPage1.php" target="_self" method = "post">
Login: <input type="text" name = "login" value = "">
<input type = "submit" value = "Submit">
</form>

</body>
</html>