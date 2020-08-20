

<?php


include 'connect.php';

if (isset($_POST['submit'])) {


	$name = htmlentities(mysqli_escape_string ($con, $_POST['stu_name']));
	$roll = htmlentities(mysqli_escape_string ($con, $_POST['stu_roll']));
	$series = htmlentities(mysqli_escape_string ($con, $_POST['series']));
	$department = htmlentities(mysqli_escape_string ($con, $_POST['dept']));
	$password = htmlentities(mysqli_escape_string ($con, $_POST['passwd']));
	$confirm_password = htmlentities(mysqli_escape_string ($con, $_POST['c_passwd']));
	$gender = htmlentities(mysqli_escape_string ($con, $_POST['gender']));
	$personal_info = htmlentities(mysqli_escape_string ($con, $_POST['p_info']));
	$address = htmlentities(mysqli_escape_string ($con, $_POST['address']));	
	$email = htmlentities(mysqli_escape_string ($con, $_POST['email']));
	$phone = htmlentities(mysqli_escape_string ($con, $_POST['phone']));
	$blood = htmlentities(mysqli_escape_string ($con, $_POST['blood_grp']));

	$insert = "insert into user values( `stu_name`, `stu_roll`, `series`, `dept`, `passwd`, `c_passwd`, `gender`, `p_info`, `address`, `email`, `phone`, `blood_grp`)";

	$run = mysqli_query ($con, $insert);

	if ($run) {
		header("Location: regestrationBD.php");
	}

}

?>