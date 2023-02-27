<?php include('navbar.php') ?>
<?php


if ($data['email'] == 'nakib12@gmail.com') {
} else
{
    header('location:login.php');
}


?>


<style>
  table,tr,td,th{
    text-align:center;
  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="mytableview" style=" width: 70%;  margin: auto; margin-top:10%;">

  <div>

    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Category Name</th>
        <th>Action</th>
      </tr>

      <?php

      $query = mysqli_query($conn, "SELECT * FROM `service_category` ORDER BY id DESC");
      while ($row = mysqli_fetch_array($query)) {
      ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['category_name']; ?></td>
          <td><a href="editservicecategory.php?id=<?php echo $row['id']; ?>"  class="btn btn-danger">Edit</a> <a href="deletecategory.php?id=<?php echo $row['id']?>" class="btn btn-info me-3">Delete</a></td>
        </tr>
      <?php } ?>

  </div>

  <?php


  ?>