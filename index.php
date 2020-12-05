<?php 

require 'fungsi.php';

$makanan = query("SELECT * FROM makanan");

?>
<!DOCTYPE html>
<html>
<head>
<title>halaman admin</title>
</head>
<body>

<h1>data makanan</h1>

<a href="distributor.php">Distributor</a>
<a href="tambahdistri.php">Tambah Distributor</a>
<a href="tambah.php">Tambah Makanan</a>

	<table border="1" cellpadding="10" cellspacing="0">

    <tr>
            <th> ID </th>
            <th> Nama </th>
			<th> Gambar </th>
			<th> Deskripsi </th>
			<th> Nutrisi </th>
			<th> Berat </th>
			<th> ID Distributor </th>
            <th> Aksi </th>
	</tr>

    <?php foreach($makanan as $baris) : ?>

		<tr>
			<th> <?= $baris["IdProduk"] ?> </th>
            <th> <?= $baris["Nama"] ?> </th>
			<th> <img src="img/<?= $baris["Gambar"] ?>" width="80"> </th>
			<th> <?= $baris["Deskripsi"] ?> </th>
			<th> <?= $baris["Nutrisi"] ?> </th>
			<th> <?= $baris["Berat"] ?> </th>
            <th> <?= $baris["IdDistributor"] ?> </th>
			<th> 
				<a href="ubah.php?id=<?= $baris["IdProduk"] ?>">Ubah</a> |
				<a href="hapus.php?id=<?= $baris["IdProduk"] ?>" onclick = " return confirm('yakin ?');">Hapus</a>
			</th>
		</tr>

    <?php endforeach; ?>


</body>
</html>