<?php
require_once("db.php");

// file ini untuk form pengeditan data yang ingin di edit
 $id         = $_GET['id'];
$pendaftaran  	= mysqli_query($connect, "select * from pendaftaran where id='$id'");
$row       		 = mysqli_fetch_array($pendaftaran);

function active_radio_button($value,$input){
 $result =  $value==$input?'checked':'';
    return $result;



if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		# code...
	
	
		$jk = $row['jk'];
		$hobi = $row['hobi'];
		$fakultas = $row['fakultas'];
	
	}
}


function active_radio_button($value,$input){
$result =  $value==$input?'checked':'';
   return $result;
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	
<input type="hidden" value="<?php echo $row['id'];?>" name="id">
	<table bgcolor="lightblue" align="center" >
		<form  action="update.php" colspan="3" method="POST" >
			<tr >
				<td align="center" colspan="3">FORM EDIT</td><br>
			</tr>
			<tr>
				<td>id</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $id; ?>" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" value="<?php echo $row['password'];  ?> "name="password" ></td>
			</tr>
			<tr>
				<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>

					<input type="radio" name="kelas" value="MI-4101"> MI-4101
					<input type="radio" name="kelas" value="MI-4102"> MI-4102
					<input type="radio" name="kelas" value="MI-4103"> MI-4103
					<input type="radio" name="kelas" value="MI-4104"> MI-4104
	


				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td>:</td>
				<td>
					
					<input type="radio" name="jk" value="Pria">Pria
					<input type="radio" name="jk" value="Wanita">Wanita
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					
					<input type="checkbox" name="hobi" value="Bernyanyi">Bernyanyi<br>
					<input type="checkbox" name="hobi" value="Menulis">Menulis<br>
					<input type="checkbox" name="hobi" value="Membaca">Membaca<br>
					<input type="checkbox" name="hobi" value="Berenang">Berenang<br>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
					</select></td>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea rows ="5" cols="40" value="<?php echo $row['$alamat']; ?>" name="alamat"></textarea>
				</td>
			</tr>
			<tr>


			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="simpan" value="Simpan Perubahan">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>