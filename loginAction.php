<?php

include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];
$pass = md5($password);






$_result = mysqli_query($conn, "SELECT * FROM `user` WHERE email ='$email' And password='$pass'");
$data = mysqli_fetch_array($_result);


if (mysqli_num_rows($_result)) {
    if($data['panel']=="user")
    {
        session_start();
        $_SESSION['email'] = $email;
        echo "<script>alert('Login Successfull')</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else{    
        session_start();
        $_SESSION['email'] = $email;
        echo "<script>alert('Login Successfull')</script>";
        echo "<script>location.href = 'index.php'</script>";
    }
    
} elseif ($id_no == "admin12@gmail.com" && $password == "12345") {
    session_start();
    $_SESSION['admin'] = $email;
    echo "<script>location.href = 'admin/home.php'</script>";
} else {
    echo "<script>alert('Incorrect Username Or Password')</script>";
    echo "<script>location.href = 'login.php'</script>";
}




