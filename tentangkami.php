<?php session_start();
	if(empty($_SESSION['id'])):
		header('location:signin.php');
	endif;
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Tentang Kami</title>
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
		  <a class="navbar-brand" href="home.php">
		  	<img src="logo.png" width="110" height="auto" alt="sejutaevent">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav ml-auto">
		    	<a class="nav-item nav-link active"><img src="gambar/account.png" width="auto" height="30" style="margin-right: 7px;"><?php echo $_SESSION['username'] ?></a>
		      <a class="nav-item nav-link " href="home.php">Beranda <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link active" href="tentangkami.php">Tentang Kami</a>
		      <a class="nav-item nav-link" href="logout process.php">Log out</a>
		    </div>
		  </div>
		</nav>
		<!-- Navbar Akhir -->
  	</header>

<!-- Content -->
<section id="tentangkami" class="tentangkami mb-5">
<div class="jumbotron">
	<div class="font-weight-bol">
		<h1 class="text-center">Ingin Menjangkau Mahasiswa & Anak SMA seluruh Indonesia?</h1>
		<p class="text-center">Segera Hubungi kami dan dapatkan benefit dari kami yang kalian inginkan. <br>Kami sangat membantu anda dalam penyelenggaraan Event untuk mempromosikan melalui laman webiste kami.</p>
	</div>
</div>
</section>
<!-- Content -->
    
<!-- More Info -->
<section id="kontak" class="kontak bg-light pt-5 footer">
	<div class="container">
		<div class="row">
			<div class="col-md py-3">
				<a href="home.php"><img src="logo.png" width="100%" class="mt-1"></a>
			</div>
			<div class="col-md py-3">
				<ul>
				  <li><h3>SejutaEvent</h3></li>
				  <li><a href="tentangkami.php">Tentang Kami</a></li>
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