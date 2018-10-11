<?php 
session_start();

$id =  $_POST['id'];
$cerita = $_POST['cerita'];
$nim = $_POST['nim'];
$foto = $_FILES['foto']['name'];
if (strlen($cerita < 30 )) {
	# code...
	$_SESSION['cerita_error'] = "karakter harus minimal 30 kata";
	header("Location: posting.php");


}
	$db = new mysqli("localhost", "root", "", "webdas");
	$sql = "INSERT INTO cerita(cerita, publish,foto) values ('$cerita', '$id', '$foto' )";

	if (mysqli_query($db, $sql)) {
		# code...
		echo "Sukses";

	}else {
		echo "Error : ". $Sql. "<br>" . mysqli_error($db);
	}
	move_uploaded_file($_FILES['foto']['tmp_name'], "Foto/".$_FILES['foto']['name']);

	mysqli_close($db);
	echo "<br>";

 ?>
 <a href="login.php">SILAHKAN LOGIN KEMBALI</a>