<?php include "db_connect.php" ?>
<?php include "admin.php" ?>
<?php session_start();
$_SESSION['t']="true";
?>
<?php

$id=$_GET['updateid'];
if(isset($_POST['post']))
{   
    $regno=$_POST['regno'];
    $type=strtoupper($_POST['type']);
    $make=strtoupper($_POST['make']);
    $status=$_POST['status'];
    $fuel=strtoupper($_POST['fuel']);

    $q=" update vehicle set reg='$regno',Types='$type',Model='$make',statuss='$status',Fuel='$fuel' where Sno=$id";
     

    $result=mysqli_query($conn,$q);
    if($result)
    {
        header("location:Managevehicle.php");
    }
    else{ echo 'unsucessfull';}
}
$n="select * from vehicle where Sno=$id";
$update=mysqli_query($conn,$n);

?>


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
    <h3 class="text-center fs-2 mt-0">Update Vehicle</h3>
    <div class="d-flex justify-content-center align-items-center mx-auto" style="min-height:80vh">
        <form class="border shadow p-3 rounded col-sm-4 " method="post">
        <div class="mb-3 algin-self-center">
        <label for="exampleInputEmail1class" class="form-label">
        Registration no</label>
        <input type="text" value=
        <?php 
        while($row=$update->fetch_array())
        { 
        echo "".$row["Reg"]."";
        }
        ?>
        name="regno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1"class="form-label">Vehicle Type</label>
        <input type="text"  value=
        <?php 
        $n="select * from vehicle where Sno=$id";
        $update=mysqli_query($conn,$n);
        while($row=$update->fetch_array())
        {
        echo "".$row["Types"]."";
        }
        ?>
        name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1"
        class="form-label">Make/model</label>
        <input type="text" value=
        <?php 
        $n="select * from vehicle where Sno=$id";
        $update=mysqli_query($conn,$n);
        while($row=$update->fetch_array())
        {
        echo "".$row["Model"]."";
        }
        ?> name="make" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
        <option selected value=
        <?php 
        $n="select * from vehicle where Sno=$id";
        $update=mysqli_query($conn,$n);
        while($row=$update->fetch_array())
        {
        echo "".$row["Fuel"]."";
        }
        ?>
        >Petrol</option>
        <option value="diesel">Diesel</option>
         </select>
         <div class="d-flex justify-content-center row-cols-3 button">
         <button type="submit" class="btn btn-primary" name="post" >Update</button>
         </div>
  </div>
 </form>

</body>
</html>
