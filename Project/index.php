<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-gradient">
    <div class="d-flex justify-content-center align-items-center" style="min-height:100vh">
     <form class="border shadow p-3 rounded col-sm-4 " action="./Login_Form.php" method="post">
         <h1 class="p-3 text-center">LOGIN</h1>
         <div class="mb-3 align-self-center">
          <?php
           if(isset($_GET['error']))
           {
            ?>
            <div class="alert alert-danger" role="alert">
             <?=$_GET['error']?>
            </div>
          <?php
           }
            ?>
          <label for="exampleInputEmail1" class=" form-label">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputEmail1">
         </div>
         <div class="mb-3 align-self-center">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password"class="form-control" id="exampleInputPassword1">
         </div>
         <label for="user-type" class="mb-3 ">Select User Type:</label>
         <select class="mb-3 form-select" aria-label="Default select example" name="role">
            <option selected>Choose user type</option>
            <option selected value="user">User</option>
            <option value="admin">Admin</option>
         </select>
         <div class="d-flex justify-content-center row-cols-2 button">
         <button type="submit" class="btn btn-primary">Submit</button>
         </div>
    </form>
 </div>
</body>
</html>