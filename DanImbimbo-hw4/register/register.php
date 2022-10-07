<!--Includes the defined header-->
<?php include '../view/header.php'; ?>
<!--Creates a session (for error variable)-->
<?php session_start();?>
<main>
	<div class="container-fluid">
		<h1 style="text-align:center; padding-top: .5em;">Welcome to CSIT Registration Page</h1>
		<form action = "commit.php" method = "post">
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group row">
				<label for="pass" class="col-sm-2 col-form-label">Password:</label>
				<div class="col-sm-10">
					<input type="password" class = "form-control" id="pass" name="pass" placeholder="Enter password">
				</div>
			</div>
			<div class="form-group row">
				<label for="fname" class="col-sm-2 col-form-label">First Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name">
				</div>
			</div>
			<div class="form-group row">
				<label for="lname" class="col-sm-2 col-form-label">Last Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Register Me</button>
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
<?php include '../view/footer.php'; ?>