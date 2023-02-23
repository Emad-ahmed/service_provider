<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sub = $_POST['sub'];
$message = $_POST['message'];



$to = "amadahmed1234678@gmail.com";
$subject = "$sub";
$message = "Hello  Text From $name\n.$message";
$headers = "From: $email";
mail($to, $subject, $message, $headers);



echo "<script>alert('Successfully Send Email')</script>";
echo "<script>location.href = 'contact.php'</script>";



?>
