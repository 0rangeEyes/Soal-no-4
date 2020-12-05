<?php

$conn = mysqli_connect("localhost", "root", "", "database");

function query($query){
	global $conn;
	$result = mysqli_query( $conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){

    global $conn;
    $IdProduk = $data["IdProduk"];
    $Nama = $data["Nama"];
    //$Gambar = $data["Gambar"];
    //upload gambar dulu
    $Gambar = upload();
    if ( !$Gambar ){
        return false;
    }

    $Deskripsi = $data["Deskripsi"];
    $Nutrisi = $data["Nutrisi"];
    $Berat = $data["Berat"];
    $IdDistributor = $data["IdDistributor"];

    $query = "INSERT INTO makanan VALUES 
        ('$IdProduk', '$Nama', '$Gambar', '$Deskripsi', '$Nutrisi', '$Berat', '$IdDistributor')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahdistri($data){

    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];


    $query = "INSERT INTO distributor VALUES 
        ('$id', '$nama')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){

    $namafile = $_FILES['Gambar']['name'];
    $ukuranfile = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $tmpname = $_FILES['Gambar']['tmp_name'];

    if ( $error === 4 ){
       " <script>
        alert('zonk');
        </script>";
        return false;
    }

    $extensivalid = ['jpg', 'jpeg', 'png'];
    $extensifile = explode ('.', $namafile);
    $extensifile = strtolower(end($extensifile));
    if ( !in_array($extensifile, $extensivalid) ){
        " <script>
         alert('bukan gambar');
         </script>";
         return false;
     }

     $namabaru = uniqid();
     $namabaru .= '.';
     $namabaru .= $extensifile;

     move_uploaded_file( $tmpname, 'img/' . $namabaru );

     return $namabaru;


}


function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM makanan WHERE IdProduk = $id");

	return mysqli_affected_rows($conn);
}

function hapusdistri($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM distributor WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data){

    global $conn;
    $IdProduk = $data["IdProduk"];
    $Nama = $data["Nama"];
    $gambarlama = $data["gambarlama"];

    if ( $_FILES['Gambar']['error'] === 4 ){
        $Gambar = $gambarlama;
    } else {
        $Gambar = upload();
    }

    $Deskripsi = $data["Deskripsi"];
    $Nutrisi = $data["Nutrisi"];
    $Berat = $data["Berat"];
    $IdDistributor = $data["IdDistributor"];

    $query = "UPDATE makanan SET 
        IdProduk = '$IdProduk',
        Nama = '$Nama',
        Gambar = '$Gambar',
        Deskripsi = '$Deskripsi',
        Nutrisi = '$Nutrisi',
        Berat = '$Berat',
        IdDistributor = '$IdDistributor' 
        WHERE IdProduk = $IdProduk";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubahdistri($data){

    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    
    $query = "UPDATE distributor SET 
        id = '$id',
        nama = '$nama'
        WHERE id = $id";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>