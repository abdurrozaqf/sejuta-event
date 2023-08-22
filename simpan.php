<?php
	include("koneksi.php");
	$email=$_POST['email']
	$nama=$_POST['nama'];
	$email=$_POST['password'];
	$sql="insert into dataku(email,nama,password) values ('email','$nama','$password')";

	$hasil=mysqli_query($koneksi,$sql) or die (mysqli_error());
	header('location:signup.html');

	if ($hasil) {
		echo "Berhasil Sign Up";
		exit;
  }
	else {
		echo "Gagal";
		exit;
}
?>