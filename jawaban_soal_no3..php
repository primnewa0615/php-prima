<?php 
if(isset($_POST['submit'])){
	$kata 		= $_POST['kata'];
	$arrKata	= str_split($kata);
	$countKata	= count($arrKata);

	for ($i=0; $i < $countKata; $i++) { 
		for ($j=0; $j < $i ; $j++) { 
			echo "&nbsp; &nbsp; &nbsp;";
		}
		echo $arrKata[$i];
		echo "<br>";
	}
}
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>JAWABAN SOAL NO 3</title>
</head>
<body>
	<h1>Mencetak Miring Inputan Kata</h1>
	<form method="POST">
		<label for="kata">Masukan 1 kata</label>
		<input type="text" name="kata">
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>