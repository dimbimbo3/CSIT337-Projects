<?php
    // get the data from the form
    $user = $_POST['user'];
    $pass = $_POST['pass'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Response</title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<p>
		Thank you <?php echo $user; ?> your password is <?php echo $pass; ?>
	</p>
</body>
</html>