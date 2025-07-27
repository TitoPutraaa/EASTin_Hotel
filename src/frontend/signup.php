<?php
    session_start();
    include "../backend/conection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link href="../css/output.css" rel="stylesheet">
</head>
<body>


<form action="../backend/signup_back.php" method="post" class="max-w-sm h-screen mx-auto flex flex-col justify-center">
  <div class="mb-5">
    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
    <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:border-blue-500" placeholder="nama" required />
  </div>
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
    <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:border-blue-500" placeholder="abc@gmail.com" required />
  </div>
  <div class="mb-3">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
    <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:border-blue-500" required />
  </div>
  <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "exists") {
            echo "<p style='color:red;'>Email or password already exists!</p>";
        } elseif ($_GET['error'] == "form_not_submitted") {
            echo "<p style='color:red;'>Please submit the form properly!</p>";
        }
    }
    ?>
  <button name="submit" value="submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>


</body>
</html>