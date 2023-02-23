<?php
include 'config.php';

session_start();

if(!isset($_SESSION['email']))
{
    echo "<script>location.href = 'login.php'</script>";
}

$email = $_SESSION['email'];



$message = $_POST['message'];
$title = $_POST['title'];



$id = $_GET['id'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id AND service_provider.id = '$id'");
$data = mysqli_fetch_array($datafetchquery);

$datafetchqueryemail = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
$dataemail = mysqli_fetch_array($datafetchqueryemail);


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



echo "<script>alert('Successfully Send Email')</script>";
echo "<script>location.href = 'show_service.php?id=$data[id]'</script>";



?>
