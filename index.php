<?php include('navbar.php') ?>

    
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/service.css">


<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="serviceimg/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="serviceimg/2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="serviceimg/3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
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
    <button type="submit" class='btn btn-info text-white'>Submit</button>
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
      <img src='$row[image]' alt='Sample photo'>
      <div class='text'>
        <h3>$row[first_name] $row[last_name]</h3>
        <p>City: $row[city]</p>
        <p>Profession: $row[expertise]</p>
        <a href='tel:$row[mobile]' class='mb'>Mobile: $row[mobile]</a> <br>
        <a href='show_service.php? id=$row[id]' class='btn  btn-block mt-3'>Hire Now</a>
      </div>
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
      <img src='$row[image]' alt='Sample photo'>
      <div class='text'>
        <h3>$row[first_name] $row[last_name]</h3>
        <p>City: $row[city]</p>
        <p>Profession: $row[expertise]</p>
        <a href='tel:$row[mobile]' class='mb'>Mobile: $row[mobile]</a> <br>
        <a href='show_service.php? id=$row[id]' class='btn btn-primary btn-block mt-3'>Hire Now</a>
      </div>
    </article>
    ";
    }

    }
    ?>
  </main>
</div>




<?php include('footer.php') ?>