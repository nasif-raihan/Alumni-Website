<?php

	$name = $_POST['stu_name'];
	$roll = $_POST['stu_roll'];
	$series = $_POST['series'];
	$department = $_POST['dept'];
	$password = $_POST['passwd'];
	$confirm_password = $_POST['c_passwd'];
	$gender = $_POST['gender'];
	$personal_info = $_POST['p_info'];
	$address = $_POST['address'];	
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$blood = $_POST['blood_grp'];


	if (!empty($name) || !empty($roll) || !empty($series) || !empty($deptartment) || !empty($password) || !empty($confirm_password) || !empty($gender) || !empty($personal_info) || !empty($address) || !empty($email) || !empty($phone) || !empty($blood))
	{
		
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "alumnai";

		//create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


		if (mysqli_connect_error()) 
		{
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		} 
		else 
		{


		$SELECT = "SELECT email From user Where email = ? Limit 1";
		$INSERT = "INSERT Into user (stu_name, stu_roll, series, dept, passwd, c_passwd, gender, p_info, address, email, phone, blood_grp) values(?,?,?,?,?,?,?,?,?,?,?,?,)";


		//Prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0) 
		{
		$stmt->close();
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("siisssssssis",$name, $roll, $series, $department, $password, $confirm_password, $gender, $personal_info, $address, $email, $phone, $blood);

		$stmt->execute();
		echo "New record inserted sucessfully";
		} 

		else 
		{
		echo "Someone already register using this email";
		}


		$stmt->close();
		$conn->close();
		}
	}



	else
	{
		echo "All field are required";
		die();
	}
?>