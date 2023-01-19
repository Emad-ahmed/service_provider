<?php

include 'config.php';

session_start();

$email = $_SESSION['email'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$data = mysqli_fetch_array($datafetchquery);
$id = $data['id'];


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$profession = $_POST['profession'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];
$age = $_POST['age'];

$image = $_FILES['nimg'];
$oldImage = $_POST['oldImage'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = "ProfileImage/" . $imageName;


if (strlen($imageDes) > 13) {
    $updateQuery = "UPDATE `user` SET `last_name`='$l_name',`first_name`='$f_name',`email`='$email', `city`='$city',`age`='$age',`mobile`='$mobile',`profession`='$profession',`image`='$imageDes' WHERE id = '$id'";
    move_uploaded_file($imageLocation, $imageDes);
} else{
    $updateQuery = "UPDATE `user` SET `last_name`='$l_name',`first_name`='$f_name',`email`='$email', `city`='$city',`age`='$age',`mobile`='$mobile',`profession`='$profession',`image`='$oldImage' WHERE id = '$id'";
    move_uploaded_file($imageLocation, $oldImage);
}


if (!mysqli_query($conn, $updateQuery)) {
    die("Not updated!");
} else {
    echo "<script>alert('Data updated!!')</script>";
    echo "<script>location.href='profile.php'</script>";
}
