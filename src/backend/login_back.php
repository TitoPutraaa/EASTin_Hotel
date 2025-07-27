<?php
    session_start();
    include "../backend/conection.php";
?>

<?php 
    if(isset($_POST['login'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
    }else {
        echo "it's doesnt set";
    }

    $email = $_SESSION['email'];
    $pass = $_SESSION['password'];

    $query = "SELECT * FROM user WHERE gmail = '$email' AND pasword = '$pass'";
    $sql = mysqli_query($conn, $query);
    $row_check = mysqli_num_rows($sql);
    
    if($row_check == 1) {
        header("location: ../frontend/home.php");
        exit();
    } else {
        header("location: ../frontend/login.php?error=notfound");
        exit();
    }
?>