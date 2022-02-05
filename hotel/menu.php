<!DOCTYPE html>
<html>
<center>
<?php
include "functions.php"; ?>
	<form action="" method="post">
	<link rel="stylesheet" href="menu.css?v=<?php echo time ();?>">]
<head>
	<?php 
        $koneksi = mysqli_connect("localhost","root","","hotel");
	?>
	<title>Halaman Utama</title>
		<div id="background1">
</div>
	<div id="h11" style="color: white;"><h1 style="font-size: 20px;margin-left: 1000px; background-color: red;width: 100px;height: 30px;margin-top: -20px;padding-top: 10px;border-radius: 80px;"><a href="logout.php" style="text-decoration: none;color: white;">Logout</a></h1></div>
	<img src="logod.png" id="logo" style="margin-top: -200px;padding-top: 45px;">
</head>

<body>
	<!-- Menu !-->
<ul>
	<li><a href="" style="text-decoration: none; color: white;">Home</a></li>
	<li><a href="#contacts" style="text-decoration: none;color: white;">Kontak</a></li>
	<li><a href="#div12" style="text-decoration: none;color: white;">Informasi</a></li>
	<li><a href="#tarifd" style="text-decoration: none; color: white;">Jenis Jenis dan Tarif Kamar</a></li>	
</ul>


<!-- Introduksi !-->
<div id="divback">
<div id="introborder">
</div>
</div>
<div id="intro">
	<h1 style="font-size: 55px; color: white; padding-top: 15px; font-family: arial;">Tentang Kami</h1>
	<p style="color: white; font-size: 40px; text-align: left; font-family: arial;">DeMotel adalah sebuah hotel yang didirikan oleh TheoCorp. Hotel ini dibangun pada tahun 2004 dan sempat menjadi hotel terbesar di Kota Bogor dengan banyak penghargaan. Hotel ini dikenal sebagai hotel yang memiliki fasilitas lengkap, harga yang terjangkau di lingkungan yang asri.</p>
</div>

<!-- Informasi !-->

<div id="div12">
	<h1 style="background-color:black;height: 100px;margin-top: -120px;padding-top: 20px;">Informasi</h1>
<div id="div1border">
</div>
<div id="div1">
	<h1 style="font-family: sans-serif;font-size: 45px;">Pelayanan</h1>
	<p style="font-family: arial;font-size: 30px; text-align: left; padding-left: 15px;">Disini kami memiliki banyak karyawan yang siap membantu anda demi kenyamanan anda, kami akan memastikan anda akan mendapatkan kenyamanan yang maksimal. Jika anda memiliki pertanyaan, silahkan tanyakan kepada setiap karyawan yang bekerja, kami akan siap membantu 24 jam.</p>
		</div>
<div id="div2border">
	
</div>
<div id="div2">
	<h1 style="font-family: sans-serif;font-size: 35px;">- Motto -</h1>
	<p style="font-family: arial;font-size: 25px; text-align: left;padding-top:  150px;font-size:  25px; padding-left: 15px;">The most memorable rest time starts here.</p>
</div>
</div>

<!-- Kontak !-->
<div id="contacts">
		<h1 style="padding-top: 70px;color: white; font-size: 50px;font-family: sans-serif; background-color:black;height: 100px;margin-top: -50px;padding-top: 20px;">Contacts</h1>

</div>
<div id="backcontact1">
	</div>
<div id="contact1">
<img src="download.png" id="insta">
<h1 style="font-size: 34px;font-family: sans-serif;padding-top: 20px;text-align: left;padding-left: 10px; text-align: center;">DeMotelBogor</h1>
</div>
<div id="backcontact2">
</div>
<div id="contact2">
	<img src="twitter.png" id="discord">
	<h1 style="font-size: 38px;font-family: sans-serif;padding-top: 20px;text-align: left;padding-left: 10px; text-align: center;">DeMotel</h1>
</div>
<div id="backcontact3">
</div>
<div id="contact3">
	<img src="download.jpg" id="youtube">
	<h1 style="font-size: 38px;font-family: sans-serif;padding-top: 20px;text-align: center;padding-left: 10px;">HotelDeMotel</h1>
</div>
<div id="tarifd"><h1 style="padding-top: 0px;color: white; font-size: 50px;font-family: sans-serif; background-color:black;height: 100px;margin-top: -1px;padding-top: 20px;">Jenis Jenis Kamar</h1></div>

<div id="tarif">

	<div id="tariff1">
		<h1 style="background-color: black; border-radius: 100px; width: 400px;color: white;font-family: arial;">Rp. 300.000 / Malam</h1>
	</div>
	<div id="tarif1"><h2 style="padding-top: 40px;">Regular</h2>
	</div>
	<div id="tarifff1">
		<h2>Fasilitas : </h2>
		<br>
		<p>- Full Size Bed</p>
		<p>- Kamar Mandi</p>
		<p>- Televisi</p>
		<p>- Mini Fridge</p>
		<p>- Meja</p>
	</div>
<br>
	<div id="tariff2">
		<h1 style="background-color: black; border-radius: 100px; width: 400px;color: white;font-family: arial;">Rp. 500.000 / Malam</h1>
	</div>
	<div id="tarif2"><h2 style="padding-top: 40px;">Deluxe Class</h2>
	</div>
	<div id="tarifff2" >
		<h2>Fasilitas : </h2>
		<br>
		<div style="font-size: 17px;">
		<p>- Queen Sized Bed</p>
		<p>- Kamar Mandi</p>
		<p>- Televisi</p>
		<p>- Mini Fridge</p>
		<p>- Meja Kerja</p>
		<p>- Sofa</p>
		<p>- Pemandangan Bagus</p>
		</div>
	</div>
	<br>
		<div id="tariff3">
		<h1 style="background-color: black; border-radius: 100px; width: 400px;color: white;font-family: arial;">Rp. 750.000 / Malam</h1>
	</div>
	<div id="tarif3"><h2 style="padding-top: 40px;">Royal Suite</h2>
	</div>
	<div id="tarifff3" >
		<h2>Fasilitas : </h2>
		<br>
		<div style="font-size: 17px;">
		<p>- King Sized Bed</p>
		<p>- Kamar Mandi</p>
		<p>- Televisi</p>
		<p>- Kulkas</p>
		<p>- Meja Kerja</p>
		<p>- Sofa</p>
		<p>- Pemandangan Bagus</p>
		<p>- Akses VIP Lounge</p>
		</div>
	</div>
	</div>
	<div id="tarifd"><h1 style="padding-top: 0px;color: white; font-size: 50px;font-family: sans-serif; background-color:black;height: 100px;margin-top: 150px;padding-top: 20px;">Booking Form</h1></div>
	<div id="booking">

	</div>
	<form action="" method="POST">

	<div id="bookingd" style="box-shadow: 10px 10px 15px 15px #888888;">
			<div style="background-color: black; width : 550px; height: 350px; border-radius: 40px;">
      
			<input type="text" style="width: 300px;border: none; background: none; margin-top: 100px; text-align: center;"name="nama" id="nama" placeholder="Nama anda"autocomplete="off">

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

			<input type="text" autocomplete="off"id="sds" name="durasi" placeholder="Jumlah Hari" style="background-color: black; background: none;border: none; text-align: center; width: 120px;margin-top: 30px; font-weight: bold; size: 30px;background-color: black;border-radius: 20px; height: 20px;">
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
		<div id="fotod"><h1 style="padding-top: 0px;color: white; font-size: 50px;font-family: sans-serif; background-color:black;height: 100px;margin-top: 50px;padding-top: 20px; margin-left: -10px;margin-right:-10px;"></h1></div>
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
                alert('Silahkan Transfer ke Nomor Rekening Berikut Untuk Membayar : 731-025-2527');
                document.location.href = 'menu.php';
            </script>
        ";
        
	mysqli_query($conn,"INSERT INTO history set
		nama = '$_POST[nama]',
		tipe = '$_POST[tipe]',
		checkin = '$_POST[checkin]',
		checkout = '$_POST[checkout]',
		durasi = '$_POST[durasi]'");
    }

?>
		</form>

</div>
</body>
<footer>
	<p style="padding-top: 7px; color: white;">©2021 DeMotel</p>
</footer>
</center>
</html>