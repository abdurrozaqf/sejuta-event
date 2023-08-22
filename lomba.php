<?php session_start();
	if(empty($_SESSION['id'])):
		header('location:signin.php');
	endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lomba</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

		<style type="text/css">
			footer p{
				color: white; 
				text-align: center;
				padding: 10px;
				font-size: 15px;
			}
			
			footer{
				border:1px solid #343A40;
				background-color: #343A40;
			}
		</style>

</head>
<body>

<header>
	
	<div class="header">
		<div class="container">
			<div class="header-logo">
				<a href="home.php">
				<img src="logo.png" width="110">
				</a>
			</div>
			<ul class="header-menu" id="myTopnav">
				<li><a style="float: left;"><img src="gambar/account.png" style="margin-right: 7px; width: 30px; float: left;"><?php echo $_SESSION['username'] ?></a></li>
				<li><a href="unggah_lomba.php">Posting</a></li>
				<li><a href="home.php">Beranda</a></li>
				<li><a href="logout process.php">Logout</a></li>
			</ul>
		</div>
	</div>

</header>

<!-- lomba-->

<section class="lomba" id="lomba">

		<div class="container">
			<h1 style="padding-top:10px;">Selamat datang di Laman Informasi Seputar Webinar Undiksha</h1>
				
				<?php
				include "koneksi.php";

				$select=mysqli_query($con, "SELECT * FROM lomba");
				while($row=mysqli_fetch_array($select)){
				?>

			<div class="col-4">
				
				<div class="thumbnail-box">
					<div class="thumbnail-img">
						<img src="files/lomba/<?php echo $row['gambar']; ?>">
					</div>
					<div class="thumbnail-text">
						<h3><?php echo $row['judul']; ?></h3>
						<p><?php echo $row['deskripsi']; ?></p>
						<a href="<?php echo $row['link']; ?>" class="thumbnail-link"></a>
					</div>
				</div>
				
			</div>

			<?php	} ?>

		</div>

</section>

<!-- footer-->
<footer>

			<p> Copyright @ 2021 <br>Pemograman WEB</p>

</footer>

</body>
</html>