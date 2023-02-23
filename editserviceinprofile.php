<?php include('navbar.php') ?>

<link rel="stylesheet" href="css/signin.css">

<?php

$id = $_GET['id'];

$datafetchqueryprofile = mysqli_query($conn, "SELECT * FROM `service_category` WHERE id = '$id'");
$dataprofile = mysqli_fetch_array($datafetchqueryprofile);


?>

<style>
    .main .wrapper{
        margin-top: 2rem !important;
    }
    .container{
    max-width: 90rem !important;
    }
</style>

<main class="main">
	<div class="container">
		<section class="wrapper">
			<div class="heading">
				<h1 class="text text-large text-center ">Edit Services</h1>
                <hr>
			</div>
			<form action="add_serviceAction.php" method="POST"  class="form" enctype="multipart/form-data">

                <div class="input-control">
					<label for="amount_of_work" class="input-label">Amount (per hour)</label>
					<input type="text" value="<?php echo $dataprofile['amount_of_tk	']?>" name="amount_of_work" id="amount_of_work" class="input-field" placeholder="$">
				</div>

				<div class="input-control">
					<label for="work_hour" class="input-label">Work Hour</label>
					<input type="text" value="<?php echo $dataprofile['work_hour']?>" name="work_hour" id="work_hour" class="input-field" placeholder="9-5">
				</div>

				<div class="input-control">
					<label for="mobile" class="input-label">Mobile</label>
					<input type="number" value="<?php echo $dataprofile['mobile']?>" name="mobile" id="mobile" class="input-field" placeholder="Mobile">
				</div>


                <div class="input-control">
					<label for="expertise" class="input-label">Expertise</label>
					<select  aria-label="Default select example" class="input-field" name="expertise">
                        <?php
                            include 'config.php';
                            $alldata = mysqli_query($conn, "SELECT * FROM service_category ORDER BY id DESC");

                            while ($row = mysqli_fetch_array($alldata)) {
                            echo "<option value='$row[category_name]'>$row[category_name]</option>";

                            }

                        ?>
                    </select>
				</div>
				<div class="input-control">
					<label for="add_image" class="input-label">Image</label>
					<input type="file"  name="add_image" id="add_image" class="input-field">
				</div>

				
				<div class="input-control">
					<label for="nid" class="input-label">Nid</label>
					<input type="file"  name="nid" id="nid" class="input-field" placeholder="9-5">
				</div>


                <div>
                    <input type="text" name="oldImage" value="<?php echo $data['image'] ?>" class="form-control" hidden>
                    <input type="text" name="oldNid" value="<?php echo $data['nid'] ?>" class="form-control" hidden>

                    <input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control" hidden>

                </div>

				<div class="input-control col-4 m-auto">
					<input type="submit" name="submit" class="input-submit" value="Add Service">
				</div>

			</form>
			
		</section>
	</div>
</main>


<?php include('footer.php') ?>