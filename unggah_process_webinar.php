<?php
session_start();

include('koneksi.php');

if (isset($_POST['unggah'])) {
	
	$judul		=$_POST['judul'];
	$des		=$_POST['deskripsi'];
	$kat		=$_POST['kategori'];
	$link		=$_POST['link'];
	$gmbr		=$_FILES['gambar']['name'];

	$query ="INSERT INTO webinar (judul, deskripsi, kategori, link, gambar) VALUES ('$judul','$des','$kat','$link','$gmbr')";
	$query_run= mysqli_query($con, $query);

	if ($query_run)
	{

		move_uploaded_file($_FILES['gambar']['tmp_name'], "files/webinar/".$_FILES['gambar']['name']);
		$_SESSION['status'] = "Event kamu sudah terunggah, silahkan cek pada halaman event!!!";
		header('location: unggah_webinar.php');
	}
	else
	{

		$_SESSION['gagal'] = "Event kamu belum terunggah, silahkan cek kembali!!!";
		header('location: unggah_webinar.php');
	}
}
?>