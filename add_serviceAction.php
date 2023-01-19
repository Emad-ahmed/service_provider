<?php

include 'config.php';

session_start();

$email = $_SESSION['email'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$data = mysqli_fetch_array($datafetchquery);
$user_id = $data['id'];


$amount_of_work = $_POST['amount_of_work'];
$expertise = $_POST['expertise'];
$work_hour = $_POST['work_hour'];




$insert_query = "INSERT INTO `service_provider`(`user_id`, `amount_of_tk`, `expertise`, `work_hour`) VALUES ('$user_id','$amount_of_work','$expertise', '$work_hour')";
mysqli_query($conn,  $insert_query);
echo "<script>alert('Successfully Inserted')</script>";
echo "<script>location.href = 'add_service.php'</script>";