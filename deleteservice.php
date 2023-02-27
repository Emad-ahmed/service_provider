<?php

include 'config.php';

$id = $_GET['id'];

echo $id;

$deletequery = "DELETE FROM `service_provider` WHERE id='$id'";

mysqli_query($conn, $deletequery);

if ($deletequery) {

    $myemail = $data['email'];
    $mobile = $dataemail['mobile'];
    echo $myemail;
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];

    $to = "$myemail";
    $subject = "Text From ";
    $message = "Hello  $first_name $last_name.\n$title\n$message.\nYou Can Call Me In This Number 0$mobile";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);

    echo "<script>alert('Delete Successfull')</script>";
    header("location:showserviceadmin.php");
}
