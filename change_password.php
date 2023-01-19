<?php include('navbar.php') ?>


<?php
include 'config.php';

$user_email = $_SESSION['email'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$user_email'");
$data = mysqli_fetch_array($datafetchquery);
?>


<link rel="stylesheet" href="static/css/login.css">

<div  style="margin-top: 2rem; border-radius:1rem" class="w-50 mt-5 mb-5 m-auto bg-white border p-5">
    <h2 class="text-center mt-2 mb-2">Change Password</h2>
    <hr>
    <form method="POST" action="change_passwordAction.php"> 
  
    <div class="mb-3">
        <label for="current_password" class="form-label">Current Password</label>
        <input type="password" class="form-control" id="current_password" name="current_password">
    </div>

    <div class="mb-3">
        <label for="new_password" class="form-label">New Password</label>
        <input type="password" class="form-control" id="new_password" name="new_password">
    </div>

    <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
    </div>
    
    <div class="text-center"><button type="submit" class="btn btn-primary col-8" >Change Password</button></div>
    
    </form>

</div>


<?php include('footer.php') ?> -->