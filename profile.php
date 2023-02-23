<?php include('navbar.php') ?>

<?php


$email = $_SESSION['email'];


if (!isset($email)) {
    echo "<script>location.href = 'login.php'</script>";
}





$datafetchqueryprofile = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$dataprofile = mysqli_fetch_array($datafetchqueryprofile);
$id = $dataprofile['id'];


if ($dataprofile != '')
{
    $image = $dataprofile['image'];
    $dataid = $dataprofile['id'];
    $city = $dataprofile['city'];
    $age = $dataprofile['age'];
    $mobile = $dataprofile['mobile'];
    $profession = $dataprofile['profession'];
}




?>
<link rel="stylesheet" href="css/service.css">
<link rel="stylesheet" href="css/index.css">
<style>
    .myimg
    {
        width:7rem;
        height:7rem;
        border-radius:100%;
        object-fit:cover;
    }
</style>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Add</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="profileAction.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="number" class="form-control" id="mobile" name="mobile">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>

        <div class="mb-3">
            <label for="profession" class="form-label">Profession</label>
            <input type="text" class="form-control" id="profession" name="profession">
        </div>


        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        
        <button type="submit" class="btn btn-primary">Add Profile</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="d-flex">
            <?php
                if($dataprofile != '')
                {
                    echo "<img src='$image' alt='' class='myimg'>";

                } else{
                    echo "";
                }
            ?>
                
                <h4 class="ms-3 mt-3"><?php echo $data['first_name'] ?> <?php echo $data['last_name'] ?></h4>
            </div>
        </div>
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-6">
        <?php
        if($dataprofile == '')
        {
            echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
            Complete Profile
            </button>";

        } else{
            echo "<div class='card' style='width: 18rem;'>
            <div class='card-body'>
              <h3 class='card-title'>Profile</h3>
              <hr>
              <h6 class='card-subtitle mb-3'><span class='fw-bolder'>City:</span>$city</h6>
              <h6 class='card-subtitle mb-3'><span class='fw-bolder'>Age:</span> $age</h6>
              <h6 class='card-subtitle mb-3'><span class='fw-bolder'>Mobile:</span> $mobile</h6>
              <h6 class='card-subtitle mb-3'><span class='fw-bolder'>Profession:</span> $profession</h6>
              <hr>
              <div class='m-auto col-12 d-flex'>
              <a href='profileedit.php? id=$id' class='btn btn-info me-4'>Edit</a>
              <a href='deleteprofile.php? id=$id' class='btn btn-danger'>Deactivate Account</a>
              </div>
            </div>
          </div>";
        }
        
        ?>


        </div>
    </div>
</div>


<hr>

<div class="container">
    <h3 class='text-center'>My Resource</h3>
    <main class='grid'>
    <?php
    
    include 'config.php';
    
    $alldata = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id  AND user.id = '$id'");
    while ($row = mysqli_fetch_array($alldata)) {
    if($row['status'] == "True")
    {
      echo "<article class='text-center'>
      <img src='$row[image]' alt='Sample photo'>
      <div class='text'>
        <h3>$row[first_name] $row[last_name]</h3>
        <p>City: $row[city]</p>
        <p>Profession: $row[expertise]</p>
        <a href='tel:0$row[mobile]' class='mb'>Mobile: 0$row[mobile]</a> <br>
        <div>
        <a href='editserviceinprofile.php? id=$row[id]' class='btn btn-primary btn-block mt-3'>Edit</a>
        <a href='deleteservice.php? id=$row[id]' class='btn btn-danger btn-block mt-3'>Delete</a>
        </div>
      </div>
    </article>";
    }
    
    }
    ?>
    </main>
</div>


<?php include('footer.php') ?>