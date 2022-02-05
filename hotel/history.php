
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="background-color: #e3e3e3;">
	<center>
<h1 style="font-size: 20px; background-color: black;width: 120px;height: 30px;padding-top: 10px;margin-top: 15px;border-radius: 80px;font-family: arial;"><a href="admin.php" style="text-decoration: none;color: yellow;">Kembali</a></h1></div>
	<form action="" method="post">
	<table border="1" style="text-align: center;font-family: Cursive;font-size:25px;">
		<tr>
		<th>&nbspNo&nbsp </th>
		<th>&nbspNama &nbsp</th>
		<th>&nbspTipe Kamar&nbsp </th>
		<th>&nbspWaktu Check in &nbsp</th>
		<th>&nbspWaktu Check out&nbsp </th>
		<th>&nbspDurasi Menginap&nbsp </th>
		<th>&nbspFungsi&nbsp </th>
		</tr>

		</form>
		<form method="post">
	<?php 
include 'functions.php';
$no = 1;
$data = mysqli_query($conn, 'SELECT * FROM history');
while ($d = mysqli_fetch_assoc($data)) : ?>

	 <tr>
	 <td><?php echo $no++.".";?></td>
	 <td><?php echo $d["nama"];?></td>
	 <td><?php echo $d["tipe"];?></td>
	 <td><?php echo $d["checkin"];?></td>
	 <td><?php echo $d["checkout"];?></td>
	 <td><?php echo $d["durasi"];?> Malam </td>
	 <td><a style="text-decoration: none;color: red;" href="hapuss.php?nama=<?= $d["nama"];?>">Hapus</td>
	 </tr>

<?php 
endwhile;
 ?>
</table>
</table>
</body>
</html>