<?php

include 'config.php';
$id = $_POST['id'];


$category = $_POST['category'];

$updateQuery = "UPDATE `service_category` SET `category_name`='$category' WHERE id = '$id'";
   




if (!mysqli_query($conn, $updateQuery)) {
    die("Not updated!");
} else {

    echo "<script>alert('Data updated!!')</script>";
    echo "<script>location.href='showcategory.php'</script>";
}
