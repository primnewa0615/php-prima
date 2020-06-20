<?php 
require "functions_no4.php";
	if (isset($_POST['input'])) {
		if(inputgame($_POST) > 0){
			echo "
				<script> alert('Data Berhasil Ditambahkan');
						 document.location.href = 'addgame_no4.php' ;
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
	<title>addgame_no4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="navbar">
		<div class="kiri">
			<h1><span class="putih">DW-</span><span class="merah">Game Center</span></h1>
		</div>
		<div class="kanan">
			<a href="addstock.php">Add Stock</a>
			<a href="addgenre_no4.php">Add Genre</a>
			<a href="addgame.php">Add Game</a>
		</div>
</div>

<form method="POST" enctype="multipart/form-data" >
	<div class="wrapinputgame">
	<h1>Tambah Game</h1>
	<br>
	<br>
	<div class="gameinput">
		<input class="input" type="number" name="id" placeholder="&nbsp;ID..."><br>
		<input class="input" type="text" name="title" placeholder="&nbsp;Title..."><br>
		<input class="input" type="file" name="image" placeholder="Choose Image"><br>
		<input type="number" name="genre" placeholder="&nbsp;Genre..."><br>
		<input type="number" name="stock" placeholder="&nbsp;Stock..."><br>
		<input type="number" name="price" placeholder="&nbsp;Price..."><br>

		<button type="submit" name="input">Input</button>
	</div>
	</div>
</form>

</body>
</html>