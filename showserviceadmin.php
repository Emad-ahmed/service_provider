<?php include('navbar.php') ?>
<?php


if ($data['email'] == 'nakib12@gmail.com') {
} else
{
    header('location:login.php');
}


?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="mytableview" style=" width: 70%;  margin: auto; margin-top:5%;">

  <div>

    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>User Id</th>
        <th>Amount</th>
        <th>Work Hour</th>
        <th>Expertise</th>
        <th>Mobile</th>
        <th>Status</th>
      </tr>

      <?php

   


      $query = mysqli_query($conn, "SELECT * FROM `service_provider` ORDER BY id DESC");
      while ($row = mysqli_fetch_array($query)) {
      ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['user_id']; ?></td>
          <td><?php echo $row['amount_of_tk']; ?></td>
          <td><?php echo $row['work_hour']; ?></td>
          <td><?php echo $row['expertise']; ?></td>
          <td><?php echo $row['mobile']; ?></td>
          <?php if ($row['status'] != "True")
          {
            echo "<td> <a href='updateservice.php? id=$row[id]'><i class='fa fa-check' aria-hidden='true'></i></a>  <a href='deleteservice.php? id=$row[id]'><i class='fa fa-times' aria-hidden='true'></i></a></a>'</td>";
          }
            ?>
             <?php if ($row['status'] == "True")
                {
                    echo "<td> <a href='deleteservice.php? id=$row[id]'><i class='fa fa-times' aria-hidden='true'></i></a></a>'</td>";
                }
            ?>
        </tr>

      <?php } ?>

  </div>

  <?php


  ?>