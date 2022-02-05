<form action="" method="post">
<?php 
session_start();
include 'functions.php';

if (isset($_POST['login'])) {
	
	$username = $_POST['userr'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM registrasi WHERE user = '$username'");

	//cek username
	if ( mysqli_num_rows($result) == 1 ) {
		
		//cek pass
		$row = mysqli_fetch_assoc($result);
		if ($password == $row['password']){
			// set session
			$_SESSION['username'] = $row['username'];
			$_SESSION['login'] = true;

			header("Location: menu.php");
			exit;
		}

	}

	$error = true;
}

 ?>

<!DOCTYPE html>
<html>
<center>
<head>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>Login</title>
</head>
<body>
	<?php if(isset($error) ) : ?>
		<script>
			alert("Login Gagal!");
	</script>
	<?php endif; ?>
	<img src="login.png" style="width: 100px; height: 100px;margin-top: 150px;">
	<div style="background-color: black; width: 450px; height: 400px;margin-top: -150px; border-radius: 50px;box-shadow: 10px 10px 15px 15px #888888;">
<input autocomplete="off"type="text" name="userr" style="margin-top: 200px; width: 280px;background: none; border: none;color: white;"placeholder="Username">
<div style="height: 2px; width: 300px; background-color: white;"></div>
<br>
<br>
<input type="password" name="password" style="width: 280px;background: none; border: none;color: white;"placeholder="Password">
<div style="height: 2px; width: 300px; background-color: white;"></div>
<br>
<br>
<input type="submit" value="Login" name="login" style="background: none; border: none;background-color: grey; border-radius:30px;width: 50px; height: 50px; width: 200px; font-size: 40px;font-family: arial;">
<div style="background-color: red; width: 350px; height: 50px; margin-top: -385px;border-radius: 100px; font-size: 40px; font-family: arial; font-weight: bold; color: white;">Member Login</div>

</div>
<div style="color: white; margin-top: -30px; background-color: black; width: 250px; height: 26px;border-radius: 50px;font-family: arial;padding-top: 4px;">
<a href="registrasi.php" style="color: white;text-decoration: none; font-weight: bold;">Register</a>
</div>
</body>
</center>
 </form>
</html>