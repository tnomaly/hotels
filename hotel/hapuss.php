<?php
require 'functions.php';
$nama = $_GET["nama"];
function hapus($nama) {
	global $conn;
	$query='DELETE FROM history WHERE nama="'.$nama.'"';
	if(mysqli_query($conn,$query)){
		return true;
	}else{
		return false;
	}
}

if (hapus($nama) > 0) {
    echo"
        <script>
            alert('Berhasil Dihapus');
            document.location.href = 'history.php';
        </script>
    ";
} else{
    echo"
        <script>
            alert('Gagal Dihapus');
            document.location.href = 'history.php';
        </script>
    ";
}

?>