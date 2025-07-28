<?php
$con=mysqli_connect('localhost', 'root', '', 'from');

if(!$con){
    die("Could not connect to database :".mysqli_error());
}

?>