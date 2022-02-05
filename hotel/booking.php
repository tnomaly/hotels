<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="booking.css">
</head>
<body>
<form action="" method="POST">

	<div id="bookingd">
			<div style="background-color: black; width : 550px; height: 350px; border-radius: 40px;">
      
			<input type="text" style="width: 300px;border: none; background: none; margin-top: 100px; text-align: center;"name="nama" id="nama" placeholder="Nama anda">

			<div style="width : 300px; height: 1px; background-color: white;: white;"></div>
			<br>
			<br>
			<br>
				<select name="tipe" style="background: none;border: none; color: black;background-color: white;border-radius: 10px; width : 200px; height: 30px;font-size: 20px; font-weight: bold;">
				<option value="">- Tipe Kamar -</option>
  				<option value="Regular">Regular</option>
  				<option value="Deluxe">Deluxe</option>
  				<option value="Royal">Royal Suite</option>
				</select>
				<br>
				<br>
				<br>
				<img src="arrow.png" style="width: 30px;margin-top: 200px;">
				<div style="background-color:#961d1b; width: 200px;height:80px;border-radius: 50px; padding-top: 10px; font-weight: bold; margin-top: -40px;">

			<input type="text" id="sds" name="durasi" placeholder="Jumlah Hari" style="background-color: black; background: none;border: none; text-align: center; width: 120px;margin-top: 30px; font-weight: bold; size: 30px;background-color: black;border-radius: 20px; height: 20px;">
		</div>
			</div>

			<br>
			<br>
			<br>
			<h2 style="float: left; margin-left: 30px; color: black;margin-top: -100px;"> Check in : <input type="date" style="width: 300px;border: none; background: none;
			margin-left: 40px; color: black; font-size: 25px;" name="checkin" id="checkin"></h2>
			<h2 style="float: left; margin-left: 30px; color: black; margin-top: -40px;"> Check out : <input type="date" style="width: 300px;border: none; background: none;margin-left: 25px; color: black;font-size: 25px;" name="checkout" id="checkout"></h2>
			<div style="background-color:white; width: 520px; height: 150px; border-radius: 51px; margin-top: -130px;">
				
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

			<button type="submit" name="submit" style="background: none;
			width: 200px; height: 50px; margin-top: -300px; background-color: black; border-radius: 30px; font-size: 30px; font-family: arial; color: white; border: none;">Pesan</button>
		</div>
			<?php 
include 'functions.php';

if (isset($_POST["submit"])) {
	mysqli_query($conn,"INSERT INTO hotelh set
		nama = '$_POST[nama]',
		tipe = '$_POST[tipe]',
		checkin = '$_POST[checkin]',
		checkout = '$_POST[checkout]',
		durasi = '$_POST[durasi]'");
	 echo"
            <script>
                alert('Kamar Telah Dipesan');
                document.location.href = 'menu.php';
            </script>
        ";

    }

?>
<style type="text/css"></style>
</body>
</html>