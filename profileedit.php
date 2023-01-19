<?php include('navbar.php') ?>


<?php

$email = $_SESSION['email'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$data = mysqli_fetch_array($datafetchquery);
$user_id = $data['id'];


$datafetchqueryprofile = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$dataprofile = mysqli_fetch_array($datafetchqueryprofile);



?>


<div class="container w-50 m-auto mt-5 mb-5">
    <form action="profile_editAction.php" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
                <label for="f_name" class="form-label">First Name</label>
                <input type="text" name="f_name" value="<?php echo $dataprofile['first_name'] ?>" class="form-control" id="city">
        </div>

        <div class="mb-3">
            <label for="l_name" class="form-label">Last Name</label>
            <input type="text" name="l_name" value="<?php echo $dataprofile['last_name'] ?>" class="form-control" id="city">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="<?php echo $dataprofile['email'] ?>" class="form-control" id="city">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" name="city" value="<?php echo $dataprofile['city'] ?>" class="form-control" id="city">
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="number" name="mobile" value="<?php echo $dataprofile['mobile'] ?>" class="form-control" id="mobile">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" value="<?php echo $dataprofile['age'] ?>" class="form-control" id="age" name="age">
        </div>

        <div class="mb-3">
            <label for="profession" class="form-label">Profession</label>
            <input type="text" value="<?php echo $dataprofile['profession'] ?>" class="form-control" id="profession" name="profession">
        </div>


        <div class="mb-3">
            <label for="nimg" class="form-label">Image</label>
            <input type="file" id="fileupload" id="nimg" name="nimg" value="<?php echo $dataprofile['image'] ?>" class="form-control">
        </div>

        <div>
            <input type="text" name="oldImage" value="<?php echo $dataprofile['image'] ?>" class="form-control" hidden>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>




<?php include('footer.php') ?>






