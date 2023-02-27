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
  

<nav>
	<input id="nav-toggle" type="checkbox">
	<div class="logo"><a href="index.php">Easy<span class='fix'>Fix</span></a></div>
	<ul class="links">
		<li><a href="index.php">Home</a></li>
		<li><a href="aboutus.php">About</a></li>
		<li>
   

    <div class="dropdown">
      <a onclick="myFunction()" class="dropbtn">Services <i class="fa fa-caret-down" aria-hidden="true"></i>   </a>
      <div id="myDropdown" class="dropdown-content">
      <?php
              $query = mysqli_query($conn, "SELECT * FROM `service_category`");
              while ($row = mysqli_fetch_array($query)) {
            echo "
              <a href='servicemanall.php? expertise=$row[category_name]'>$row[category_name]</a>
              ";
              }

              ?>
      </div>
    </div>
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
        echo "
        <a href='add_service.php'>Add Services</a>
        ";


      }



      ?>

      <?php
          if(isset($_SESSION['email']))
          {
            if($data['email'] == 'nakib12@gmail.com')
            {
              echo "<a href='showserviceadmin.php'>Show Services</a>
                <a href='addcategory.php'>Add Category</a>";
            }
          }
        
        
        ?>

        <?php
              if(isset($_SESSION['email']))
              {
                if($data['email'] == 'nakib12@gmail.com')
                {
                  echo "
                    <a href='showcategory.php'>Show Category</a>";
                }
              }
            
            
            ?>
        
    
    <?php

    if(isset($_SESSION['email']))
    {
      echo "<li>
     <div class='dropdown'>
      <a onclick='myFunction()' class='dropbtn text-info'>$first_name $last_name <i class='fa fa-caret-down' aria-hidden='true'></i>   </a>
      <div id='myDropdown' class='dropdown-content'>
          <a href='profile.php'>View Profile</a>
          <a href='change_password.php'>Change Password</a>   
        
          <a href='logout.php'>Logout</a>
      </div>
    </div>
    </li>";
    } else{
        echo "<li><a href='login.php' class='DonateNow'>Login</a></li>";
    }
      


    ?>


    
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>



  



    <script src="js/nav.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>