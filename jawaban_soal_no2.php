<?php 
	if(isset($_POST['submit'])){
		$pass 		= $_POST['pass'];
		$hBesar 	= preg_match('@[A-Z]@', $pass);
		$hKecil 	= preg_match('@[a-z]@', $pass);
		$nomor    	= preg_match('@[0-9]@', $pass);
		$karakter	= preg_match('/[\'^£$%&*()}{@#~?><>,!|=_+¬-]/', $pass);

		if(!$hBesar || !$hKecil || !$nomor || !$karakter || strlen($pass)<=8){
			echo "<h1>" . $pass . "<br>" . "False </h1>";
		}else{
    			echo "<h1>" . $pass . "<br>" . "True </h1>";
		}
 }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>JAWABAN SOAL NO 2</title>
</head>
<body>
	<h1>Verifikasi Password</h1>
	<h2>Rules</h2>
	<ol>
		<li>Berjumlah minimal 8 karakter</li>
		<li>Memiliki min 1 huruf kecil</li>
		<li>Memiliki min 1 huruf besar</li>
		<li>Memiliki min 1 angka</li>
		<li>Memiliki min 1 karakter spesial</li>
	</ol>
	<form method="POST">
		<label for="pass">Password</label>
		<input type="text" name="pass">
		<button type="submit" name="submit">Verivikasi</button>
	</form>

</body>
</html>
