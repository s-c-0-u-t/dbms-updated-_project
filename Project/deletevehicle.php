<?php include "db_connect.php" ?>
<?php include "admin.php" ?>

<?php
if(isset($_GET['deleteid']))
{   
    $id=$_GET['deleteid'];

    $q="delete from vehicle where Sno=$id";
 
    $result=mysqli_query($conn,$q);

  if($result)
    {
        echo 'sucess';
        header("location:Managevehicle.php");
    }
    else{ echo 'unsucessfull';}
}


?>