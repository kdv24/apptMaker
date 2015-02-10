<?php 
$firstName = $_GET["firstName"];
$lastName = $_GET["lastName"];
$apptDate = $_GET["apptDate"];
$startAppt = $_GET["startAppt"];
$endAppt = $_GET["endAppt"];
$fullName = $firstName . " " . $lastName
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<title>Receipt</title>
</head>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<body>
	<h1>Thank you <?php echo $firstName; ?>!</h1><br>
	<p>Please accept this notice as confirmation of your request for an appointment on <span class="colored-underline"><?php echo $apptDate; ?> from <?php echo $startAppt; ?> till <?php echo $endAppt; ?>.</span>  We are already checking our schedule to best accommodate your request. We will either confirm your appointment within 24 hours, or provide you with alternative appointment options.  Thanks for scheduling with us!</p>
	<br>
	<div class="receipt">
		<p><?php echo $fullName; ?></p>
		<p>Appointment date: <?php echo $apptDate; ?></p>
		<p><?php echo $startAppt; ?> - <?php echo $endAppt; ?></p>
		
	</div>
</body>
</html>