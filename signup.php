<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
	<title>Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
</head>

<body>
	<header>
  	<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.html">
		  	<img src="logo.png" width="110" height="auto" alt="sejutaevent">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav ml-auto">
		      <a class="nav-item nav-link " href="index.html">Beranda <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="tentangkami.html">Tentang Kami</a>
		      <a class="nav-item nav-link active" href="signin.php">Sign In</a>
		    </div>
		  </div>
		</nav>
		<!-- Navbar Akhir -->
  </header>

<!-- Content -->
<section id="signin" class="signin mb-5">
<h3 class="text-center mt-3">Ayo daftarkan Eventmu segera hanya di Sejuta Event</h3>
<hr>
<h5 class="text-center">Buat akun SejutaEvent dulu, yuk!</h5>
<small class="form-text text-muted text-center mb-5">Akun ini akan digunakan untuk login jadi jangan sampai salah isi ya.</small>
	<div class="container">
		<?php
		if (isset($_SESSION['statusberhasil']) && $_SESSION != ''){
			?>
			<div class="alert alert-success" role="alert">
			  <strong>Selamat!</strong> <?php echo $_SESSION['statusberhasil']; ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<?php
			unset($_SESSION['statusberhasil']);
		}
		?>
		<?php
		if (isset($_SESSION['statusgagal']) && $_SESSION != ''){
			?>
			<div class="alert alert-danger" role="alert">
			  <strong>Perhatian!</strong> <?php echo $_SESSION['statusgagal']; ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<?php
			unset($_SESSION['statusgagal']);
		}
		?>
  	<form action="simpan.php" method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="text" id="user" name="username" placeholder="Masukkan username kamu" class="form-control" required>
			    <small class="form-text text-muted">Username yang terdaftar untuk log in di website SejutaEvent.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
			    <small class="form-text text-muted">Password yang terdaftar untuk log in di website SejutaEvent.</small>
			  </div>
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
			    <label class="form-check-label pb-4" for="exampleCheck1">Saya setuju dengan ini</label>
			  </div>
			  <button type="submit" id="btn" class="btn btn-primary">Sign up</button>
		</form>
		<p class="pt-2">Sudah memiliki akun? <a href="signin.php">Sign In</a></p>
	</div>
</section>
<!-- Content -->
    
<!-- More Info -->
<section id="kontak" class="kontak bg-light pt-5 footer">
	<div class="container">
		<div class="row">
			<div class="col-md py-3">
				<a href="index.html"><img src="logo.png" width="100%" class="mt-1"></a>
			</div>
			<div class="col-md py-3">
				<ul>
				  <li><h3>SejutaEvent</h3></li>
				  <li><a href="tentangkami.html">Tentang Kami</a></li>
				  <li><a href="syaratketentuan.php">Syarat dan Ketentuan</a></li>
				</ul>
			</div>
			<div class="col-md py-3">
				<div class="list-group">
				  <ul>
				  	<li><h3>Kontak Kami</h3></li>
				  	<li><a href="https://wa.me/6282336539900">0823-3653-9900</a></li>
				  	<li><a href="https://www.gmail.com/">sejutaevent@gmail.com</a></li>
				  	<li><a href="https://www.instagram.com/sejutaevent/">@sejutaevent</a></li>
				  </ul>
				</div>
			</div>
			<div class="col-md py-3">
				<ul>
				  <li><h3>Lokasi :</h3></li>
				  <li>Jalan Udayana No.11 </li>
				  <li>Singaraja</li>
				  <li>Bali 81116</li>
				  <li>Senin - Jumat</li>
				  <li>08.00 - 16.00</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- More Info -->

<footer class="bg-dark py-2">
	<p>Copyright @ 2021 <br>Pemograman WEB</p>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>