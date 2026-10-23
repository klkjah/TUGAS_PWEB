<?php
$server = "localhost";
$database = "db_latihan_bootstrap";
$username = "root";
$password = "";
$koneksidb = mysqli_connect($server, $username,
$password, $database);
if($koneksidb){
echo "Sukses terhubung";
}else{
echo "Gagal terhubung";
}
?>