<?php
include('script.php');

if (isset($_POST['tambah'])) {
  if (insert($_POST) === "berhasil") {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "<script>
    alert('data gagal ditambahkan');
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <button><a href="index.php">back</a></button>
  <h1>Tambah Data Printer</h1>
  <form action="" method="post">
    <label for="merk">Merk</label>
    <input type="text" name="merk" placeholder="merk"> <br>
    <label for="warna">warna</label>
    <input type="text" name="warna" placeholder="warna"> <br>
    <label for="jumlah">jumlah</label>
    <input type="text" name="jumlah" placeholder="jumlah"> <br>
    <button type="submit" name="tambah">Tambah</button>
  </form>

</body>

</html>