<head>
    <link rel="stylesheet" type = "text/css" href="Styles.css">
</head>
<header>
<a href ="ShoppingPage1.php">Page 1</a>
<a href ="ShoppingPage2.php">Page 2</a>
<a href ="ShoppingPage3.php">Page 3</a>
<a href = "Logout.php">Logout</a>
</header>
<?php
if(!isset($_SESSION["loggin"]))
{
    print("You are trying to access this page directly!");
}
elseif($_SESSION["loggin"]==1 )
{
    $_SESSION["loggin"] = 1;
    print("You already logged in!");
    echo $_SESSION["username"];
}
else
{
$_SESSION["loggin"]  = 1;
print("Logging successful!");
$_SESSION["username"] = $_POST["login"];
    echo $_SESSION["username"];
}
?>

