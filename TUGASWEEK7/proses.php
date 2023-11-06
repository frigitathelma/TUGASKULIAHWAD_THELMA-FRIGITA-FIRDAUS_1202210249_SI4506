<?php
$koneksi = mysqli_connect("localhost","root","","oleholehtoraja");

$jenisoleholeh = $_POST['jenisoleholeh'];
$hargabarang = $_POST['hargabarang'];
$jumlahbarang = $_POST['jumlahbarang'];
$kodebarang = $_POST['kodebarang'];
$tanggal = $_POST['tanggal'];
$submit = $_POST['submit'];

$query = "INSERT INTO oleholehtoraja VALUES('$jenisoleholeh','$hargabarang','$jumlahbarang','$kodebarang','$tanggal','$submit','')";

mysqli_query($koneksi, $query);

if (isset($_POST["submit"])){
 
  header('Location: read.php');
  exit;
}
?>