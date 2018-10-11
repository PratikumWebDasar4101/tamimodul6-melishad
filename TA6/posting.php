<?php 

session_start();
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	# code...
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>6701174009</title>
</head>
<body bgcolor="lightblue">
	<form action="daftarpostingan.php" method="POST" enctype="multipart/form-data">
		<table>
			<H2> * Apa postingan anda ?</H2>
		
				<textarea name="posting" id="posting" cols="80" rows="20" pattern="[A-Za-z ]{1,30}" title=" jumlah kata harus minimal 30 karakter" required></textarea>
				<br><br>
				<?php if (isset($_SESSION['cerita_error'])) echo "*". $_SESSION['cerita_error']."<br>"; {
					# code...
				} ?>
				<br><br>
			<h2> * Upload gambar terbaru anda </h2>
				<input type="file" name="foto">
				<br>
				<br>
				<input type="submit" value="kirim" >
		</table>
	</form>

</body>
</html>

<?php 
	unset($_SESSION['cerita_error']);
	unset($_SESSION['post_error']);

 ?>
 <H2>Menu yang tersedia: </H2> <br>
 <a href="form.php">BIKIN AKUN BARU</a><br>
 <a href="login.php">LOGIN </a><br>
 <a href="halamanawal.php">BERANDA</a><br>
 <a href="editprofil.php"> EDIT PROFIL</a><br>
<a href="posting.php">POSTING</a><br>