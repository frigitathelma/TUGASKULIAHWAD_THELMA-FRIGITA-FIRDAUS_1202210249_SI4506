
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OLEH-OLEH KHAS TORAJA</title>
  </head>
  <body>
    <h1>Isi Data</h1>
    <form class="" action="proses.php" method="post">
      <label for="">Jenis oleh-oleh</label>
      <input type="text" name="jenisoleholeh" autocomplete = "off"> <br>
      <label for="">Harga Barang</label>
      <input type="text" name="hargabarang" autocomplete = "off"> <br>
      <label for="">Jumlah Barang</label>
      <input type="text" name="jumlahbarang" autocomplete="off"> <br>
      <label for="">Kode Barang</label>
      <input type="text" name="kodebarang" autocomplete="off"> <br>
      <label for="">Tanggal Pengiriman</label> <br>
      <input type="text" name="tanggal" autocomplete="off"> <br>
      <button type="submit" name="submit" >Submit</button>
    </form>
    <br>
    <a href="read.php">Lihat hasil data</a>
  </body>
</html>