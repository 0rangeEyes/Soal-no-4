<?php 

require 'fungsi.php';

$makanan = query("SELECT * FROM distributor");

?>
<!DOCTYPE html>
<html>
<head>
<title>halaman admin</title>
</head>
<body>

<h1>data makanan</h1>

<a href="index.php">Home</a>
<a href="tambahdistri.php">Tambah Distributor</a>
<a href="tambah.php">Tambah Makanan</a>

	<table border="1" cellpadding="10" cellspacing="0">

    <tr>
            <th> ID </th>
            <th> Nama </th>
            <th> Aksi </th>
	</tr>

    <?php foreach($makanan as $baris) : ?>

		<tr>
			<th> <?= $baris["id"] ?> </th>
            <th> <?= $baris["nama"] ?> </th>
			<th> 
				<a href="ubahdistri.php?id=<?= $baris["id"] ?>">Ubah</a> |
				<a href="hapusdistri.php?id=<?= $baris["id"] ?>" onclick = " return confirm('yakin ?');">Hapus</a>
			</th>
		</tr>

    <?php endforeach; ?>


</body>
</html>