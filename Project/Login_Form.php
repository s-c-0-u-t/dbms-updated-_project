<?php 
   session_start();
   include "db_connect.php"; 
?> 
<?php
if (isset($_POST['username'])&& isset($_POST['password']) && isset($_POST['role']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $role=$_POST['role'];


if(empty($username)){
    header("Location:index.php?error=Username is required");
}
else if(empty($password)){
    header("Location:index.php?error=Password is required");
}
else if(empty($role)){
    header("Location:index.php?error=Select user type");
}

$sql="select * from user where username='".$username."' AND password='".$password."' AND usertype='".$role."'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

if($row["usertype"]=="admin")
{
 header("location:admin.php");
}
else if($row["usertype"]=="user")
{
 header("location:user.php");
}
else{
    echo "Username or password does not match";
}

}




?>