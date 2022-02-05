<?php  
require 'functions.php';
?>
<center>
<!DOCTYPE html>
<html style="background-color: #e3e3e3;">
<head>
	<div style="margin-top: 230px;">
	<h1 style="font-size: 20px; background-color: black;width: 100px;height: 30px;padding-top: 10px;margin-top: 100px;border-radius: 80px; margin-left: -250px;"><a href="logout2.php" style="text-decoration: none;color: red;">Logout</a></h1></div>
	<div style="margin-top: -140px;">
	<h1 style="font-size: 20px; background-color: black;width: 200px;height: 30px;padding-top: 10px;margin-top: 100px;border-radius: 80px;margin-left: 200px;"><a href="history.php" style="text-decoration: none;color: red; width: 150px;">History Pesanan</a></h1>
</div>
</div>
	<title>Halaman Admin</title>
</head>
<body style="font-size: 15px; font-family: arial;">

	<div style="background-color: black; width:500px;text-align: center; height: 200px; border-radius: 25px; margin-top: -270px;">
		<h2 style="font-family: courier;color: white; padding-top: 10px;">Langkah Langkah Menangani Proses Booking Online</h2>
		<p style="color: #ffcbb3;font-family: arial">1. Cek apakah uang pembayaran sudah masuk kedalam rekening.</p>
		<p style="color: #ffcbb3;font-family: arial">2. Konfirmasi dengan costumer.</p>
		<p style="color: #ffcbb3;font-family: arial">3. Pencet tombol ✓ untuk mengakhiri pesanan. </p>
		<div style="background-color: black;height:5px;width: 500px; margin-top: 100px;"></div>
	 </div>
	 <br>
	 <br>
	 <br>
	 <br>
	</div>
	<?php 
	 function query($query) {
    global $conn;
     $result = mysqli_query($conn, $query);
     $rows = [];
    while($nama = mysqli_fetch_assoc($result)) {
        $rows[] = $nama;
    }
    return $rows;
   }

	$no = 1;
	$data = query('SELECT * FROM hotelh');
	foreach ($data as $use): 
	?>
	<tr>
		<?php 
		$harga; 
		?>
		<div style="width: 500px; height: 300px; text-align: left;">
		<h3>Nama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp <td><?php echo$use["nama"] ?></td></h3>
		<h3>Tipe &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp <?php echo $use["tipe"] ?></td></h3>
		<h3>Tanggal Check In &nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp <?php echo $use["checkin"] ?></td></h3>
		<h3>Tanggal Check Out &nbsp:&nbsp&nbsp <?php echo $use["checkout"] ?></td></h3>
		<h3>Durasi (/Hari) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp <?php echo $use["durasi"] ?></td></h3>

		<h3>Total Harga &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp
			<?php 
		if ($use['tipe'] == "Regular") {
			$harga = 300000;
		}
			elseif ($use['tipe'] == "Deluxe") {
			$harga = 500000;
		}elseif ($use['tipe'] == "Royal") {
			$harga = 750000;
		} $total = $harga*$use['durasi']; 
		echo "Rp.".$total;?></h3>
	<h1 style="margin-top: 30px; margin-left: 30px; font-size: 50px; color : red"><a href="hapus.php?nama=<?= $use["nama"]; ?>" name="nama" style="background-color: black; color: white;text-decoration: none; border-radius:10px; margin-left: 210px;">✓</h1>
	<div style="background-color: black;color: white;border-radius:100px;;width:80px;height: 80px; margin-left: 220px; margin-top: -100px;">
		</a>
		</div>

	</tr>
	</div>
	 <div style="background-color: black;height:5px;width: 500px; margin-top: 50px;"></div>
	 </div>

<?php endforeach ?>

</table>
</body>

</center>
</html>