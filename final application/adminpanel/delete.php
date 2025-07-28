<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ../bootstrap.min.css">
    <title>clean3</title>
</head>
<body>
    
    <?php
    $uid=$_POST['id'];
    $unm=$_POST['name'];
    $dsc=$_POST['description'];
    $upr=$_POST['price'];
  
    echo $unm;
    $conn=mysqli_connect("localhost","root","","from");
    $que4="UPDATE `clean` SET `name`=' {$unm}',`description`='{$dsc}',`price`='{$upr}' WHERE  `clean`.`id` = '{$uid}';";
   

    $valid=mysqli_query($conn,$que4);
    header("location:http://localhost:82/application/adminpanel/indexadmin.php");
    ?>
</body>
</html>
UPDATE `clean` SET `id`='[value-1]',`name`='[value-2]',`description`='[value-3]',`price`='[value-4]' WHERE 1
$que4="UPDATE `clean` SET `name` = '{$ufnm}',`lname` = '{$ulnm}',`email` = '{$uem}' ,`password` = '{$upass}' WHERE `neat`.`id` = '{$uid}';";
