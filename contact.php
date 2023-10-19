<?php
	$username = $_POST['username'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$con = new mysqli('localhost', 'sanusi', '', 'focus',3308);
	if($con->connect_error){
		die("Connection Failed : " . $con->connect_error);
	} else {
		$stmt = $con->prepare("INSERT INTO forms (username, fullname, email, password) VALUES (?, ?, ?, ?)");

		if (!$stmt) {
			die("Prepare failed: " . $con->error);
		}

		$stmt->bind_param("ssss", $username, $fullname, $email, $password);
		$execval = $stmt->execute();

		if ($execval) {
			echo "Registration successful...";
		} else {
			die("Execution failed: " . $stmt->error);
		}

		$stmt->close();
		$con->close();
	}
?>
