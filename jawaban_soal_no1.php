
<?php 
if(isset($_POST['papasan'])){
	$jarak = $_POST['jarak'];
	$kecepatanrafaela = 10;
	$kecepatannana	= 13; 
	// $selisihWaktu satuanya menit
	$selisihWaktu	= 01.00;
	$selisihJarak = $kecepatanrafaela * $selisihWaktu/60;
	// Mencari waktu berpapasan:
	$menitpapasan = (($jarak - $selisihJarak) / ($kecepatanrafaela + $kecepatannana)) * 60 /* menit */;
	$mp =round(($menitpapasan/100), 2);
	$waktupapasan = 15.00 + $mp;
	echo "rafaela dan nana berpapasan pada pukul " . $waktupapasan;  
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>jawaban_soal_no1</title>
</head>
<body>

	<form method="POST">
		<p><b>Rafaela berangkat dari titik C menuju titik A tepat pukul 14:00 dengan kecepatan tetap 10 m/detik</b></p>
		<p><b>Nana berangkat dari titik C menuju titik A tepat pukul 15:00 dengan kecepatan 13 m/detik</b></p>
		<label for="jarak">Tentukan jarak Kota A ke C</label><br>
		<input type="number" name="jarak"><p>/meter</p>
		<button name="papasan"> Enter</button>
		<p><b></b></p>
		
	</form>

</body>
</html>