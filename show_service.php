<?php include('navbar.php') ?>



<?php
    $id = $_GET['id'];
    $datafetchquery = mysqli_query($conn, "SELECT * FROM user, service_provider where user.id = service_provider.user_id AND service_provider.id = '$id'");
    $data = mysqli_fetch_array($datafetchquery);
?>


<link rel="stylesheet" href="css/serviceshow.css">



<div class="container mt-4 mb-5 text-center">
    <div class="row">
        <div class="col-lg-6 personal_info">
            <h2 class="border-bottom pb-3">Personal Info</h2>
            <?php
            echo "<div>
                <img src='$data[image]' alt=''>
                <h2>$data[first_name] $data[last_name]</h2>
                <h6>Profession: <span>$data[expertise]</span></h6>
                <h6>Work Amount(per hour): <span>$data[amount_of_tk] Tk</span></h6>
                <h6>Working Hour: <span>$data[work_hour]</span></h6>
                <h6>Age: <span>$data[age]</span></h6>
                <a href='tel:$data[mobile]' class='btn btn-warning mt-4'>Call Me</a>
            </div>"
            ?>
        </div>
        <div class="col-lg-6 mailview">
            <h2 class="border-bottom  pb-3">Mail Me</h2>
            <form class="mt-5">
            <div class="mb-3">
             
                <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="mb-3">  
                <textarea name="message" id="message" cols="4" rows="4" placeholder= "Message Me" class="form-control"></textarea>
            </div>
           
            <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php') ?>