<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<title>Appointment Maker</title>
</head>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<body>

<h1>Book it!</h1>

<form action="apptConfirm.php">

	<div class="firstName">
		<label for="firstName">First Name</label>
		<input id="firstName" name="firstName" class="input-size" type="text"> 
	</div>
	<div class="lastName">
		<label for="lastName">Last Name</label>
		<input id="lastName" name="lastName" class="input-size" type="text">
	</div>
	<div class="apptDate">
		<label for="apptDate">Requested date of Appointment</label>
		<input id="apptDate" name="apptDate" class="input-size" type="text">
	</div>
	<div class="startAppt">
		<label for="startAppt">Start Time</label>
		<input id="startAppt" name="startAppt" class="input-size" type="text">
	</div>			
	<div class="endAppt">
		<label for="endAppt">End Time</label>
		<input id="endAppt" name="endAppt" class="input-size" type="text">

	<button type="submit" class="btn btn-success">Request my appointment!</button>
</form>
</body>	
</div>

</html