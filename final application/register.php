<?php
session_start();
require 'adminpanel/config.php';
if(isset($_POST['registerbtn'])){
    $un=$_POST['name'];
    $em=$_POST['email'];
    $up=$_POST['password'];
    $user_type=$_POST['roll'];
$sql="INSERT INTO `userinfo`(`name`,`email`, `password`) VALUES ('$un', ' $em','$up')";
$result=mysqli_query($con,$sql);

if(!$result){
    echo "user not registered";
}else{
  header("location: login.php");
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>registration</title>
   

</head>
<body>


<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ariba</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        
        
        <li class="nav-item">
          <a href="register.php" class="nav-link " text-light>Register</a>
        </li>
        <li class="nav-item">
          <a href="login.php" class="nav-link ">Login</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="container">
<h1>User Registration Form</h1>
<form action="" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" >
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>


  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>

  <!-- <div class="">
  <label for="roll" class="form-label">Select</label>
 <select name="roll" id="">
 
  <option value="user">User</option>


 </select>

  </div> -->
 
  <button type="submit" value="SUBMIT" name="registerbtn" class="btn btn-primary">Submit</button>
</form>
</div> 
</body>
</html>