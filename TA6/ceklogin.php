<?php 
	$db =  mysqli_connect("localhost", "root", "", "webdas");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = mysqli_query($db, "SELECT * from pendaftaran WHERE nama='$username' && password='$password'");
	$num = mysqli_num_rows($sql);

	if ($num ==1) {
		session_Start();
		$_SESSION['username'] = $username;
		header("Location:halamanawal.php");

	} else {
		//echo mysqli_error($db);
		header("Location:form.php");
	}

 ?>