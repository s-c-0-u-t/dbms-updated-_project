
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://kit.fontawesome.com/b4cdd1bb0a.js" crossorigin="anonymous"></script>
    <title>Display</title>
</head>
<body>
<?php include "db_connect.php";?>
<?php include "admin.php" ?>
<style>
<?php include "styles.css" ?>
</style>
<?php 
session_start();
if(isset($_SESSION['t']))
{
  echo "<h1 class=' text-center text-3xl font-bold'>Updated Successfully!!!</h1>";
}
else{
  echo "";
}
?> 
    <table class="table">
          <tr class="bg-blue-60">
            <th>Sno</th>
            <th>Type</th>
            <th>Model</th>
            <th>Status</th>
            <th>Fuel Type</th>
            <th>Registration No</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        <?php
        $data="SELECT * FROM vehicle";
        $result=mysqli_query($conn,$data);
        while($row=$result->fetch_array())
        {
           echo
           "
           <tr>
           <td class='rows'>".$row["Sno"]."</td>
           <td class='rows'>".$row["Types"]."</td>
           <td class='rows'>".$row["Model"]."</td>
           <td class='rows'>".$row["Fuel"]."</td>
           <td class='rows'>".$row["statuss"]."</td>
           <td class='rows'>".$row["Reg"]."</td>
           <td class=' text-2xl font-bold text-blue-800'><a href='updatevehicle.php?updateid=".$row["Sno"]."'<i class='fa-solid fa-pen-to-square'></i></a></td>
           <td class=' text-2xl text-red-900'><a href='deletevehicle.php?deleteid=".$row["Sno"]."'<i class=' fa-solid fa-trash'></i></a></td>
           </tr>
            ";
         } 
        ?>

    </table>
    <?php
session_destroy();
?>
</body>
</html>