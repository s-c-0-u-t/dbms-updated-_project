
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign new Driver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b4cdd1bb0a.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include "admin.php" ?>
<?php include "db_connect.php" ?>
<h3 class="text-center fs-2 mt-7">Assign New Driver</h3>
     <div class="d-flex justify-content-center align-items-center mx-auto"             style="min-height:80vh">
    <form class="border shadow p-3 rounded col-sm-4 " action="driver.php" method="post">
        <label for="exampleInputEmail1" class="form-label">Driver Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="mb-3">
        <label for="exampleInputEmail1"class="form-label">Vehicle Type</label>
        <select class="mb-3 form-select" aria-label="Default select example" name="type">
        <?php
        $n="select * from vehicle";
        $update=mysqli_query($conn,$n);
        while($row=$update->fetch_array())
        {
        ?>
        <option value="<?php echo $row['Types']?>"><?php echo $row['Types']?>
        <?php
        }
        ?>
        </select>
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1"
        class="form-label">Make/model</label>
        <select class="mb-3 form-select" aria-label="Default select example" name="model">
        <?php
        $n="select * from vehicle";
        $update=mysqli_query($conn,$n);
        while($row=$update->fetch_array())
        {
        ?>
        <option selected value="<?php echo $row['Model']?>"><?php echo $row['Model']?>
        <?php
        }
        ?>
        </select>
        </div>
         <label for="exampleInputEmail1"
         class="form-label">Fuel Type</label>
         <select class="mb-3 form-select" aria-label="Default select example" name="fuel">
            <option selected value="petrol">Petrol</option>
            <option value="diesel">Diesel</option>
         </select>
         <div class="d-flex justify-content-center row-cols-3 button">
         <button name="submit" type="submit" class="btn btn-primary text-black fs-5" >Submit</button>
         </div>
  </div>
    </form>
</body>
</html>
<?php
if (!empty($_POST['name'])&&isset($_POST['submit']))
{
    $name=strtoupper($_POST['name']);
    $type=strtoupper($_POST['type']);
    $make=strtoupper($_POST['model']);
    $fuel=strtoupper($_POST['fuel']);

if(empty($type)){
    header("Location:index.php?error=type is required");
}

else if(empty($fuel)){
    header("Location:index.php?error=fuel is required");
}

$sql="INSERT INTO driver(Nme,Types,Model,Fuel) values('$name','$type','$make','$fuel')";

$result=mysqli_query($conn,$sql);
if($result)
{
    echo "<h1 class='text-center text-3xl  -mb-52 font-bold'>Added Successfully!!!</h1>";
}

}

?>

