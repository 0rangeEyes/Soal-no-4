<?php 
require 'fungsi.php';

    $id = $_GET["id"];

    $mkn = query("SELECT * FROM makanan WHERE IdProduk = $id")[0];
    //var_dump($mkn);

 	if (isset($_POST["submit"])){

		if ( ubah($_POST) > 0){
			echo "
			<script>
					alert('data berhasil di ubah');
					document.location.href = 'index.php';
			</script>
			";
		}else{
			echo "
			<script>
					alert('data gagal di ubah');
					document.location.href = 'index.php';
			</script>
			";
		}

 	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<h1>Edit Data</h1>

<form action="" method="post" enctype="multipart/form-data">

    <imput type="hiden" name=gambarlama value="<?= $mkn["Gambar"]; ?>">
    <table>
	<ul>
		<li>
			<label for="id">ID    : </label>
			<input type=text name=IdProduk size=20 id="IdProduk" required
            value = "<?= $mkn["IdProduk"]; ?>">
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type=text name=Nama size=20 id="Nama" required
            value = "<?= $mkn["Nama"]; ?>">
		</li>
		<li>
            <label for="gambar">Gambar : </label>
            <br><img src="img/<?= $mkn["Gambar"]; ?>" width=60><br>
			<input type="file" name=Gambar size=20 id="Gambar" required
            value = "<?= $mkn["Gambar"]; ?>">
		</li>
		<li>
			<label for="deskripsi">Deskripsi : </label>
			<input type=text name=Deskripsi size=20 id="Deskripsi" required
            value = "<?= $mkn["Deskripsi"]; ?>">
		</li>
		<li>
			<label for="nutrisi">Nutrisi : </label>
			<input type=text name=Nutrisi size=20 id="Nutrisi" required
            value = "<?= $mkn["Nutrisi"]; ?>">
		</li>
        <li>
			<label for="berat">Berat : </label>
			<input type=text name=Berat size=20 id="Berat" required
            value = "<?= $mkn["Berat"]; ?>">
		</li>
        <li>
			<label for="iddistributor">ID Disributor   : </label>
			<input type=text name=IdDistributor size=20 id="IdDistributor" required
            value = "<?= $mkn["IdDistributor"]; ?>">
		</li>
	</ul>
    </table>
	<button type="submit" name="submit">Submit</button>
	
</form>

</body>
</html>