<?php include('navbar.php') ?>
<link rel="stylesheet" href="css/signin.css">


<style>
    .main .wrapper{
        margin-top: -3rem !important;
    }
    .container{
    max-width: 90rem !important;
    }
</style>

<main class="main">
	<div class="container">
		<section class="wrapper">
			    <div class="heading">
				    <h1 class="text text-large text-center ">Add Category</h1>
                    <hr>
			    </div>
			    <form action="categoryaction.php" method="POST">
                <div class="input-control">
					<label for="category" class="input-label mb-3">Category</label>
					<input type="text" name="category" id="category" class="form-control" placeholder="Category">
				</div>

				<div class="input-control col-4 m-auto">
					<input type="submit" name="submit" class="btn btn-primary mt-4" value="Add Category">
				</div>

			    </form>
			
		</section>
	</div>
</main>


<?php include('footer.php') ?>