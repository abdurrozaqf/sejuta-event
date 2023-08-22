<?php session_start();

include('koneksi.php');

if(isset($_POST['login']));
{
	$user_unsafe=$_POST['username'];
	$pass_unsafe=$_POST['password'];

	$user = mysqli_real_escape_string($con,$user_unsafe);
	$user = mysqli_real_escape_string($con,$pass_unsafe);

	$query=mysqli_query($con,"select * from login where username='$user' and password='$pass'")or die(mysqli_connect_error($con));

	$row=msyqli_fetch_array($query);
	$counter=mysq;i_num_rows($query);
	$id=$row['id'];

	if ($counter == 0)
	{
		echo "<script type='text/javascript'>alert('invalid Username or Password!);
		document.location=signin.php</script>";
	}
	else
	{
		$_SESSION['id']=$id;
		$_SESSION['username']=$name;

		echo "<script type='text/javascript'>document.location='home.php'</script>"	 
	}
}
?>