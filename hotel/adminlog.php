<!DOCTYPE html>
<html>
<center>
<form method="post">
<head>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>Admin Login</title>
</head>
<body>
<img src="login.png" style="width: 100px; height: 100px;margin-top: 150px;">
	<div style="background-color: black; width: 450px; height: 400px;margin-top: -150px; border-radius: 50px;box-shadow: 10px 10px 15px 15px #888888">
<input type="text" name="user" style="margin-top: 200px; width: 280px;background: none; border: none;color: white;"placeholder="Username">
<div style="height: 2px; width: 300px; background-color: white;"></div>
<br>
<br>
<input type="password" name="password" style="width: 280px;background: none; border: none;color: white;"placeholder="Password">
<div style="height: 2px; width: 300px; background-color: white;"></div>
<br>
<br>
<input type="submit" value="Login"name="submit" style="background: none; border: none;background-color: grey; border-radius:30px;width: 50px; height: 50px; width: 200px; font-size: 40px;font-family: arial;">
<div style="background-color: red; width: 350px; height: 50px; margin-top: -385px;border-radius: 100px; font-size: 40px; font-family: arial; font-weight: bold; color: white;">Admin Login</div>
</div>
</body>

 </form>
<?php 
$user = @$_POST['user'];
$password = @$_POST['password'];
if (isset($_POST['submit'])) {
	if ($_POST["user"] == "admin" && $_POST["password"] == "admin") {
		header("Location:admin.php");
	}
}
if (empty($user) || empty($password)) {
	echo "<script> alert('Mohon Isi Form Terlebih Dahulu!')</script>";
}
else{
	echo "<script> alert('Username / Password Salah!')</script>"; 
}
 ?>
 </center>
</html>