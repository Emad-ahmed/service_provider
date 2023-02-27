<?php include('navbar.php') ?>


<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/service.css">

<?php

    include 'config.php';
    $expert = $_POST['expert'];

    if (!($expert == "Plumber" || $expert == "Electrician" || $expert == "Mechanincs"))
    {
      echo "<script>alert('Search Not Found!!')</script>";
      echo "<script>location.href='index.php'</script>";
    }
    


?>




<div class="container">
 
    

  <?php
    
    include 'config.php';
    $alldata = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id AND service_provider.expertise = '$expert'");
    while ($row = mysqli_fetch_array($alldata)){
        echo "<h1 class='text-center'>Search Found</h1>
        <main class='grid'>
        <article>
          <img src='$row[image]' alt='Sample photo'>
          <div class='text'>
            <h3>$row[first_name] $row[last_name]</h3>
            <p>City: $row[city]</p>
            <p>Profession: $row[expertise]</p>
            <a href='tel:$row[mobile]' class='mb'>Mobile: $row[mobile]</a> <br>
            <a href='show_service.php? id=$row[id]' class='btn btn-primary btn-block mt-3'>Hire Now</a>
          </div>
        </article>
        </main>";
    }  
        
    
   
    
  
            
  
   



    ?>
  
</div>




<?php include('footer.php') ?>