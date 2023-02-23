<?php

include 'config.php';

$id = $_GET['id'];



$updateQuery = "UPDATE `service_provider` SET `status`='True' WHERE id='$id'";


if (!mysqli_query($conn, $updateQuery)) {

    die("Not updated!");
} else {

    echo "<script>alert('Data updated!!')</script>";
    echo "<script>location.href='showserviceadmin.php'</script>";
}
