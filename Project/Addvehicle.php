<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD VEHICLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b4cdd1bb0a.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include "admin.php" ?>
<?php include "db_connect.php" ?>
</style>
<?php 
if(isset($_SESSION['r']))
{
  echo "<h1 class='text-center text-3xl font-bold'>Added Successfully!!!</h1>";
}
else{
    echo "";
}
?> 
    <h3 class="text-center fs-2 mt-7">Add New Vehicle</h3>
  <div class="d-flex justify-content-center align-items-center mx-auto" style="min-height:80vh">
        <form class="border shadow p-3 rounded col-sm-4 " action="Addvehicle.php" method="post">
        <div class="mb-3 algin-self-center">
        <label for="exampleInputEmail1class" class="form-label">
        Registration no</label>
        <input type="text" name="regno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1"class="form-label">Vehicle Type</label>
        <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1"
        class="form-label">Make/model</label>
        <input type="text" name="make" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <label for="exampleInputEmail1" class="form-label">Status</label>
        <select class="mb-3 form-select" aria-label="Default select example" name="status">
            <option selected value="Active">Active</option>
            <option value="Inactive">InActive</option>
            <option value="sold">Sold</option>
         </select>
         <label for="exampleInputEmail1"
         class="form-label">Fuel Type</label>
         <select class="mb-3 form-select" aria-label="Default select example" name="fuel">
            <option selected value="petrol">Petrol</option>
            <option value="diesel">Diesel</option>
         </select>
         <div class="d-flex justify-content-center row-cols-3 button">
         <button type="submit" class="btn btn-primary text-black fs-4 " >Submit</button>
         </div>
  </div>
 </form>

</body>
</html>
<?php

if (isset($_POST['regno'])&& isset($_POST['type']) && isset($_POST['make'])&& isset($_POST['status'])&& isset($_POST['fuel']))
{
    $regno=$_POST['regno'];
    $type=strtoupper($_POST['type']);
    $make=strtoupper($_POST['make']);
    $status=$_POST['status'];
    $fuel=strtoupper($_POST['fuel']);

if(empty($regno)){
    header("Location:index.php?error=regno is required");
}
else if(empty($type)){
    header("Location:index.php?error=type is required");
}
else if(empty($make)){
    header("Location:index.php?error=type is required");
}
else if(empty($status)){
    header("Location:index.php?error=status is required");
}
else if(empty($fuel)){
    header("Location:index.php?error=fuel is required");
}

$sql="INSERT INTO vehicle(Types,Model,fuel,statuss,reg) values('$type','$make','$fuel','$status','$regno')";

$result=mysqli_query($conn,$sql);
}

?>