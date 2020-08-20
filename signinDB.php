<?php


include 'connect.php';

if (isset($_POST['go'])) {

	$email = htmlentities(mysqli_escape_string ($con, $_POST['email']));
	$passwd = htmlentities(mysqli_escape_string ($con, $_POST['password']));

	$insert = "insert into user values('$email', '$passwd')";

	$run = mysqli_query ($con, $insert);

	if ($run) {
		header("Location: regestrationBD.php");
	}

}



