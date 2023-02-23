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
$mobile = $_POST['mobile'];



$patient_pdf_file = $_FILES['nid']['name'];
$patient_tmp_file = $_FILES['nid']['tmp_name'];
move_uploaded_file($patient_tmp_file,"nid/".$patient_pdf_file);

$image_file = $_FILES['add_image']['name'];
$image_tmp_file = $_FILES['add_image']['tmp_name'];
move_uploaded_file($image_tmp_file,"serviceimage/".$image_file);

$insert_query = "INSERT INTO `service_provider`(`user_id`, `amount_of_tk`, `expertise`, `work_hour`, `mobile`, `nid`, `add_image`) VALUES ('$user_id','$amount_of_work','$expertise', '$work_hour', '$mobile', '$patient_pdf_file', '$image_file')";
mysqli_query($conn,  $insert_query);
echo "<script>alert('Successfully Inserted')</script>";
echo "<script>location.href = 'add_service.php'</script>";