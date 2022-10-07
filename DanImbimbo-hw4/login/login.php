<?php
require('../model/database.php');

// Resumes session and defines error message
	session_start();
	$error = "<p style=\"color:red\">Invalid login. Please try again.</p>";

// Gets the entered form data
    $user = $_POST['user'];
    $pass = $_POST['pass'];
	
// Retrieves array of administrators from database
	$query = 'SELECT * FROM administrators';
	$statement = $db->prepare($query);
	$statement->execute();
	$administrators = $statement->fetchAll();
    $statement->closeCursor();
	
// Compares user from form with emails from database, if found
// then compares the pass from form with the password from database
	$found = false;
	foreach($administrators as $admin){
		if($admin['email'] == $user){
			if($admin['password'] == $pass){
				$found = true;
				$first = $admin['firstName'];
				$last = $admin['lastName'];
				break;
			}				
		}
	}
	
// Checks if the user/password combination was found
	if($found == true){
		include('display.php');
	}
	else{
		// Sets error variable in session array
		$_SESSION["error"] = $error;
		// Returns to index (login screen)
		header('Location:../index.php');
	}
?>