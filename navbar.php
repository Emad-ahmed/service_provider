<?php

include 'config.php';

session_start();


if(isset($_SESSION['email']))
{
  $email = $_SESSION['email'];
  $datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");

  $data = mysqli_fetch_array($datafetchquery);
  $first_name = $data['first_name'];
  $last_name = $data['last_name'];
} else{
  $first_name = "";
  $last_name = "";
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>EasyFix</title>
  </head>
  <body>
  <section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="index.php">EasyFix</a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="aboutus.php">About</a>
        </li>
        <li>
          <a href="#!">Services</a>
          <ul class="nav-dropdown">
          <?php
              $query = mysqli_query($conn, "SELECT * FROM `service_category`");
              while ($row = mysqli_fetch_array($query)) {
            echo "<li>
              <a href='servicemanall.php? expertise=$row[category_name]'>$row[category_name]</a>
              </li>";
              }

              ?>
          </ul>
        </li>

        <?php

          if(isset($_SESSION['email']))
          {
            $email = $_SESSION['email'];
            $datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' ORDER BY id DESC LIMIT 3");

            $data = mysqli_fetch_array($datafetchquery);
            $first_name = $data['first_name'];
            $last_name = $data['last_name'];
            $datapanel = $data['panel'];


            if($datapanel !="user")
            echo "<li>
            <a href='add_service.php'>Add Services</a>
            </li>";


          }



        ?>
      
        
        <li>
          <a href="contact.php">Contact</a>
        </li>
        
        <?php
        if(isset($_SESSION['email']))
        {
          if($data['email'] == 'nakib12@gmail.com')
          {
            echo "<li>
            <a href='showserviceadmin.php'>Show Services</a>
            </li>

            <li>
              <a href='addcategory.php'>Add Category</a>
            </li>
            
            ";
          }
        }
       
        
        ?>
        
        <?php
            if(isset($_SESSION['email'])){
            echo "<div class='dropdown mt-2' style='margin-left:9rem'>
            <button class='dropbtn'>$first_name $last_name <i class='fa fa-sort-desc' aria-hidden='true'></i></button>
            <div class='dropdown-content'>
                <a href='profile.php'>View Profile</a>
                <a href='change_password.php'>Change Password</a>   
              
                <a href='logout.php'>Logout</a>
            </div>
            </div>";
            }
            else{
              echo " <a href='login.php' class='btn btn-outline-success mt-3' style='margin-left:15rem'>Login</a>";
            }

            ?>
      </ul>
     
    </nav>
    
  </div>
</section>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
      (function($) { // Begin jQuery
    $(function() { // DOM ready
      // If a link has a dropdown, add sub menu toggle.
      $('nav ul li a:not(:only-child)').click(function(e) {
        $(this).siblings('.nav-dropdown').toggle();
        // Close one dropdown when selecting another
        $('.nav-dropdown').not($(this).siblings()).hide();
        e.stopPropagation();
      });
      // Clicking away from dropdown will remove the dropdown class
      $('html').click(function() {
        $('.nav-dropdown').hide();
      });
      // Toggle open and close nav styles on click
      $('#nav-toggle').click(function() {
        $('nav ul').slideToggle();
      });
      // Hamburger to X toggle
      $('#nav-toggle').on('click', function() {
        this.classList.toggle('active');
      });
    }); // end DOM ready
  })(jQuery); // end jQuery
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>