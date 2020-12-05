<?php 

    require 'fungsi.php';

 	if (isset($_POST["submit"])){

		if ( tambahdistri($_POST) > 0){
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
					document.location.href = 'distributor.php';
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

<form action="" method="post">
    <table>
	<ul>
		<li>
			<label for="id">ID    : </label>
			<input type="text" name=id size=20 id="id" required>
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name=nama size=20 id="nama" required>
		</li>
	</ul>
    </table>
	<button type="submit" name="submit">Submit</button>
	
</form>

</body>
</html>