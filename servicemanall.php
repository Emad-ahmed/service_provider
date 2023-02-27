<?php include('navbar.php') ?>



<?php
    $topic = $_GET['expertise'];
   

?>

<style>
  .btn-block
  {
    background: #420908 !important;
  }
</style>

<link rel="stylesheet" href="css/service.css">



<div class="container serviceall mb-5">
  <?php
    echo "<h1 class='text-center'>$topic</h1>"; 
  ?>
  <main class='grid'>
    <?php
    
    include 'config.php';
    
    $alldata = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id AND service_provider.expertise = '$topic'");
    while ($row = mysqli_fetch_array($alldata)) {
      if($row['status'] == "True")
    {
      echo "<article class='text-center'>
      <a href='show_service.php? id=$row[id]'>
      <img src='$row[image]' alt='Sample photo'>
      <div class='text'>
        <h3>$row[first_name] $row[last_name]</h3>
        <p>City: $row[city]</p>
        <p>Profession: $row[expertise]</p>
        <a href='tel:0$row[mobile]' class='mb'>Mobile: 0$row[mobile]</a> <br>
        <a href='show_service.php? id=$row[id]' class='btn btn-block mt-3 text-white'>Hire Now</a>
      </div>
      </a>
    </article>";
    }
    
    }
    ?>
  </main>
</div>

<?php include('footer.php') ?>


