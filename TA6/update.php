
<?php
require_once("db.php");
// menyimpan data yang telah diedit di form edit

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim	= $_POST['nim'];
$password = $_POST['password'];
$kelas = $_POST['kelas'];
$jk = $_POST['jk'];
$hobi = $_POST['hobi'];
$fakultas = $_POST['fakultas'];
$alamat = $_POST['alamat'];
// query sql untuk update data didatabase
$sql = "UPDATE pendaftaran SET nama= '$nama', nim = '$nim', password = '$password', kelas = '$kelas', jk = '$jk', hobi = '$hobi', fakultas = '$fakultas', alamat = '$alamat' where id='$id'";
		

//$sql="UPDATE siswa SET nim='$nim',nama='$nama',tgl_lahir='$tgl_lahir' where id='$id'";
mysqli_query($connect, $sql);
header("location:halamanawal.php");
?>




