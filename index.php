<?php include('navbar.php') ?>

    
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/service.css">

<style>
  .container h1{
    color: #420908 !important;
  }
  .btn-block{
    color: white !important;
  }
</style>


<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="serviceimg/1.jpg" class="d-block w-100" alt="...">
        
      </div>
      <div class="carousel-item">
        <img src="serviceimg/2.jpg" class="d-block w-100" alt="...">
        
      </div>
      <div class="carousel-item">
        <img src="serviceimg/3.jpg" class="d-block w-100" alt="...">
        
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="mb-3 searchbtn">
  <form method="POST" action="search_result.php">
    <div class="d-flex">
    <input type="text" class="form-control me-2" name="expert"  id="search" placeholder = "Search">
    <button type="submit" class='btn btn-info text-white'>Search</button>
    </div>
  </form>
</div>



<div class="container">
  <h1 class="text-center mt-5 mb-4">Plumber</h1>
  <main class='grid'>
  <?php


    include 'config.php';
    $alldata = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id AND service_provider.expertise = 'Plumber'");
    while ($row = mysqli_fetch_array($alldata)) {
    if($row['status'] == "True")
    {
      echo "
     
      <article class='text-center'>
      <a href='show_service.php? id=$row[id]'>
      <img src='$row[image]' alt='Sample photo'>
      <div class='text'>
        <h3>$row[first_name] $row[last_name]</h3>
        <p>City: $row[city]</p>
        <p>Profession: $row[expertise]</p>
        <a href='tel:$row[mobile]' class='mb'>Mobile: $row[mobile]</a> <br>
        <a href='show_service.php? id=$row[id]' class='btn  btn-block text-white mt-3'>Hire Now</a>
      </div>
      </a>
    </article>
   
    ";
    }
    
    }
    ?>
    </main>
  
</div>


<div class="container">
  <h1 class="text-center mt-5 mb-4">Electrician</h1>
  <main class='grid'>
  <?php




    include 'config.php';
    $alldata = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id AND service_provider.expertise = 'Electrician'");
    while ($row = mysqli_fetch_array($alldata)) {
    if($row['status'] == "True")
    {
      echo "
    <article class='text-center'>
    <a href='show_service.php? id=$row[id]'>
      <img src='$row[image]' alt='Sample photo'>
      <div class='text'>
        <h3>$row[first_name] $row[last_name]</h3>
        <p>City: $row[city]</p>
        <p>Profession: $row[expertise]</p>
        <a href='tel:$row[mobile]' class='mb'>Mobile: $row[mobile]</a> <br>
        <a href='show_service.php? id=$row[id]' class='btn text-white  btn-block mt-3'>Hire Now</a>
      </div>
      </a>
    </article>
    ";
    }

    }
    ?>
  </main>
</div>



<div class="container">
  <h1 class="text-center mt-5 mb-4">Mechanics</h1>
  <main class='grid'>
  <?php




    include 'config.php';
    $alldata = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id AND service_provider.expertise = 'Mechanincs'");
    while ($row = mysqli_fetch_array($alldata)) {
    if($row['status'] == "True")
    {
      echo "
    <article class='text-center'>
    <a href='show_service.php? id=$row[id]'>
      <img src='$row[image]' alt='Sample photo'>
      <div class='text'>
        <h3>$row[first_name] $row[last_name]</h3>
        <p>City: $row[city]</p>
        <p>Profession: $row[expertise]</p>
        <a href='tel:$row[mobile]' class='mb'>Mobile: $row[mobile]</a> <br>
        <a href='show_service.php? id=$row[id]' class='btn text-white btn-block mt-3'>Hire Now</a>
      </div>
      </a>
    </article>
    ";
    }

    }
    ?>
  </main>
</div>


<div class="container">
  <h1 class="text-center mt-5 mb-4">Carpenter</h1>
  <main class='grid'>
  <?php




    include 'config.php';
    $alldata = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id AND service_provider.expertise = 'Carpenter'");
    while ($row = mysqli_fetch_array($alldata)) {
    if($row['status'] == "True")
    {
      echo "
    <article class='text-center'>
    <a href='show_service.php? id=$row[id]'>
      <img src='$row[image]' alt='Sample photo'>
      <div class='text'>
        <h3>$row[first_name] $row[last_name]</h3>
        <p>City: $row[city]</p>
        <p>Profession: $row[expertise]</p>
        <a href='tel:$row[mobile]' class='mb'>Mobile: $row[mobile]</a> <br>
        <a href='show_service.php? id=$row[id]' class='btn text-white btn-block mt-3'>Hire Now</a>
      </div>
      </a>
    </article>
    ";
    }

    }
    ?>
  </main>
</div>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.837695589558!2d91.80273321447774!3d24.8693923510255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751015addbec3b7%3A0x9e87b7be58b5f67e!2z4Kay4Ka_4Kah4Ka_4KaCIOCmh-CmieCmqOCmv-CmreCmvuCmsOCnjeCmuOCmv-Cmn-Cmvw!5e0!3m2!1sbn!2sbd!4v1677312021141!5m2!1sbn!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php include('footer.php') ?>