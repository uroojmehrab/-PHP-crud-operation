<?php
require 'adminpanel/config.php';
session_start();
session_destroy();
session_unset();
header("location: login.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="home.php">home</a>
</body>
</html>