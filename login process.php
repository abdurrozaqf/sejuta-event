<?php session_start();

include('koneksi.php');

if(isset($_POST['login']));
{
	$user_unsafe=$_POST['username'];
	$pass_unsafe=$_POST['password'];

	$user = mysqli_real_escape_string($con,$user_unsafe);
	$pass = mysqli_real_escape_string($con,$pass_unsafe);

	$query=mysqli_query($con,"SELECT * FROM user WHERE username='$user' and password='$pass'") or die(mysqli_error($con));

	$row=mysqli_fetch_array($query);

		$name=$row['username'];
		$counter=mysqli_num_rows($query);
		$id=$row['id'];

		if ($counter == 0)
		{
			$_SESSION['statusgagal'] = "Username atau Password anda salah!";
			header('location: signin.php');
			//echo "<script type='text/javascript'>alert('Invalid Username atau Password! anda salah!');
			//document.location='signin.php'</script>";
		}
		else
		{
			$_SESSION['id']=$id;
			$_SESSION['username']=$name;

			//$_SESSION['statusberhasil'] = "berhasil";
			//header('location: home.php');

			echo "<script type='text/javascript'>alert('Login berhasil!');
			document.location='home.php'</script>";

			//echo "<script type='text/javascript'>document.location='home.php'</script>"; 
		}
}
?>