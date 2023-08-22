<?php session_start();
	if(empty($_SESSION['id'])):
		header('location:signin.html');
	endif;
?>

<!doctype html>
<html lang="en">
<head>
	<title>SejutaEvent</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
</head>

<body>
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
		      <a class="nav-item nav-link active" href="index.html">Beranda <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="tentangkami.html">Tentang Kami</a>
		      <a class="nav-item nav-link" href="index.html">Log out</a>
		    </div>
		  </div>
		</nav>
<!-- Navbar -->

<!-- Deskripsi -->
<section id="deskripsi" class="deskripsi">	
<div class="jumbotron">
	<div class="font-weight-bol">
		<h1>Website Event No 1 <br>Mahasiswa dengan 10.000 + Pengguna<br>#SejutaEvent dalam satu genggaman <br> Download Sekarang !</h1>
		<h2>Ayo Ikuti Event Sebanyak-banyaknya!!!</h2>
	</div>
</div>
</section>
<!-- Deskripsi -->

<!-- Info -->
<section id="info" class="info">
	<div class="container">
		<div class="row">
			<div class="col-md">
				<img src="gambar/1.png" alt="event">
				<h4>3</h4>
				<p>Event di Webiste</p>
			</div>
			<div class="col-md">
				<img src="gambar/2.png" alt="mahasiswa">
				<h4>10.000 +</h4>
				<p>Mahasiswa</p>
			</div>
			<div class="col-md">
				<img src="gambar/3.png" alt="event">
				<h4>13</h4>
				<p>Institusi Pendidikan di Undiksha</p>
			</div>
			<div class="col-md">
				<img src="gambar/4.png" alt="event">
				<h4>8</h4>
				<p>Event Organization Bergabung</p>
			</div>
		</div>
	</div>
</section>
<!-- Info -->

<!-- Content -->
<section id="content" class="content mb-5">
  		<h1 class="text-center">Ribuan Lomba, Webinar hingga Pendidikan <br> bisa kamu temukan dengan satu klik.</h1>
  		<div class="container">
			  <div class="row">
			    <div class="col">
						<div class="card border-white">
						  <img class="card-img-top" src="gambar/lomba.png" alt="lomba">
						  <div class="card-body text-center">
						    <a href="lomba.html">Lomba</a>
						  </div>
						</div>
			    </div>
			    <div class="col">
						<div class="card border-white">
						  <img class="card-img-top" src="gambar/webinar.png" alt="webinar">
						  <div class="card-body text-center">
						    <a href="webinar.html">Webinar</a>
						  </div>
						</div>
			    </div>
			    <div class="col">
						<div class="card border-white">
						  <img class="card-img-top" src="gambar/pendidikan.png" alt="pendidikan">
						  <div class="card-body text-center">
						    <a href="pendidikan.html">Pendidikan</a>
						  </div>
						</div>
			    </div>
			    <div class="col">
						<div class="card border-white">
						  <img class="card-img-top" src="gambar/lainnya.png" alt="lainnya">
						  <div class="card-body text-center">
						    <a href="lainnya.html">Lainnya</a>
						  </div>
						</div>
			    </div>
			  </div>
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
				  <li><a href="syaratketentuan.html">Syarat dan Ketentuan</a></li>
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
	<p>Copyright @ 2021 <br>PT Anak Muda Indonesia</p>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>