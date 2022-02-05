<?php 
include 'functions.php';

if (isset($_POST["subm"])) {
	$user = $_POST['user'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM registrasi where user = '$user'");

	if(mysqli_num_rows($result)===1){
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row['password']) ){
			header("Location:admin.php");
			exit();
		}
	}
}
 ?>