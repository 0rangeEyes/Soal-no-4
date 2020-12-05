<?php 
require 'fungsi.php';

    $id = $_GET["id"];

    $mkn = query("SELECT * FROM distributor WHERE id = $id")[0];

 	if (isset($_POST["submit"])){

		if ( ubahdistri($_POST) > 0){
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

<form action="" method="post">

    <table>
	<ul>
		<li>
			<label for="id">ID    : </label>
			<input type=text name=id size=20 id="id" required
            value = "<?= $mkn["id"]; ?>">
		</li>
		<li>
			<label for="nama">Nama : </label>
			<input type=text name=nama size=20 id="nama" required
            value = "<?= $mkn["nama"]; ?>">
		</li>
	</ul>
    </table>
	<button type="submit" name="submit">Submit</button>
	
</form>

</body>
</html>