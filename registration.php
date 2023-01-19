<?php include('navbar.php') ?>

<link rel="stylesheet" href="css/signin.css">

<style>
    .main .wrapper {
 
  margin-top: 2rem !important;
 
}
</style>

<main class="main">
	<div class="container">
		<section class="wrapper">
			<div class="heading">
				<h1 class="text text-large">Sign Up</h1>
				<p class="text text-normal">Old user? <span><a href="login.php" class="text text-links">Already Have an account</a></span>
				</p>
			</div>
			<form action="registerAction.php" method="POST"  class="form">
				<div class="input-control">
					<label for="first_name" class="input-label mb-2">Choose Panel</label>
					<select class="form-select" aria-label="Default select example" name="panel">
					<option value="user">As a User</option>
					<option value="service_provider">As a Service Provider</option>
			
					</select>				</div>
                <div class="input-control">
					<label for="first_name" class="input-label">First Name</label>
					<input type="text" name="first_name" id="first_name" class="input-field" placeholder="First Name">
				</div>
                <div class="input-control">
					<label for="last_name" class="input-label">Last Name</label>
					<input type="text" name="last_name" id="last_name" class="input-field" placeholder="Last Name">
				</div>
				<div class="input-control">
					<label for="email" class="input-label">Email Address</label>
					<input type="email" name="email" id="email" class="input-field" placeholder="Email Address">
				</div>
				<div class="input-control">
					<label for="password" class="input-label">Password</label>
					<input type="password" name="password" id="password" class="input-field" placeholder="Password">
				</div>
                <div class="input-control">
					<label for="conpassword" class="input-label">Confirm Password</label>
					<input type="password" name="conpassword" id="conpassword" class="input-field" placeholder="Confirm Password">
				</div>
				<div class="input-control">
			
					<input type="submit" name="submit" class="input-submit" value="Sign Up">
				</div>
			</form>
			
		</section>
	</div>
</main>


<?php include('footer.php') ?>