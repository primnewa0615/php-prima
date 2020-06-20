<?php 
$conn	= mysqli_connect("localhost", "root", "", "gamecenter_db");

function tampil($query){
	global $conn;
	$result	=	mysqli_query($conn, $query);

	return $result;
}

function inputgenre($data){
	global $conn;
	$genre	= htmlspecialchars($data['genre']);

	$query 	= "INSERT INTO genre VALUES ('', '$genre')";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function inputgame($data){
	global $conn;
	$id		= htmlspecialchars($data['id']);
	$title	= htmlspecialchars($data['title']);
	$genre	= htmlspecialchars($data['genre']);
	$stock	= htmlspecialchars($data['stock']);
	$price	= htmlspecialchars($data['price']);
	$image	= upload();

	mysqli_query($conn, "INSERT INTO game VALUES('$id', '$title', '$image', '$genre')");
	mysqli_query($conn, "INSERT INTO transaction VALUES('', '$price', '$id', '$stock')");
	
	return mysqli_affected_rows($conn);
}

function upload(){
	$namafile	= $_FILES['image']['name'];
	$error		= $_FILES['image']['error'];
	$tmpfolder	= $_FILES['image']['tmp_name']; 

	if($error === 4){
		echo "<script>
					alert('Pilih gambar terlebih dulu');
				</script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg', 'png', 'img'];
	$ekstensiGambar 	 = explode('.', $namafile);
	$ekstensiGambar 	 = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script> alert('Maaf <?= $namafile ?>  bukan gambar') </script>";
		return false;
	}

	
	$namafile 	= uniqid();
	$namafile .= ".";
	$namafile .= $ekstensiGambar;
	move_uploaded_file($tmpfolder, 'img/'.$namafile);

	return $namafile;
}

function buy($data){
	global$conn;
	$jumlah	= htmlspecialchars($data['jumlah']);
	$id= $data['id'];

	mysqli_query($conn, "UPDATE transaction SET 
				stock = (stock -'$jumlah')
				WHERE id = '$id'
			");
	
	return mysqli_affected_rows($conn);
}

 ?>