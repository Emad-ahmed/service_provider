<?php
include 'config.php';





$category = $_POST['category'];



$insert_product = mysqli_query($conn, "INSERT INTO `service_category`(`category_name`) VALUES ('$category')");

if ($insert_product) {
    echo "<script>alert('Profile Successfully Inserted')</script>";
    echo "<script>location.href = 'addcategory.php'</script>";
} else {
    echo "<script>alert('Profile Not Inserted!')</script>";
    echo "<script>location.href = 'addcategory.php'</script>";
}
