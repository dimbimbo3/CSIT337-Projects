<?php
    // get the data from the form
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $duration = $_POST['duration'];
	
	// calculate cost
	$cost = $duration * 10;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Response</title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<p>
		Thank you <?php echo $user; ?> your password is <?php echo $pass; ?><br>
		Your membership length is <?php echo $duration; ?> months.<br>
		Total charge is $<?php echo $cost; ?>.
	</p>
</body>
</html>