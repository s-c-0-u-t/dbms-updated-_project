
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

  <body>
  <nav  style="background: linear-gradient(45deg,#fbda61,#ff5acd);"class="bg-blue-500 shadow-lg">
  <div class="container mx-auto">
    <div class="sm:flex justify-around		">
      <a href="admin.php" class="text-black text-3xl font-bold p-3">ADMIN</a>
      <ul class="text-black-600  text-2xl font-bold sm:self-center text-xl border-t sm:border-none">
        <li class="sm:inline-block rounded-md	">
          <a href="admin.php" class="p-3 hover:text-white ">Home</a>
        </li>
        <button style="background: linear-gradient(45deg,#fbda61,#ff5acd);"id="dropdownDefault" data-dropdown-toggle="dropdown" class=" text-black font-bold text-xl bg-blue-500 hover:text-white rounded-lg  px-4 py-2.5 text-center  inline-flex items-center" type="button">Vehicle <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
       <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
      <li>
        <a href="Addvehicle.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Vehicle</a>
      </li>
      <li>
        <a href="Managevehicle.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Manage Vehicle</a>
      </li>
      <li>
        <a href="driver.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add new driver</a>
      </li>
    </ul>
    </div>
        <li class="sm:inline-block">
          <a href="#" class="p-3 hover:text-white">Services</a>
        </li>
        <li class="sm:inline-block">
          <a href="about.php" class="p-3 hover:text-white">About</a>
        </li>
        <li class="sm:inline-block">
          <a href="index.php" class="p-3 hover:text-white">Logout</a>
        </li>
      </ul>
  </div>
  </div>
</nav>
        
  

<script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>

  </body>


</html>