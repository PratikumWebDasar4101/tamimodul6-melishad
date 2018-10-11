

<!DOCTYPE html>
<html>
<head>
	<title>6701174009</title>
</head>
<body >

	<h1>APLIKASI PENDAFTARAN SEDERHANA</h1>
		<form action="connect.php" method="post">
			<table>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama" pattern="[A-Za-z ]{1,25}" title=" Nama harus maks 35 karakter" required></td>	
			</tr>
			<tr>
				<td>Nim : </td>
				<td><input type="text" name="nim"  pattern="[0-9]{10}" title="Nim harus angka dan 10 karakter"  required ></td>	
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="password" ></td>
			</tr>
			<tr>
				<td>Kelas : </td>
			
					
					<td>
					
						<input type="radio" name="kelas" value="MI-4101"> MI-4101
				
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="radio" name="kelas" value="MI-4102"> MI-4102
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="radio" name="kelas" value="MI-4103"> MI-4103
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="radio" name="kelas" value="MI-4104"> MI-4104

					</td>
				</tr>	
			<tr>
				<td>Jenis Kelamin : </td>
				<td><input type="radio" name="jk" value="Pria">Pria</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="radio" name="jk" value="Wanita">Wanita</td>
			</tr>
			<tr>
				<td>Hobi : </td> 
				<td><input type="checkbox" name="hobi" value="Bernyanyi">Bernyanyi<br>
				<input type="checkbox" name="hobi" value="Menulis">Menulis<br>
				<input type="checkbox" name="hobi" value="Membaca">Membaca<br>
				<input type="checkbox" name="hobi" value="Berenang">Berenang<br></td>
			</tr>
			<tr>
				<td>Fakultas : </td>
				<td><select name="fakultas">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
					</select></td>
			</tr>
			<tr>
				<TD >Alamat : </TD>
				<td > <textarea name = "alamat"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><br><input type="submit" name="submit" value="simpan"></td>					
			</tr>		
		</table>	
		</form>

</body>
</html>