<?php  
require "functions_no4.php";
$id		= $_GET['id'];
$query = "SELECT game.title, game.image, genre.name, transaction.price, transaction.stock, transaction.id FROM  transaction JOIN game ON transaction.game_id = game.id JOIN genre ON game.genre_id = genre.id  WHERE transaction.id = '$id'";
$game = tampil($query);

if(isset($_POST['buy'])){
	if(buy($_POST) > 0 ){

		echo "<script> 
					alert('Game berhasil di beli Serial number akan segera dikirim ke Email anda');
					document.location.haref='index_no4.php';
		</script>";
	}else{
		echo "<script> 
					alert('Game berhasil di beli');
					document.location.haref='index_no4.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
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
	<div class="container">
		<?php foreach ($game as $g) :?>
 			<div class="contentbuy">
 				<img src="img/<?= $g['image']; ?>">
 				<h6><?= $g['title']; ?></h6>
 				<p><?= $g['name']; ?></p>
 				<p><?= $g['stock']; ?></p>
 				<p><?= $g['price']; ?></p><br>
 				<form method="POST">
 					<label for="jumlah">Jumlah item Yang diBeli</label><br>
 					<input type="hidden" name="id" value="<?= $g['id']; ?>">
 					<input type="number" name="jumlah">
 					<button name="buy">BUY</button>
 				</form>
 		</div>
 		<?php endforeach ?>
		</div>
	</div>

</body>
</html>