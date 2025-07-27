<?php 
    session_start();
    include "../backend/conection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="../css/output.css" rel="stylesheet">
</head>
<body>
    <form action="../backend/login_back.php" method="post" class="max-w-sm h-screen mx-auto flex flex-col justify-center">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
            <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="abc@gmail.com" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
            <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "required />
        </div>
          <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "notfound") {
                        echo "<p style='color:red;'>Email or password wrong!</p>";
                    } elseif ($_GET['error'] == "form_not_submitted") {
                        echo "<p style='color:red;'>Please submit the form properly!</p>";
                    }
                }
            ?>
        <button name="login" value="submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
    </form>
</body>
</html>