<?php 

    require 'fungsi.php';

 	if (isset($_POST["submit"])){

		if ( tambah($_POST) > 0){
			echo "
			<script>
					alert('data berhasil di tambahkan');
					document.location.href = 'index.php';
			</script>
			";
		}else{
			echo "
			<script>
					alert('data gagal di tambahkan');
					document.location.href = 'index.php';
			</script>
			";
		}

 	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
<h1>Tambah Data</h1>

<form action="" method="post" enctype="multipart/form-data">
    <table>
	<ul>
		<li>
			<label for="id">ID    : </label>
			<input type="text" name=IdProduk size=20 id="IdProduk" required>
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name=Nama size=20 id="Nama" required>
		</li>
		<li>
			<label for="gambar">Gambar : </label>
			<input type="file" name=Gambar size=20 id="Gambar" required>
		</li>
		<li>
			<label for="deskripsi">Deskripsi : </label>
			<input type="text" name=Deskripsi size=20 id="Deskripsi" required>
		</li>
		<li>
			<label for="nutrisi">Nutrisi : </label>
			<input type="text" name=Nutrisi size=20 id="Nutrisi" required>
		</li>
        <li>
			<label for="berat">Berat : </label>
			<input type="text" name=Berat size=20 id="Berat" required>
		</li>
        <li>
			<label for="iddistributor">ID Disributor   : </label>
			<input type="text" name=IdDistributor size=20 id="IdDistributor" required>
		</li>
	</ul>
    </table>
	<button type="submit" name="submit">Submit</button>
	
</form>

</body>
</html>