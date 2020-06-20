<?php  
require "functions_no4.php";

$query = "SELECT game.title, game.image, genre.name, transaction.price, transaction.stock, transaction.id FROM  transaction JOIN game ON transaction.game_id = game.id JOIN genre ON game.genre_id = genre.id ";
$game = tampil($query);

if(isset($_POST['cari'])){
	$genre = $_POST['genre'];
	$query = "SELECT game.title, game.image, genre.name, transaction.price, transaction.stock, transaction.id FROM  transaction JOIN game ON transaction.game_id = game.id JOIN genre ON game.genre_id = genre.id WHERE genre.name = '$genre' ";
	$game = tampil($query);
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
		<form method="POST">
		<div class="kanan">
			
			<input type="text" name="genre" placeholder="&nbsp; Genre...">
			<button name="cari">Cari</button>
			
			<a href="addstock.php">Add Stock</a>
			<a href="addgenre.php">Add Genre</a>
			<a href="addgame.php">Add Game</a>
		</div>
		</form>
	</div>
	<div class="container">
		<?php foreach ($game as $g) :?>
 			<div class="content">
 				<img src="img/<?= $g['image']; ?>">
 				<h6><?= $g['title']; ?></h6>
 				<p><?= $g['name']; ?></p>
 				<p><?= $g['stock']; ?></p>
 				<p><?= $g['price']; ?></p><br>
 			<button><a href="buy_no4.php?id=<?= $g['id'] ?>">buy</a></button>
 		</div>
 		<?php endforeach ?>
		</div>
	</div>

</body>
</html>