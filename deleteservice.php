<?php

include 'config.php';

$id = $_GET['id'];

echo $id;

$deletequery = "DELETE FROM `service_provider` WHERE id='$id'";

mysqli_query($conn, $deletequery);

if ($deletequery) {

    echo "<script>alert('Delete Successfull')</script>";
    header("location:showserviceadmin.php");
}
