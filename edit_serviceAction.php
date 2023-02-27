<?php

include 'config.php';
$id = $_POST['id'];


$amount_of_work = $_POST['amount_of_work'];
$expertise = $_POST['expertise'];
$work_hour = $_POST['work_hour'];
$mobile = $_POST['mobile'];


$oldImage = $_POST['oldImage'];
$oldNid = $_POST['oldNid'];


$patient_pdf_file = $_FILES['nid']['name'];
$patient_tmp_file = $_FILES['nid']['tmp_name'];
move_uploaded_file($patient_tmp_file,"nid/".$patient_pdf_file);

$image_file = $_FILES['add_image']['name'];
$image_tmp_file = $_FILES['add_image']['tmp_name'];
move_uploaded_file($image_tmp_file,"serviceimage/".$image_file);



if ($image_file || $patient_pdf_file) {
    $updateQuery = "UPDATE `service_provider` SET `amount_of_tk`='$amount_of_work',`expertise`='$expertise',`work_hour`='$work_hour',`mobile`='$mobile',`nid`='$patient_pdf_file',`add_image`='$image_file' WHERE id='$id'";
    move_uploaded_file($patient_tmp_file,"nid/".$patient_pdf_file);
    move_uploaded_file($image_tmp_file,"serviceimage/".$image_file);
} else {
    $updateQuery = "UPDATE `service_provider` SET `amount_of_tk`='$amount_of_work',`expertise`='$expertise',`work_hour`='$work_hour',`mobile`='$mobile',`nid`='$oldNid',`add_image`='$oldNid' WHERE id='$id'";
    move_uploaded_file($patient_tmp_file,"nid/".$oldNid);
    move_uploaded_file($image_tmp_file,"serviceimage/".$oldImage);
}




if (!mysqli_query($conn, $updateQuery)) {

    die("Not updated!");
} else {

    echo "<script>alert('Data updated!!')</script>";
    echo "<script>location.href='profile.php'</script>";
}
