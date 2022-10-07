<?php
    // get the data from the form
    $first = $_POST['first'];
    $last = $_POST['last'];
    $street = $_POST['street'];
	$city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
	$in = $_POST['in'];
    $out = $_POST['out'];
	$people = $_POST['people'];
    $phone = $_POST['phone'];
    $email = $_POST['e_mail'];
	$payment = $_POST['payment'];
    $card = $_POST['card'];
	$requests = $_POST['requests'];
	
	// concatenate first and last name strings
	$full_name = $first . " " . $last;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reservations Response</title>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid">
		<h1>Thank you <?php echo $full_name; ?> for your reservation</h1>
		<p>The following is the information that you entered:</p>
		<table>
			<tr>
				<td>Number & Street</td>
				<td><?php echo $street; ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td><?php echo $city; ?></td>
			</tr>
			<tr>
				<td>State</td>
				<td><?php echo $state; ?></td>
			</tr>
			<tr>
				<td>Zip Code</td>
				<td><?php echo $zip; ?></td>
			</tr>
			<tr>
				<td>Check-in Date</td>
				<td><?php echo $in; ?></td>
			</tr>
			<tr>
				<td>Check-out Date</td>
				<td><?php echo $out; ?></td>
			</tr>
			<tr>
				<td>Number of People</td>
				<td><?php echo $people; ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $email; ?></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td><?php echo $phone; ?></td>
			</tr>
			<tr>
				<td>Credit Card</td>
				<td><?php echo $payment; ?></td>
			</tr>
			<tr>
				<td>Card Number</td>
				<td><?php echo $card; ?></td>
			</tr>
			<tr>
				<td>Special Requests</td>
				<td><?php echo $requests; ?></td>
			</tr>
		</table>
		<footer><a href="index.html">Return Home</a></footer>
	</div>
</body>
</html>