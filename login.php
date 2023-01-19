<?php include('navbar.php') ?>

<link rel="stylesheet" href="css/signin.css">

<main class="main">
	<div class="container">
		<section class="wrapper">
			<div class="heading">
				<h1 class="text text-large">Sign In</h1>
				<p class="text text-normal">New user? <span><a href="registration.php" class="text text-links">Create an account</a></span>
				</p>
			</div>
			<form action="loginAction.php" method="POST"  class="form">
				<div class="input-control">
					<label for="email" class="input-label" hidden>Email Address</label>
					<input type="email" name="email" id="email" class="input-field" placeholder="Email Address">
				</div>
				<div class="input-control">
					<label for="password" class="input-label" hidden>Password</label>
					<input type="password" name="password" id="password" class="input-field" placeholder="Password">
				</div>
				<div class="input-control">
					<a href="#" class="text text-links">Forgot Password</a>
					<input type="submit" name="submit" class="input-submit" value="Sign In">
				</div>
			</form>

		</section>
	</div>
</main>


<?php include('footer.php') ?>