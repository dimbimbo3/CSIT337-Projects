<?php
require('../model/database.php');

// Resumes session and defines error message
	session_start();
	$invalid = "<p style=\"color:red\">Invalid data. Check all fields and try again.</p>";
	$in_use = "<p style=\"color:red\">Email already in database, please choose another email.</p>";

// Checks if all the necessary data was entered into the form
	if(!empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["fname"]) && !empty($_POST["lname"])){
		// Gets the entered form data
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			
		// Retrieves array of administrators from database
			$query = 'SELECT * FROM administrators';
			$statement = $db->prepare($query);
			$statement->execute();
			$administrators = $statement->fetchAll();
			$statement->closeCursor();
			
		// Compares email from form with emails from database, if found
		// then flags boolean variable
			$found = false;
			foreach($administrators as $admin){
				if($admin['email'] == $email){
						$found = true;
						break;				
				}
			}
			
		// Checks if email was already in use found
			if($found == true){
				// Sets error variable in session array
				$_SESSION["error"] = $in_use;
				// Returns to register screen
				header('Location:register.php');
			}
			else{
				// Retrieves array of administrators from database
				$query = 'INSERT INTO administrators (email, password, firstName, lastName) 
				VALUES(:email, :password, :firstName, :lastName)';
				$statement = $db->prepare($query);
				$statement->bindValue(':email', $email);
				$statement->bindValue(':password', $pass);
				$statement->bindValue(':firstName', $fname);
				$statement->bindValue(':lastName', $lname);
				$statement->execute();
				$statement->closeCursor();
				
				// Returns to index (login screen)
				header('Location:../index.php');
			}
	}
	// Displays error message if necessary data wasn't entered
	else{
		// Sets error variable in session array
		$_SESSION["error"] = $invalid;
		// Returns to register screen
		header('Location:register.php');
	}
?>