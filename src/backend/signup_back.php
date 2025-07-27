<?php
    session_start();
    include "../backend/conection.php";
?>

<?php 
    if (isset($_POST["submit"])) {
        $_SESSION["name"] = $_POST["name"];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
    } else {
        echo "eror bang";
    }
    $name = $_SESSION["name"];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $row = "SELECT * FROM user 
            WHERE pasword = '$password' OR gmail = '$email'";
    $check_row = mysqli_query($conn, $row);
    $count_row = mysqli_num_rows($check_row);

    if($count_row == 0) {
        $query_insert = "INSERT INTO user (name, gmail, pasword)
        VALUES ('$name', '$email', '$password')";
        $sql = mysqli_query($conn, $query_insert);
        header("location: ../frontend/login.php");
        exit();
    } else {
        header("Location: ../frontend/signup.php?error=exists");
        exit();
    }




?>