<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ../bootstrap.min.css">
    <title>Update</title>
</head>
<body>
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
    <?php
    $get=$_GET['Sid'];
    $sql4="SELECT * FROM `clean` WHERE id = '{$get}'";
    $valid=mysqli_query($con,$sql4);

    while($row=mysqli_fetch_assoc($valid)){
    ?>
   
    <form action="delete.php" method="POST" class="post-form">
    <!-- <label for="id" class="form-label">Student ID: </label> -->
    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']?>" >
    <br>    
    <label for="name" class="form-label">Name: </label>
    <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>" >
    <br>
    <label for="description" class="form-label">Description: </label>
    <input type="text" class="form-control" name="description" value="<?php echo $row['description']?>" >
    <br>
    <label for="price" class="form-label">Price: </label>
    <input type="text" class="form-control" name="price" value="<?php echo $row['price']?>" >
    <br>
   
    <input type="submit" value="SUBMIT" class="btn btn-lg btn-info mt-2" name="" id="">
</form>
    
    <?php } ?>
    </div>
</body>
</html>