<?php

include 'config.php';
session_start();

$id = $_GET['id'];

echo $id;

$deletequery = "DELETE FROM `user` WHERE id='$id'";

mysqli_query($conn, $deletequery);

if ($deletequery) {
    echo "<script>alert('Delete Successfull')</script>";
    session_unset();
    session_destroy();
    header("location:login.php");
}
