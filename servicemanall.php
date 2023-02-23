<?php include('navbar.php') ?>



<?php
    $topic = $_GET['expertise'];
   

?>


<link rel="stylesheet" href="css/service.css">



<div class="container mt-4 mb-5">
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
      echo "<article>
      <img src='$row[image]' alt='Sample photo'>
      <div class='text'>
        <h3>$row[first_name] $row[last_name]</h3>
        <p>City: $row[city]</p>
        <p>Profession: $row[expertise]</p>
        <a href='tel:0$row[mobile]' class='mb'>Mobile: 0$row[mobile]</a> <br>
        <a href='show_service.php? id=$row[id]' class='btn btn-primary btn-block mt-3'>Hire Now</a>
      </div>
    </article>";
    }
    
    }
    ?>
  </main>
</div>

<?php include('footer.php') ?>


