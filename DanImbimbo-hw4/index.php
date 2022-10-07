<!--Includes the defined header-->
<?php include 'view/header.php'; ?>
<!--Creates a session (for error variable)-->
<?php session_start();?>
<main>
	<div class="container-fluid">
		<h1 style="text-align:center; padding-top: .5em;">Welcome to CSIT Login Page</h1>
		<form action = "login/login.php" method = "post">
			<div class="form-group row">
				<label for="user" class="col-sm-2 col-form-label">User Name:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="user" name="user" placeholder="Enter User Name" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="pass" class="col-sm-2 col-form-label">Password:</label>
				<div class="col-sm-10">
					<input type="password" class = "form-control" id="pass" name="pass" placeholder="Enter password" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<p>Not a member? Press Register to become one</p>
					<a href="register/register.php" class="btn btn-success">Register</a>
				</div>
			</div>
			<!--Checks if error variable has been set in session array,
				and if so displays the defined message-->
			<?php
				if(isset($_SESSION["error"])){
					echo $_SESSION["error"];
				}
			?>
		</form>
		<!--Unsets error variable in session arrray-->
		<?php
			unset($_SESSION["error"]);
		?>
	</div>
</main>
<!--Includes the defined footer-->
<?php include 'view/footer.php'; ?>