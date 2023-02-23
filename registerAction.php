<?php
include 'config.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$panel = $_POST['panel'];
$pass = md5($_POST['password']);
$cpass = md5($_POST['conpassword']);


$_name_pattern = "/^[a-zA-Z. ]+$/";
$_emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$_password_pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";

$_duplicate_email = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");

if (mysqli_num_rows($_duplicate_email) > 0) {
    echo "<script>alert('Email Already Taken')</script>";
    echo "<script>location.href = 'registration.php'</script>";
} elseif (!preg_match($_name_pattern, $first_name)) {
    echo "<script>alert('Invalid Username')</script>";
    echo "<script>location.href = 'registration.php'</script>";
} elseif (!preg_match($_name_pattern, $last_name)) {
    echo "<script>alert('Invalid Username')</script>";
    echo "<script>location.href = 'registration.php'</script>";
}elseif (!preg_match($_emailPattern, $email)) {
    echo "<script>alert('Invalid Email')</script>";
    echo "<script>location.href = 'registration.php'</script>";
} elseif ($pass !== $cpass) {
    echo "<script>alert('Password Not Match')</script>";
    echo "<script>location.href = 'registration.php'</script>";
} else {
    $insert_query = "INSERT INTO `user`(`panel`,`last_name`, `first_name`, `email`, `password`) VALUES ('$panel','$last_name','$first_name','$email','$pass')";
    mysqli_query($conn,  $insert_query);
    echo "<script>alert('Successfully Inserted')</script>";
    echo "<script>location.href = 'login.php'</script>";
}
