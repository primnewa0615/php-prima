<?php 
require "functions_no4.php";
	if (isset($_POST['input'])) {
		if(inputgenre($_POST) > 0){
			echo "
				<script> alert('Data Berhasil Ditambahkan');
						 document.location.href = 'home.php' ;
				</script>
			";
		}else{
				echo "
				<script> alert('Data Gagal Ditambahkan');
						 document.location.href = 'home.php';
				</script>
			";
		}
	
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>addgenre_no4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="navbar">
		<div class="kiri">
			<h1><span class="putih">DW-</span><span class="merah">Game Center</span></h1>
		</div>
		<div class="kanan">
			<input type="text" name="genre" placeholder="&nbsp; Genre...">
			<a href="addstock_no4.php">Add Stock</a>
			<a href="addgenre_no4.php">Add Genre</a>
			<a href="addgame_no4.php">Add Game</a>
		</div>
</div>

<form method="POST">
	<div class="wrapinputgenre">
		<h1><center>Tambah Genre</center></h1>
		<br><br>
		<div class="genreinput">
			<label for="genre">Nama Genre</label>
			<input type="text" name="genre">
			<button type="submit" name="input" >Input</button>
		</div>
	</div>
</form>
</body>
</html>