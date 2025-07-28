<?php
$conn=mysqli_connect("localhost","root","","from");

if(!$conn){
    echo "not connected";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ../bootstrap.min.css">
    <title>Create</title>
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
    
    <!-- form -->
    <div class="container">
    <form action="create.php" method="POST">
    <!-- <label for="id" class="form-label">Student ID: </label>
    <input type="text" class="form-control" name="ID"  >
    <br>     -->
    <label for="name" class="form-label">Name: </label>
    <input type="text" class="form-control" name="name" >
    <br>
   
    <label for="desc" class="form-label">Description: </label>
    <input type="text" class="form-control" name="description" >
    <br>
    <label for="price" class="form-label">Price: </label>
    <input type="text" class="form-control" name="price"  >
    <br>
    <input type="submit" value="SUBMIT" class="btn btn-lg btn-info mt-2" name="" id="">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // $id=$_POST['id'];
    $nm=$_POST['name'];
    $desc=$_POST['description'];
    $pr=$_POST['price'];

    $sql="INSERT INTO `clean`(`name`,`description`,`price`) VALUES('$nm','$desc','$pr')";
    $validate=mysqli_query($conn,$sql);

  
}
?>
<?php
if(isset($_GET['deleteid'])){
  $did=$_GET['deleteid'];
  $query5="DELETE FROM clean WHERE `clean`.`id` = '{$did}'";
  $vali=mysqli_query($conn,$query5);
}
?>
</div>
<div class="container">
<?php
    
    $sql1="SELECT * FROM `clean`";
    $validate=mysqli_query($conn,$sql1);
    ?>
<table class="table table-info" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th> NAME</th>
                <th>DESCRIPTION</th>
                <th>PRICE</th>
                <th>EDIT</th>
                <th>DELETE</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($validate)){

            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo $row['price']?></td>
                <td><a href="update.php?Sid=<?php echo $row['id']?>">Edit</a></td>
                <td><a href="create.php?deleteid=<?php echo $row['id']?>">Delete</a></td>
                
            </tr>
            <?php
             } ?>
        </tbody>


    </table>
</div>

<!-- // if($role=='user');
// {
//   include('uindex.php');
// } -->

</body>
</html>