<?php

include 'config.php';
session_start();

$id = $_GET['id'];

echo $id;

$deletequery = "DELETE FROM `service_category` WHERE id='$id'";

mysqli_query($conn, $deletequery);

if ($deletequery) {
    echo "<script>alert('Delete Successfull')</script>";
    header("location:showcategory.php");
}
