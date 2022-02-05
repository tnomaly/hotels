<?php
require 'functions.php';
$nama = $_GET["nama"];
function hapus($nama) {
	global $conn;
	$query='DELETE FROM hotelh WHERE nama="'.$nama.'"';
	if(mysqli_query($conn,$query)){
		return true;
	}else{
		return false;
	}
}

if (hapus($nama) > 0) {
    echo"
        <script>
            alert('Pesanan Selesai');
            document.location.href = 'admin.php';
        </script>
    ";
} else{
    echo"
        <script>
            alert('Pesanan Gagal Dihapus');
            document.location.href = 'admin.php';
        </script>
    ";
}

?>