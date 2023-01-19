<?php include('navbar.php') ?>



<?php
    $topic = $_GET['expertise'];
   

?>


<link rel="stylesheet" href="css/service.css">

<div class="main">
  
  <ul class="cards">
    
    <?php


    include 'config.php';

    $alldata = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id AND service_provider.expertise = '$topic'");
    $rowcount = mysqli_num_rows($alldata);
    
    
    while ($row = mysqli_fetch_array($alldata)) {
          
            echo "

            <li class='cards_item'>
            <div class='card'>
              <div class='card_content'>
                <h1 class='card_title mb-3 fw-bolder'>$row[first_name] $row[last_name]</h1>
                <h4 class='card_title mb-2'>Expertise: $row[expertise]</h4>
           
                
                <button class='btn card_btn'>Read More</button>
              </div>
            </div>
            </li>
            ";
          }
         
        
       
    
  
   
    ?>
  
    
  </ul>
</div>

<h3 class="made_by">Made with ♡</h3>

<?php include('footer.php') ?>