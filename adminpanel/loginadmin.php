<?php
session_start();
require 'config.php';
if(isset($_POST['loginbtn'])){
    $un = $_POST['name'];
    $em=$_POST['email'];
    $up = $_POST['password'];
    $user_type = $_POST['roll'];
    // $user_type=$_POST['roll'];
   $sql1="SELECT * FROM `userinfo` where name ='$un' " ;
   $result1=mysqli_query($con,$sql1);


   if (mysqli_num_rows($result1)> 0){
    $row = mysqli_fetch_array($result1);
    if($row['roll']  == 'admin'){
$_SESSION['adminname'] = $row['name'];
        header("location: indexadmin.php");
    }elseif($row['roll']  == 'user'){
      $_SESSION['username'] = $row['name'];
      header("location: ../index.php");
    }else{
      echo "incorrect details";
    }

   }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ../bootstrap.min.css">
    <title>login</title>
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
          <a class="nav-link active" aria-current="page" href=" ../home.php">Home</a>
        </li>
        
        
        <li class="nav-item">
          <a href="registeradmin.php" class="nav-link " text-light>Register</a>
        </li>
        <li class="nav-item">
          <a href="loginadmin.php" class="nav-link ">Login</a>
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
<h1>Admin Login Form</h1>
<form action="" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" name="name" id="exampleInputEmail1" >
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  
  <button type="submit" value="SUBMIT" name="loginbtn" class="btn btn-primary">Submit</button>
</form> 
</div>  
</body>
</html>