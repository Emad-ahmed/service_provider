<?php include('navbar.php') ?>

<link rel="stylesheet" href="css/signin.css">

<?php

$id = $_GET['id'];

$datafetchqueryprofile = mysqli_query($conn, "SELECT * FROM `service_category` WHERE id = '$id'");
$data = mysqli_fetch_array($datafetchqueryprofile);


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
				<h1 class="text text-large text-center ">Edit Category</h1>
                <hr>
			</div>
			<form action="editcategoryAction.php" method="POST"  class="form" enctype="multipart/form-data">

                <div class="input-control">
					<label for="category" class="input-label">Category</label>
					<input type="text" value="<?php echo $data['category_name']?>" name="category" id="category" class="input-field" placeholder="Category">
				</div>


                <div> 
                    <input type="text" name="id" value="<?php echo $data['id']?>"   class="form-control" hidden>
                </div>

				<div class="input-control col-4 m-auto">
					<input type="submit" name="submit" class="input-submit" value="Update Category">
				</div>

			</form>
			
		</section>
	</div>
</main>


<?php include('footer.php') ?>