<?php 


require_once("db.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim	= $_POST['nim'];
$password = $_POST['password'];
$kelas = $_POST['kelas'];
$jk = $_POST['jk'];
$hobi = $_POST['hobi'];
$fakultas = $_POST['fakultas'];
$alamat = $_POST['alamat'];
$sql = "INSERT INTO pendaftaran (id, nama, nim,password, kelas, jk, hobi,fakultas,alamat)
		VALUES('$id', '$nama', '$nim', '$password','$kelas', '$jk', '$hobi', '$fakultas', '$alamat')";

// PERINTAH INSERT INTO BUAT MEMASUKKAN DATA BARU KEDALAM DATABASE

	if(mysqli_query($connect, $sql)){
	header("Location:login.php");
		// SETELAH DATA BERHASIL DIMASUKKAN KE DATABASE BISA LOGIN DENGAN NIM YANG TADI DIINPUTKAN
	} else{
		echo "Error: ".$sql. "<br>".mysqli_error($connect);
	}

mysqli_close($connect);


 ?>