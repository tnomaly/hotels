<?php 
require 'functions.php';

if (isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($conn, $_POST['user']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$ppassword = mysqli_real_escape_string($conn, $_POST['ppassword']);

	if (empty($user) || empty($password) || empty($ppassword)) {
		echo  "<script>
                alert('Mohon Lengkapi Formnya');
                document.location.href = 'registrasi.php';
            </script>";
	}
	if ($password != $ppassword) {
		echo "<script>
		alert('Password Tidak Sama');
		document.location.href = 'registrasi.php';
		</script>
		";
	}
	else{
		$password = ($password);
		$sql = "INSERT into registrasi (user, password) values('$user','$password')";
		$result = mysqli_query ($conn, $sql);
		if($result){
			echo "<script>
		alert('Registrasi Berhasil');
		document.location.href = 'registrasi.php';
		</script>";
		}
	}
}

 ?>